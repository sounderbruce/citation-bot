<?php

function category_members($cat){
  $vars = Array(
    "cmtitle" => "Category:$cat", // Don't URLencode.
    "action" => "query",
    "cmlimit" => "500",
    "format" => "xml",
    "list" => "categorymembers",
  );
  $qc = "query-continue";
  $list = array();

  do {
    set_time_limit(40);
    $res = load_xml_via_bot($vars);
    if ($res) {
      foreach ($res->query->categorymembers->cm as $page) {
          $list[] = (string) $page["title"];
        }
    } else {
      echo 'Error reading API from ' . htmlspecialchars($url) . "\n\n";
    }
  } while ($vars["cmcontinue"] = (string) $res->$qc->categorymembers["cmcontinue"]);
  return $list;
}

// Returns an array; Array ("title1", "title2" ... );
function what_transcludes($template, $namespace=99){
	$titles = what_transcludes_2($template, $namespace);
	return $titles["title"];
}

function what_transcludes_2($template, $namespace = 99) {
    $vars = Array (
      "action" => "query",
      "list" => "embeddedin",
      "eilimit" => "5000",
      "format" => "xml",
      "eititle" => "Template:" . $template,
      "einamespace" => ($namespace==99)?"":$namespace,
   );
   $list = ['title' => NULL];
  
   do {
        set_time_limit(20);
        $res = load_xml_via_bot($vars);
        if (!$res) {
          echo 'Error reading API from ' . htmlspecialchars($url) . "\n";
        } else {
          foreach($res->query->embeddedin->ei as $page) {
            $list["title"][] = (string) $page["title"];
            $list["id"][] = (integer) $page["pageid"];
          }
        }
    } while ($vars["eicontinue"] = (string) $res->{"query-continue"}->embeddedin["eicontinue"]);
    return $list;
}

/**
 * Unused
 * @codeCoverageIgnore
 */
function wikititle_encode($in) {
  return str_replace(DOT_DECODE, DOT_ENCODE, $in);
}

function get_last_revision($page){
  $xml = load_xml_via_bot(Array(
      "action" => "query",
      "prop" => "revisions",
      "format" => "xml",
      "titles" => $page,
    ));
  if ($xml === FALSE) {
      echo "\n Failed to get article last revision \n";
      return FALSE;
  }
  return $xml->query->pages->page->revisions->rev["revid"];
}

function get_prefix_index($prefix, $namespace = 0, $start = "") {
  global $bot;
  $page_titles = array();
  $page_ids=array();
  $vars["apfrom"]  = $start;
  $vars = Array ("action" => "query",
    "list" => "allpages",
    "format" => "xml",
    "apnamespace" => $namespace,
    "apprefix" => $prefix,
    "aplimit" => "5000",
  );
  do {
    set_time_limit(10);
    $res = load_xml_via_bot($vars);
    if ($res && !$res->error) {
      foreach ($res->query->allpages->p as $page) {
        $page_titles[] = (string) $page["title"];
        $page_ids[] = (integer) $page["pageid"];
      }
    } else {
      echo 'Error reading API with vars '; var_dump($vars);
      if ($res->error) echo $res->error;
    }
  } while ($vars["apfrom"] = (string) $res->{"query-continue"}->allpages["apfrom"]);
  set_time_limit(45);
  return $page_titles;
}

/**
 * Unused
 * @codeCoverageIgnore
 */
function get_article_id($page) {
  $xml = load_xml_via_bot(Array(
      "action" => "query",
      "format" => "xml",
      "prop" => "info",
      "titles" => $page,
      ));
  if ($xml === FALSE) {
      echo "\n Failed to get article ID \n";
      return FALSE;
  }
  return $xml->query->pages->page["pageid"];
}

function get_namespace($page) {
    $xml = load_xml_via_bot(Array("action" => "query",
      "format" => "xml",
      "prop" => "info",
      "titles" => $page,
      ));
  if ($xml === FALSE) {
      echo "\n Failed to get article namespace \n";
      return FALSE;
  }
  return (int) $xml->query->pages->page["ns"];
}

