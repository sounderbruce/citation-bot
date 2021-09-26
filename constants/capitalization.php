<?php
declare(strict_types=1);
const LC_SMALL_WORDS = array(/* The following will be automatically updated to alphabetical order */
          " AAOHN ", " AAP ", " AAUP ", " ABC ", " AC ", " ACM ", " AGU ", " AI ", " AIAA ", 
          " AIChE ", " AIP ", " AJHG ", " al ", " an ", " and ", " and then ", " AOAC ", 
          " as ", " ASLIB ", " at ", " at ", " aus ", " av ", " BBA ", " BBC ", " be ", " bei ", " BJPsych ", 
          " BMC ", " BMJ ", " but ", " by ", " CBC ", " CNS ", " d'un ", " d'une ", " D.C. ", 
          " D.C.L. ", " D.D.S. ", " D.Div. ", " D.M.D. ", " D.P.M. " , " M.S. ", " D.Sc. ", 
          " da ", " dans ", " das ", " DC ", " de ", " dei ", " del ", " della ", " delle ", 
          " dem ", " den ", " der ", " des ", " di ", " die ", " DNA ", " do ", " du ", 
          " e ", " ed ", " ee ", " eEarth ", " ein ", " eine ", " einen ", " EJNMMI ", " el ", " else ", 
          " EMBO ", " en ", " EPJ ", " et ", " EURASIP ", " FASEB ", " FDA ", " FEBS ", " FEMS ", " for ", 
          " from ", " för ", " für ", " HIV ", " HIV/AIDS ", " HLA ", " HTMLGIANT ", 
          " IBM ", " ICES ", " IEEE ", " if ", " ILR ", " in ", " INFLIBNET ", " into ", 
          " is ", " its ", " JAMA ", " JAMA: ", " la ", " las ", " le ", " les ", " los ", 
          " M.A. ", " M.D. ", " medRxiv ", " mit ", " MNRAS ", " mot ", " N.Y. ", " N.Y.) ", 
          " NASA ", " NEJM ", " non ", " nor ", " NRC ", " NY ", " NYC ", " NYT ", " NZ ", 
          " och ", " OECD ", " of ", " off ", " og ", " on ", " or ", " over ", " P.E. ", 
          " PCR ", " per ", " Ph.D. ", " PMLA ", " PNAS ", " PS: ", " R&D ", " RNA ", " RTÉ ", 
          " S&P ", " SAE ", " SpringerPlus ", " SSRN ", " TCI: ", " te ", " TESOL ", " the ", " then ", 
          " till ", " to ", " UK ", " um ", " und ", " unserer ", " up ", " USA ", " van ", 
          " vir ", " von ", " voor ", " when ", " with ", " within ", " woor ", " y ", 
          " zu ", " zum ", " zur ", /* The above will be automatically updated to alphabetical order */ 
          // After this line we list exceptions that need re-capitalizing after they have been decapitalized.
          " El Dorado ", " Las Vegas ", " Los Angeles ", " N Y ", " U S A ");
const UC_SMALL_WORDS = array(/* The following will be automatically updated to alphabetical order */
          " Aaohn ", " Aap ", " Aaup ", " Abc ", " Ac ", " Acm ", " Agu ", " Ai ", " Aiaa ", 
          " Aiche ", " Aip ", " Ajhg ", " Al ", " An ", " And ", " and Then ", " Aoac ", 
          " As ", " Aslib ", " At ", " At ", " Aus ", " Av ", " Bba ", " Bbc ", " Be ", " Bei ", " Bjpsych ", 
          " Bmc ", " Bmj ", " But ", " By ", " Cbc ", " Cns ", " D'un ", " D'une ", " D.c. ", 
          " D.c.l. ", " D.d.s. ", " D.div. ", " D.m.d. ", " D.p.m. " , " M.s. ", " D.sc. ", 
          " Da ", " Dans ", " Das ", " Dc ", " De ", " Dei ", " Del ", " Della ", " Delle ", 
          " Dem ", " Den ", " Der ", " Des ", " Di ", " Die ", " Dna ", " Do ", " Du ", 
          " E ", " Ed ", " Ee ", " Eearth ", " Ein ", " Eine ", " Einen ", " Ejnmmi ", " El ", " Else ", 
          " Embo ", " En ", " Epj ", " Et ", " Eurasip ", " Faseb ", " Fda ", " Febs ", " Fems ", " For ", 
          " From ", " För ", " Für ", " Hiv ", " Hiv/Aids ", " Hla ", " Htmlgiant ", 
          " Ibm ", " Ices ", " Ieee ", " If ", " Ilr ", " In ", " Inflibnet ", " Into ", 
          " Is ", " Its ", " Jama ", " Jama: ", " La ", " Las ", " Le ", " Les ", " Los ", 
          " M.a. ", " M.d. ", " Medrxiv ", " Mit ", " Mnras ", " Mot ", " N.y. ", " N.y.) ", 
          " Nasa ", " Nejm ", " Non ", " Nor ", " Nrc ", " Ny ", " Nyc ", " Nyt ", " Nz ", 
          " Och ", " Oecd ", " Of ", " Off ", " Og ", " On ", " Or ", " Over ", " P.e. ", 
          " Pcr ", " Per ", " Ph.d. ", " Pmla ", " Pnas ", " Ps: ", " R&d ", " Rna ", " Rté ", 
          " S&p ", " Sae ", " Springerplus ", " Ssrn ", " Tci: ", " Te ", " Tesol ", " The ", " Then ", 
          " Till ", " To ", " Uk ", " Um ", " Und ", " Unserer ", " Up ", " Usa ", " Van ", 
          " Vir ", " Von ", " Voor ", " When ", " With ", " Within ", " Woor ", " Y ", 
          " Zu ", " Zum ", " Zur ", /* The above will be automatically updated to alphabetical order */ 
          // After this line we list exceptions that need re-capitalizing after they have been decapitalized.
          " el Dorado ", " las Vegas ", " los Angeles ", " N y ", " U S a ");
          // For ones that start with lower-case, include both ELife and Elife versions in misspelled array
