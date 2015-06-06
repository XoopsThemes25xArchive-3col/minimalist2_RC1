<?php
// IT-lang fo Minimalist | Version 1 - Updated on 02/02/08 by Ianez

///// General (non inserite nel tema)
define("THEME_NAME",					  "Minimalist 2");
define("THEME_DESC",					  "Layout accessibile per Xoops");
define("THEME_DESIGNER",				"Design: Ianez - Xoops Italia Staff - www.xoopsitalia.org");
define("THEME_VALIDCSS",				"Foglio di stile valido per i criteri CSS 1 e 2");
define("THEME_VALIDXHTML",			"XHTML valido per le norme W3C");
define("THEME_SUPP",			      "Demo e Supporto");
define("THEME_SUPP_URL",			  "http://xoopsworks.isgreat.org(en)- www.xoopsitalia.org(it)");

///// Metatags and DCMI
define("META_REV_AFT",					"7 days"); // importante per i bot di ricerca (1/3/7 days)
define("META_GENER",					  "XOOPS 2.0.X"); // la versione xoops che utilizzate
define("META_DCMI_COV",					"Italy"); // target geografico di riferimento del sito
define("META_DCMI_TYP",	        "Interactive Resource"); // http://dublincore.org/documents/dcmi-type-vocabulary/


///// HEADER AREA

  // Logo/Site name url
define("HOME_PAGE",				      $xoopsConfig['sitename']);
define("HOME_URL",				      XOOPS_URL);
define("HOME_DESC",				      "Pagina inziale [Acc-Key: H]");
define("HOME_AKEY",				      "H");

  // Accessible navigation (should be contextualized)
define("ANAV_SKIP",				      "Vai a:&nbsp;");
define("ANAV_CONT",				      "Contenuto principale");
define("ANAV_CONT_DESC",				"Accedi al contenuto principale della pagina");
define("ANAV_LCOL",				      "Colonna Sinistra");
define("ANAV_LCOL_DESC",				"Accedi ai menu di navigazione laterali");
define("ANAV_RCOL",				      "Colonna Destra");
define("ANAV_RCOL_DESC",				"Accedi agli altri menu");

  // Column hiding / Style switch
define("HCONTR_ON",				      "Alto contrasto");
define("HCONTR_DESC",				    "Attiva la modalità ad Alto Contrasto per utenti ipovedenti");
define("NO_COLUMNS",				    "Nascondi Colonne");
define("NO_COLUMNS_DESC",				"Nascondi tutte le colonne");
define("STYLE_OFF",				      "No stile");
define("STYLE_OFF_DESC",				"Disattiva ogni foglio di stile");


define("SHOW_ALL",				      "Layout normale");
define("SHOW_ALL_DESC",				  "Attiva il layout base");

define("HIDE_LCOL_DESC",				"Nascondi la colonna sinistra");
define("SHOW_LCOL_DESC",				"Mostra la colonna sinistra");
define("HIDE_RCOL_DESC",				"Nascondi la colonna destra");
define("SHOW_RCOL_DESC",				"Mostra la colonna destra");


  // Search
define("SEARCH_INP",				    "......");
define("SEARCH_BUT",				    "Cerca");
define("SEARCH_LAB",				    "Ricerca una parola nel sito"); //Per il tag <label> dei form di ricerca


  // Horizontal menu links (headerbar.html)
define("HBAR_LINK1",				    "News");
define("HBAR_LINK1_URL",				"".XOOPS_URL."/modules/news");
define("HBAR_LINK1_TITLE",			"Ultime notizie [Acc-Key: N]");
define("HBAR_LINK1_AKEY",		   	"N");

define("HBAR_LINK2",				    "Forum");
define("HBAR_LINK2_URL",				XOOPS_URL."/modules/newbb");
define("HBAR_LINK2_TITLE",			"Forum di discussione [Acc-Key: F]");
define("HBAR_LINK2_AKEY",		   	"F");

define("HBAR_LINK3",				    "Files");
define("HBAR_LINK3_URL",				XOOPS_URL."/modules/PDdownloads");
define("HBAR_LINK3_TITLE",			"Archivio Files [Acc-Key: D]");
define("HBAR_LINK3_AKEY",		   	"D");

define("HBAR_LINK4",				    "Links");
define("HBAR_LINK4_URL",				XOOPS_URL);
define("HBAR_LINK4_TITLE",			"Link utili [Acc-Key: L]");
define("HBAR_LINK4_AKEY",		   	"L");

define("HBAR_LINK5",				    "Faq");
define("HBAR_LINK5_URL",				XOOPS_URL);
define("HBAR_LINK5_TITLE",			"Domande Frequenti [Acc-Key: S]");
define("HBAR_LINK5_AKEY",		   	"S");


///// FOOTER
define("RSS_IMG_URL",				    "".XOOPS_URL."/backend.php");
define("RSS_IMG_ALT",				    "RSS 2.0");
define("RSS_IMG_DESC",				  "Feed RSS 2.0");
define("PAGE_TOP",				      "Inizio Pagina");
define("PAGE_TOP_DESC",				  "Vai all'inizio della pagina");

?>