function is_redirect($page) {
  $url = Array(
      "action" => "query",
      "format" => "xml",
      "prop" => "info",
      "titles" => $page,
      );
  $xml = load_xml_via_bot($url);
  if ($xml === FALSE) {
      echo "\n Failed to get redirect status \n";
      return array (-1, NULL);
  }
  if ($xml->query->pages->page["pageid"]) {
    // Page exists
    return array ((($xml->query->pages->page["redirect"]) ? 1 : 0),
                    $xml->query->pages->page["pageid"]);
  } else {
      return array (-1, NULL);
  }
}

/**
 * Unused
 * @codeCoverageIgnore
 */
function redirect_target($page) {
  $url = Array(
      "action" => "query",
      "format" => "xml",
      "redirects" => "1",
      "titles" => $page,
      );
  $xml = load_xml_via_bot($url);
  if ($xml === FALSE) {
      echo "\n Failed to get redirect target \n";
      return FALSE;
  }
  return $xml->pages->page["title"];
}

/**
 * Unused
 * @codeCoverageIgnore
 */
function parse_wikitext($text, $title = "API") {
  $bot = new WikipediaBot();
  $vars = array(
        'format' => 'json',
        'action' => 'parse',
        'text'   => $text,
        'title'  => $title,
    );
  $a = @json_decode($bot->post(API_ROOT, $vars));
  if (!$a) {
    // Wait a sec and try again
    sleep(2);
    $a = @json_decode($bot->post(API_ROOT, $vars));
  }
  return $a->parse->text->{"*"};
}

function namespace_id($name) {
  $lc_name = strtolower($name);
  return array_key_exists($lc_name, NAMESPACE_ID) ? NAMESPACE_ID[$lc_name] : NULL;
}

function namespace_name($id) {
  return array_key_exists($id, NAMESPACES) ? NAMESPACES[$id] : NULL;
}

// TODO mysql login is failing.
/*
 * unused
 * @codeCoverageIgnore
 */
function article_id($page, $namespace = 0) {
  if (stripos($page, ':')) {
    $bits = explode(':', $page);
    if (isset($bits[2])) return NULL; # Too many colons; improperly formatted page name?
    $namespace = namespace_id($bits[0]);
    if (is_null($namespace)) return NULL; # unrecognized namespace
    $page = $bits[1];
  }
  $page = addslashes(str_replace(' ', '_', strtoupper($page[0]) . substr($page,1)));
  $enwiki_db = udbconnect('enwiki_p', 'enwiki.labsdb');
  if (defined('PHP_VERSION_ID') && (PHP_VERSION_ID >= 50600)) { 
     $result = NULL; // mysql_query does not exist in PHP 7
  } else {
     $result = @mysql_query("SELECT page_id FROM page WHERE page_namespace='" . addslashes($namespace)
          . "' && page_title='$page'");
  }
  if (!$result) {
	  echo @mysql_error();
	  @mysql_close($enwiki_db);
	  return NULL;
  }
  $results = @mysql_fetch_array($result, MYSQL_ASSOC);
  @mysql_close($enwiki_db);
  if (!$results) return NULL;
  return $results['page_id'];
}

function is_valid_user($user) {
  if (!$user) return FALSE;
  $headers_test = @get_headers('https://en.wikipedia.org/wiki/User:' . urlencode($user), 1);
  if ($headers_test === FALSE) return FALSE;
  if (strpos((string) $headers_test[0], '404')) return FALSE;  // Even non-existant pages for valid users do exist.  They redirect, but do exist
  return TRUE;
}

/**
 * Unused
 * @codeCoverageIgnore
 */
function wiki_link($page, $style = "#036;", $target = NULL) {
  if (!$target) $target = $page;
  $css = $style?" style='color:$style !important'":"";
  return "<a href='" . WIKI_ROOT . "?title=" . urlencode($target) . "' title='$page ($target) on Wikipedia'$css>$page</a>";
}

function load_xml_via_bot($vars) {
  $bot = new WikipediaBot();
  return @simplexml_load_string($bot->post(API_ROOT, $vars));
}

/**
 * Unused
 * @codeCoverageIgnore
 */
function touch_page($page) {
  $text = get_raw_wikitext($page);
  if ($text) {
    write ($page, $text, " Touching page to update categories.  ** THIS EDIT SHOULD PROBABLY BE REVERTED ** as page content will only be changed if there was an edit conflict.");
    return TRUE;
  } else {
    return FALSE;
  }
}