const JOURNAL_ACRONYMS = array(/* The following will be automatically updated to alphabetical order */
          " (and the Middle East) ", " (BBA) ", " (online ed.) ", " AAPOS ", " AAPS ", 
          " ACM SIGGRAPH ", " ACS ", " AJNR. ", " Algebra i Analiz ", " Amphibian Species of the World: an Online Reference. ", 
          " Angew Chem Int Ed ", " AOAC International ", " Applied ", " APS Division ", 
          " Arch Dis Child Fetal Neonatal Ed ", " Arctic ", " ASAIO ", " ASME AES ", " ASME MTD ", 
          " Avtomatika i Telemekhanika ", " B/gcvs ", " B/gcvs ", " B/gcvs ", " Bild am Sonntag ", 
          " BioEssays ", " bioRxiv ", " bioRxiv ", " BJOG ", " BJOG: ", " BMJ ", " CBD Ubiquitin ", 
          " CFSK-DT ", " ChemBioChem ", " ChemCatChem ", " ChemElectroChem ", " ChemistryOpen ", 
          " ChemistrySelect ", " ChemistryViews ", " ChemMedChem ", " ChemPhotoChem ", 
          " ChemPhysChem ", " ChemPlusChem ", " ChemSusChem ", " ChemSystemsChem ", " CMAJ ", 
          " Combinatorial Math. and Combinatorial ", " CommLaw ", " CrystEngComm ", " de la Plata ", 
          " de la Plata ", " de la Plata ", " dell'Accademia ", " Des. ", " Disease-a-Month ", 
          " Drug Des Devel Ther ", " Dtsch ", " Dtsch. ", " e-Collaboration ", " e-Journal ", 
          " e-Journal ", " e-Neuroforum ", " e-Neuroforum ", " e-Print ", " e-Print ", 
          " e-Prints ", " e-Prints ", " e-SPEN ", " e-SPEN ", " e-SPEN, ", " e-SPEN, ", 
          " E: ", " Early Modern Japan: an Interdisciplinary Journal ", " EBioMedicine ", 
          " ecancermedicalscience ", " eCrypt ", " eCrypt ", " eEarth ", " EFSA ", " eGEMs ", 
          " eGEMs ", " eJournal ", " eJournal ", " Eksperimental'naia i Klinicheskaia ", 
          " Eksperimental'noi i Teoreticheskoi ", " El Salvador ", " eLife ", " eLife ", " eLS ", " eLS ", 
          " EMBO J ", " EMBO J. ", " EMBO Journal ", " EMBO Rep ", " EMBO Rep. ", " EMBO Reports ", 
          " eNeuro ", " eNeuro ", " eNeurologicalSci ", " eNeurologicalSci ", " eNeurologicalSci ", 
          " engrXiv ", " EPA Journal ", " ePlasty ", " ePlasty ", " ePrint ", " ePrint ", " ePrints ", " ePrints ", 
          " ePub ", " ePub ", " ePub) ", " eScholarship ", " EuroIntervention ", " eVolo ", 
          " eVolo ", " eWeek ", " eWeek ", " FASEB J ", " FASEB J. ", " FEBS J ", " FEBS J. ", 
          " FEBS Journal ", " Fizika Goreniya i Vzryva ", " Föreningen i Stockholm ", 
          " für anorganische und allgemeine ", " Gigiena i Sanitariia ", " HannahArendt.net ",
          " History of Science; An Annual Review of Literature ", 
          " HOAJ biology ", " Hoppe-Seyler's ", " hprints ", " Hylli i Dritës ", " i ee ", 
          " i ee ", " i Teplovoznaja ", " i-Perception ", " iConference ", " IDCases ", 
          " IEEE/ACM ", " IEEE/ACM ", " IFAC-PapersOnLine ", " iJournal ", " iJournal ", 
          " im Gesundheitswesen ", " InfoWorld ", " Inside Higher Ed ", " iPhone ", " iScience ", 
          " iScience ", " ISME ", " ISRN AIDS ", " ISRN Genetics ", " J Gerontol A Biol Sci Med Sci ", 
          " J Sch Nurs ", " J SIAM ", " J. SIAM ", " JABS : Journal of Applied Biological Sciences ", 
          " JAK-STAT ", " JAMA Psychiatry ", " JMIR ", " JNCI: Journal ", " Journal of Materials Chemistry A ", 
          " Journal of the A.I.E.E. ", " Journal of the IEST ", " Journal sur ", " Jpn ", 
          " Jpn. ", " La Trobe ", " Latina/o ", " Le Monde artiste ", " Ltd ", " MAA Focus ", 
          " mAbs ", " mAbs ", " mBio ", " mBio ", " Med Sch ", " MedChemComm ", " Meddelelser om Grønland ", 
          " Meddelelser om Grønland, ", " medRxiv ", " MERIP ", " Methods in Molecular Biology ", 
          " mHealth ", " mHealth ", " MicrobiologyOpen ", " Mikologiya i Fitopatologiya ", 
          " MIS Quarterly ", " Molecular and Cellular Biology ", " Montana The Magazine of Western History ", 
          " mSphere ", " mSphere ", " mSystems ", " mSystems ", " MycoKeys ", " n.paradoxa ", 
          " NASA Tech Briefs ", " Nauka i Zhizn ", " NBER ", " NDT & E International ", 
          " NeuroImage ", " NeuroReport ", " Notes of the AAS ", " Now and Then: ", " Ny Forskning i Grammatik ", 
          " Nyt Tidsskrift ", " Ocean Science Journal : Osj ", " PAJ: A Journal of Performance and Art ", 
          " PALAIOS ", " PalAsiatica ", " PalZ ", " PeerJ ", " PharmSci ", " PhytoKeys ", 
          " Pis'ma v Astronomicheskii ", " PLOS ", " PLOS ", " PLOS ", " PLOS ", " PLOS ", 
          " PLOS ONE ", " PNAS ", " Proceedings of the IRE ", " Protein Eng Des Sel ", 
          " Prz ", " Prz. ", " Published in: ", " RNA ", " S.A.P.I.EN.S ", " S.A.P.I.EN.S. ", " Saggiatore musicale ", 
          " SCALACS ", " Sch ", " Scr. ", " SIAM Journal on ", " SIAM Review ", " SICOT-J ", 
          " Srp Arh Celok Lek ", " Star Trek: The Official Monthly Magazine ", " STD & AIDS ", 
          " STDs ", " Série A ", " Tae Kwon Do Times ", " TAPPI Journal ", " Tellus A ", 
          " The Annals of the American Academy ", " The De Paulia ", " The EMBO Journal ", 
          " The New Yorker ", " Tidsskr Nor Laegeforen ", " Tidsskr Nor Lægeforen ", " Time Off Magazine ", 
          " Time Out London ", " tot de ", " Transactions and archaeological record of the Cardiganshire Antiquarian Society ", 
          " U.S. ", " U.S.A. ", " U.S.A. ", " UBV Data ", " uHealth ", " uHealth ", " UNED Research Journal ", 
          " USGS ", " v Astronomicheskii Zhurna ", " WRIR ", " z/Journal ", " z/Journal ", 
          " zbMATH ", " Zeitschrift für Geologische Wissenschaften ", " Zeitschrift für Physik A Hadrons and Nuclei ", 
          " Zeitschrift für Physik A: Hadrons and Nuclei ", " Znanosti i Umjetnosti ", 
          " ZooKeys ", /* The above will be automatically updated to alphabetical order */ 
);
const UCFIRST_JOURNAL_ACRONYMS = array(/* The following will be automatically updated to alphabetical order */
          " (And the Middle East) ", " (Bba) ", " (online Ed.) ", " Aapos ", " Aaps ", 
          " ACM Siggraph ", " Acs ", " Ajnr. ", " Algebra I Analiz ", " Amphibian Species of the World: An Online Reference. ", 
          " Angew Chem Int ed ", " AOAC INTERNATIONAL ", " Appiled ", " Aps Division ", 
          " Arch Dis Child Fetal Neonatal ed ", " ARCTIC ", " Asaio ", " Asme Aes ", " Asme MTD ", 
          " Avtomatika I Telemekhanika ", " B/GCVS ", " B/Gcvs ", " b/gcvs ", " Bild Am Sonntag ", 
          " Bioessays ", " BioRxiv ", " Biorxiv ", " Bjog ", " Bjog: ", " Bmj ", " Cbd Ubiquitin ", 
          " CFSK-Dt ", " Chembiochem ", " Chemcatchem ", " Chemelectrochem ", " Chemistryopen ", 
          " Chemistryselect ", " Chemistryviews ", " Chemmedchem ", " Chemphotochem ", 
          " Chemphyschem ", " Chempluschem ", " Chemsuschem ", " Chemsystemschem ", " Cmaj ", 
          " Combinatorial Math. And Combinatorial ", " Commlaw ", " Crystengcomm ", " De La Plata ", 
          " De la Plata ", " de La Plata ", " Dell'Accademia ", " des. ", " Disease-A-Month ", 
          " Drug des Devel Ther ", " DTSCH ", " DTSCH. ", " E-Collaboration ", " E-Journal ", 
          " E-journal ", " E-Neuroforum ", " E-neuroforum ", " E-Print ", " E-print ", 
          " E-Prints ", " E-prints ", " E-SPEN ", " E-Spen ", " E-SPEN, ", " E-Spen, ", 
          " e: ", " Early Modern Japan: An Interdisciplinary Journal ", " Ebiomedicine ", 
          " Ecancermedicalscience ", " ECrypt ", " Ecrypt ", " EEarth ", " Efsa ", " EGEMs ", 
          " Egems ", " EJournal ", " Ejournal ", " Eksperimental'naia I Klinicheskaia ", 
          " Eksperimental'noi I Teoreticheskoi ", " el Salvador ", " ELife ", " Elife ", " ELS ", " Els ", 
          " Embo J ", " Embo J. ", " Embo Journal ", " Embo Rep ", " Embo Rep. ", " Embo Reports ", 
          " ENeuro ", " Eneuro ", " ENeurologicalSci ", " ENeurologicalsci ", " Eneurologicalsci ", 
          " EngrXiv ", " Epa Journal ", " EPlasty ", " Eplasty ", " EPrint ", " Eprint ", " EPrints ", " Eprints ", 
          " EPub ", " Epub ", " EPub) ", " Escholarship ", " Eurointervention ", " EVolo ", 
          " Evolo ", " EWeek ", " Eweek ", " Faseb J ", " Faseb J. ", " Febs J ", " Febs J. ", 
          " Febs Journal ", " Fizika Goreniya I Vzryva ", " Föreningen I Stockholm ", 
          " Für Anorganische und Allgemeine ", " Gigiena I Sanitariia ", " Hannaharendt.net ",
          " History of Science; an Annual Review of Literature ", 
          " Hoaj Biology ", " Hoppe-Seyler´s ", " Hprints ", " Hylli I Dritës ", " I Ee ", 
          " I ee ", " I Teplovoznaja ", " I-Perception ", " Iconference ", " Idcases ", 
          " IEEE/Acm ", " Ieee/Acm ", " Ifac-Papersonline ", " IJournal ", " Ijournal ", 
          " Im Gesundheitswesen ", " Infoworld ", " Inside Higher ed ", " Iphone ", " IScience ", 
          " Iscience ", " Isme ", " Isrn Aids ", " Isrn Genetics ", " J Gerontol a Biol Sci Med Sci ", 
          " J SCH Nurs ", " J Siam ", " J. Siam ", " Jabs : Journal of Applied Biological Sciences ", 
          " Jak-Stat ", " Jama Psychiatry ", " Jmir ", " Jnci: Journal ", " Journal of Materials Chemistry A ", 
          " Journal of the A.i.i.e ", " Journal of the Iest ", " Journal Sur ", " JPN ", 
          " JPN. ", " la Trobe ", " Latina/O ", " Le Monde Artiste ", " LTD ", " Maa Focus ", 
          " MAbs ", " Mabs ", " MBio ", " Mbio ", " Med SCH ", " Medchemcomm ", " Meddelelser Om Grønland ", 
          " Meddelelser Om Grønland, ", " MedRxiv ", " Merip ", " Methods in Molecular Biology (Clifton, N.j.) ", 
          " MHealth ", " Mhealth ", " Microbiologyopen ", " Mikologiya I Fitopatologiya ", 
          " Mis Quarterly ", " Molecular and Cellular Biology ", " Montana the Magazine of Western History ", 
          " MSphere ", " Msphere ", " MSystems ", " Msystems ", " Mycokeys ", " N.Paradoxa ", 
          " Nasa Tech Briefs ", " Nauka I Zhizn ", " Nber ", " NDT & e International ", 
          " Neuroimage ", " Neuroreport ", " Notes of the Aas ", " Now and then: ", " NY Forskning I Grammatik ", 
          " NYT Tidsskrift ", " Ocean Science Journal : Osj ", " Paj: A Journal of Performance and Art ", 
          " Palaios ", " Palasiatica ", " Palz ", " Peerj ", " Pharmsci ", " Phytokeys ", 
          " Pis'ma V Astronomicheskii ", " PLoS ", " PLos ", " PloS ", " Plos ", " plos ", 
          " PLOS One ", " Pnas ", " Proceedings of the Ire ", " Protein Eng des Sel ", 
          " PRZ ", " PRZ. ", " Published In: ", " Rna ", " S.a.p.i.en.s ", " S.a.p.i.en.s. ", " Saggiatore Musicale ", 
          " Scalacs ", " SCH ", " SCR. ", " Siam Journal on ", " Siam Review ", " Sicot-J ", 
          " SRP Arh Celok Lek ", " Star Trek: The Official Monthly Magazine ", " STD & Aids ", 
          " STDS ", " Série a ", " Tae Kwon do Times ", " Tappi Journal ", " Tellus a ", 
          " The ANNALS of the American Academy ", " The de Paulia ", " The Embo Journal ", 
          " The New Yorker (Serial) ", " Tidsskr nor Laegeforen ", " Tidsskr nor Lægeforen ", 
          " Time off Magazine ", " Time Out London ", " Tot de ", " Transactions and Archaeological Record of the Cardiganshire Antiquarian Society ", 
          " U.s. ", " U.S.a. ", " U.s.a ", " Ubv Data ", " UHealth ", " Uhealth ", " Uned Research Journal ", 
          " Usgs ", " V Astronomicheskii Zhurna ", " Wrir ", " Z/Journal ", " Z/journal ", 
          " ZbMATH ", " Zeitschrift Für Geologische Wissenschaften ", " Zeitschrift für Physik a Hadrons and Nuclei ", 
          " Zeitschrift Für Physik a: Hadrons And Nuclei ", " Znanosti I Umjetnosti ", 
          " Zookeys ", /* The above will be automatically updated to alphabetical order */ 
);
const OBVIOUS_FOREIGN_WORDS = array(" Abhandlungen ", " Actes ", " Annales ", " Archiv ", " Archives de ",
           " Archives du  ", " Archives des ", " Beiträge ", " Berichten ", " Blätter ", " Bulletin de ",
           " Bulletin des ", " Bulletin du ", " Cahiers ", " canaria ", " Carnets ", " Comptes rendus ",
           " Fachberichte ", " Historia ",
           " Jahrbuch ", " Journal du ", " Journal de ", " Journal des ", " Journal für ", " Mitteilungen ",
           " Monatshefte ", " Monatsschrift ", " Mémoires ", " Notizblatt ", " Recueil ", " Revista ",
           " Revue ", " Travaux ",
           " Studien ", " Wochenblatt ", " Wochenschrift ", " Études ", " Mélanges ", " l'École ",
           " Française ", " Estestvoznaniya ",
           " Voprosy ", " Istorii ", " Tekhniki ", " Matematika ", " Shkole ", " Ruch ", " Prawniczy ",
           " Ekonomiczny ", " Socjologiczny ", " Rivista ", " degli ", " studi ", " orientali ", " met den ",
           " Textes ", " pour nos ", " élèves ", " Lettre ", " Zeitschrift ", " für ", " Physik ", " Phonetik ",
           " allgemeine ", " Sprachwissenschaft ", " Maître ", " Phonétique ", " Arqueología ", " Códices ",
           " prehispánicos ", " coloniales ", " tempranos ", " Catálogo ",
           " Ekolist ", " revija ", " okolju ", " geographica ", " Slovenica ", " Glasnik ",
           " Muzejskega ", " Društva ", " Slovenijo ", " razgledi ", " Istorija ", " Mokslo ", " darbai ",
           " amžius ", " humanitarica ", " universitatis ", " Saulensis ", " oftalmologija ", " dienos ",
           " Lietuvos ", " muziejų ", " rinkiniai ", " Traduction ", " Terminologie ", " Rédaction ",
           " Etudes ", " irlandaises  ", " Studia ", " humaniora ", " Estonica ",
           " Archiwa ", " Biblioteki  ", " Muzea ", " Kościelne ", " Zbornik ",
           " Radova ", " Filozofskog  ", " Fakulteta ", " Prištini ", " Mém. ", " Elektriceskaja ",
           " Teplovoznaja ", " Tjaga ", " Aarbøger ",  " Oldkyndighed ", " Histori ", " Les Publications ",
           "ische ", "histoire ", " ancienne ", " d'", "http://", "www.", "www-", " Mikologiya ", " Fitopatologiya ",
           " filmski ", " ljetopis ", " Saggiatore ", " musicale ", " artiste ", " Le Monde ",
           " univerzitet ", " Pravni ", " Fakultet ", " Gazeta ", " Caminhos ", " de Ferro ",
           " Jornal ", " comboios ", " Público ", " Revista ", " Olhar ");
 
const MAP_DIACRITICS = array("À"=>"A", "Á"=>"A", "Â"=>"A", "Ã"=>"A",
    "Ä"=>"A", "Å"=>"A", "Æ"=>"AE", "Ç"=>"C", "È"=>"E", "É"=>"E",
    "Ê"=>"E", "Ë"=>"E", "Ì"=>"I", "Í"=>"I", "Î"=>"I", "Ï"=>"I",
    "Ð"=>"ETH", "Ñ"=>"N", "Ò"=>"O", "Ó"=>"O", "Ô"=>"O", "Õ"=>"O",
    "Ö"=>"O", "Ø"=>"O", "Ù"=>"U", "Ú"=>"U", "Û"=>"U", "Ü"=>"U",
    "Ý"=>"Y", "Þ"=>"THORN", "ß"=>"s", "à"=>"a", "á"=>"a", "â"=>"a",
    "ã"=>"a", "ä"=>"a", "å"=>"a", "æ"=>"ae", "ç"=>"c", "è"=>"e",
    "é"=>"e", "ê"=>"e", "ë"=>"e", "ì"=>"i", "í"=>"i", "î"=>"i",
    "ï"=>"i", "ð"=>"eth", "ñ"=>"n", "ò"=>"o", "ó"=>"o", "ô"=>"o",
    "õ"=>"o", "ö"=>"o", "ø"=>"o", "ù"=>"u", "ú"=>"u", "û"=>"u",
    "ü"=>"u", "ý"=>"y", "þ"=>"thorn", "ÿ"=>"y", "Ā"=>"A", "ā"=>"a",
    "Ă"=>"A", "ă"=>"a", "Ą"=>"A", "ą"=>"a", "Ć"=>"C", "ć"=>"c",
    "Ĉ"=>"C", "ĉ"=>"c", "Ċ"=>"C", "ċ"=>"c", "Č"=>"C", "č"=>"c",
    "Ď"=>"D", "ď"=>"d", "Đ"=>"D", "đ"=>"d", "Ē"=>"E", "ē"=>"e",
    "Ĕ"=>"E", "ĕ"=>"e", "Ė"=>"E", "ė"=>"e", "Ę"=>"E", "ę"=>"e",
    "Ě"=>"E", "ě"=>"e", "Ĝ"=>"G", "ĝ"=>"g", "Ğ"=>"G", "ğ"=>"g",
    "Ġ"=>"G", "ġ"=>"g", "Ģ"=>"G", "ģ"=>"g", "Ĥ"=>"H", "ĥ"=>"h",
    "Ħ"=>"H", "ħ"=>"h", "Ĩ"=>"I", "ĩ"=>"i", "Ī"=>"I", "ī"=>"i",
    "Ĭ"=>"I", "ĭ"=>"i", "Į"=>"I", "į"=>"i", "İ"=>"I", "ı"=>"i",
    "Ĵ"=>"J", "ĵ"=>"j", "Ķ"=>"K", "ķ"=>"k", "ĸ"=>"kra", "Ĺ"=>"L",
    "ĺ"=>"l", "Ļ"=>"L", "ļ"=>"l", "Ľ"=>"L", "ľ"=>"l", "Ŀ"=>"L",
    "ŀ"=>"l", "Ł"=>"L", "ł"=>"l", "Ń"=>"N", "ń"=>"n", "Ņ"=>"N",
    "ņ"=>"n", "Ň"=>"N", "ň"=>"n", "ŉ"=>"n", "Ŋ"=>"ENG", "ŋ"=>"eng",
    "Ō"=>"O", "ō"=>"o", "Ŏ"=>"O", "ŏ"=>"o", "Ő"=>"O", "ő"=>"o",
    "Ŕ"=>"R", "ŕ"=>"r", "Ŗ"=>"R", "ŗ"=>"r", "Ř"=>"R", "ř"=>"r",
    "Ś"=>"S", "ś"=>"s", "Ŝ"=>"S", "ŝ"=>"s", "Ş"=>"S", "ş"=>"s",
    "Š"=>"S", "š"=>"s", "Ţ"=>"T", "ţ"=>"t", "Ť"=>"T", "ť"=>"t",
    "Ŧ"=>"T", "ŧ"=>"t", "Ũ"=>"U", "ũ"=>"u", "Ū"=>"U", "ū"=>"u",
    "Ŭ"=>"U", "ŭ"=>"u", "Ů"=>"U", "ů"=>"u", "Ű"=>"U", "ű"=>"u",
    "Ų"=>"U", "ų"=>"u", "Ŵ"=>"W", "ŵ"=>"w", "Ŷ"=>"Y", "ŷ"=>"y",
    "Ÿ"=>"Y", "Ź"=>"Z", "ź"=>"z", "Ż"=>"Z", "ż"=>"z", "Ž"=>"Z",
    "ž"=>"z", "ſ"=>"s", "ƀ"=>"b", "Ɓ"=>"B", "Ƃ"=>"B", "ƃ"=>"b",
    "Ƅ"=>"SIX", "ƅ"=>"six", "Ɔ"=>"O", "Ƈ"=>"C", "ƈ"=>"c", "Ɖ"=>"D",
    "Ɗ"=>"D", "Ƌ"=>"D", "ƌ"=>"d", "ƍ"=>"delta", "Ǝ"=>"E",
    "Ə"=>"SCHWA", "Ɛ"=>"E", "Ƒ"=>"F", "ƒ"=>"f", "Ɠ"=>"G",
    "Ɣ"=>"GAMMA", "ƕ"=>"hv", "Ɩ"=>"IOTA", "Ɨ"=>"I", "Ƙ"=>"K",
    "ƙ"=>"k", "ƚ"=>"l", "ƛ"=>"lambda", "Ɯ"=>"M", "Ɲ"=>"N", "ƞ"=>"n",
    "Ɵ"=>"O", "Ơ"=>"O", "ơ"=>"o", "Ƣ"=>"OI", "ƣ"=>"oi", "Ƥ"=>"P",
    "ƥ"=>"p", "Ƨ"=>"TWO", "ƨ"=>"two", "Ʃ"=>"ESH", "ƫ"=>"t", "Ƭ"=>"T",
    "ƭ"=>"t", "Ʈ"=>"T", "Ư"=>"U", "ư"=>"u", "Ʊ"=>"UPSILON", "Ʋ"=>"V",
    "Ƴ"=>"Y", "ƴ"=>"y", "Ƶ"=>"Z", "ƶ"=>"z", "Ʒ"=>"EZH", "Ƹ"=>"EZH",
    "ƹ"=>"ezh", "ƺ"=>"ezh", "Ƽ"=>"FIVE", "ƽ"=>"five", "Ǆ"=>"DZ",
    "ǅ"=>"D", "ǆ"=>"dz", "Ǉ"=>"LJ", "ǈ"=>"L", "ǉ"=>"lj", "Ǌ"=>"NJ",
    "ǋ"=>"N", "ǌ"=>"nj", "Ǎ"=>"A", "ǎ"=>"a", "Ǐ"=>"I", "ǐ"=>"i",
    "Ǒ"=>"O", "ǒ"=>"o", "Ǔ"=>"U", "ǔ"=>"u", "Ǖ"=>"U", "ǖ"=>"u",
    "Ǘ"=>"U", "ǘ"=>"u", "Ǚ"=>"U", "ǚ"=>"u", "Ǜ"=>"U", "ǜ"=>"u",
    "ǝ"=>"e", "Ǟ"=>"A", "ǟ"=>"a", "Ǡ"=>"A", "ǡ"=>"a", "Ǣ"=>"AE",
    "ǣ"=>"ae", "Ǥ"=>"G", "ǥ"=>"g", "Ǧ"=>"G", "ǧ"=>"g", "Ǩ"=>"K",
    "ǩ"=>"k", "Ǫ"=>"O", "ǫ"=>"o", "Ǭ"=>"O", "ǭ"=>"o", "Ǯ"=>"EZH",
    "ǯ"=>"ezh", "ǰ"=>"j", "Ǳ"=>"DZ", "ǲ"=>"D", "ǳ"=>"dz", "Ǵ"=>"G",
    "ǵ"=>"g", "Ƕ"=>"HWAIR", "Ƿ"=>"WYNN", "Ǹ"=>"N", "ǹ"=>"n",
    "Ǻ"=>"A", "ǻ"=>"a", "Ǽ"=>"AE", "ǽ"=>"ae", "Ǿ"=>"O", "ǿ"=>"o",
    "Ȁ"=>"A", "ȁ"=>"a", "Ȃ"=>"A", "ȃ"=>"a", "Ȅ"=>"E", "ȅ"=>"e",
    "Ȇ"=>"E", "ȇ"=>"e", "Ȉ"=>"I", "ȉ"=>"i", "Ȋ"=>"I", "ȋ"=>"i",
    "Ȍ"=>"O", "ȍ"=>"o", "Ȏ"=>"O", "ȏ"=>"o", "Ȑ"=>"R", "ȑ"=>"r",
    "Ȓ"=>"R", "ȓ"=>"r", "Ȕ"=>"U", "ȕ"=>"u", "Ȗ"=>"U", "ȗ"=>"u",
    "Ș"=>"S", "ș"=>"s", "Ț"=>"T", "ț"=>"t", "Ȝ"=>"YOGH", "ȝ"=>"yogh",
    "Ȟ"=>"H", "ȟ"=>"h", "Ƞ"=>"N", "ȡ"=>"d", "Ȣ"=>"OU", "ȣ"=>"ou",
    "Ȥ"=>"Z", "ȥ"=>"z", "Ȧ"=>"A", "ȧ"=>"a", "Ȩ"=>"E", "ȩ"=>"e",
    "Ȫ"=>"O", "ȫ"=>"o", "Ȭ"=>"O", "ȭ"=>"o", "Ȯ"=>"O", "ȯ"=>"o",
    "Ȱ"=>"O", "ȱ"=>"o", "Ȳ"=>"Y", "ȳ"=>"y", "ȴ"=>"l", "ȵ"=>"n",
    "ȶ"=>"t", "ȷ"=>"j", "ȸ"=>"db", "ȹ"=>"qp", "Ⱥ"=>"A", "Ȼ"=>"C",
    "ȼ"=>"c", "Ƚ"=>"L", "Ⱦ"=>"T", "ȿ"=>"s", "ɀ"=>"z", "Ɂ"=>"STOP",
    "ɂ"=>"stop", "Ƀ"=>"B", "Ʉ"=>"U", "Ʌ"=>"V", "Ɇ"=>"E", "ɇ"=>"e",
    "Ɉ"=>"J", "ɉ"=>"j", "Ɋ"=>"Q", "ɋ"=>"q", "Ɍ"=>"R", "ɍ"=>"r",
    "Ɏ"=>"Y", "ɏ"=>"y", "ɐ"=>"a", "ɑ"=>"alpha", "ɒ"=>"alpha",
    "ɓ"=>"b", "ɔ"=>"o", "ɕ"=>"c", "ɖ"=>"d", "ɗ"=>"d", "ɘ"=>"e",
    "ə"=>"schwa", "ɚ"=>"schwa", "ɛ"=>"e", "ɜ"=>"e", "ɝ"=>"e",
    "ɞ"=>"e", "ɟ"=>"j", "ɠ"=>"g", "ɡ"=>"script", "ɣ"=>"gamma",
    "ɤ"=>"rams", "ɥ"=>"h", "ɦ"=>"h", "ɧ"=>"heng", "ɨ"=>"i",
    "ɩ"=>"iota", "ɫ"=>"l", "ɬ"=>"l", "ɭ"=>"l", "ɮ"=>"lezh", "ɯ"=>"m",
    "ɰ"=>"m", "ɱ"=>"m", "ɲ"=>"n", "ɳ"=>"n", "ɵ"=>"barred",
    "ɷ"=>"omega", "ɸ"=>"phi", "ɹ"=>"r", "ɺ"=>"r", "ɻ"=>"r", "ɼ"=>"r",
    "ɽ"=>"r", "ɾ"=>"r", "ɿ"=>"r", "ʂ"=>"s", "ʃ"=>"esh", "ʄ"=>"j",
    "ʅ"=>"squat", "ʆ"=>"esh", "ʇ"=>"t", "ʈ"=>"t", "ʉ"=>"u",
    "ʊ"=>"upsilon", "ʋ"=>"v", "ʌ"=>"v", "ʍ"=>"w", "ʎ"=>"y", "ʐ"=>"z",
    "ʑ"=>"z", "ʒ"=>"ezh", "ʓ"=>"ezh", "ʚ"=>"e", "ʞ"=>"k", "ʠ"=>"q",
    "ʣ"=>"dz", "ʤ"=>"dezh", "ʥ"=>"dz", "ʦ"=>"ts", "ʧ"=>"tesh",
    "ʨ"=>"tc", "ʩ"=>"feng", "ʪ"=>"ls", "ʫ"=>"lz", "ʮ"=>"h", "ʯ"=>"h");
