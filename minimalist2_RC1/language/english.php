<?php
// EN-lang fo Minimalist | Version 1 - Updated on 02/02/08 by Ianez

///// General (non used in theme)
define("THEME_NAME",					  "Minimalist 2");
define("THEME_DESC",					  "Accessible layout for Xoops");
define("THEME_DESIGNER",				"Design: Ianez - Xoops Italia Staff - www.xoopsitalia.org");
define("THEME_VALIDCSS",				"Valid CSS 1 and 2 code");
define("THEME_VALIDXHTML",			"XHTML 1.0 Compliance for W3C Rules");
define("THEME_SUPP",			      "Support");
define("THEME_SUPP_URL",			  "http://xoopsworks.isgreat.org(en)- www.xoopsitalia.org(it)");

///// Metatags and DCMI
define("META_REV_AFT",					"7 days"); // important for search bot (1/3/7 days)
define("META_GENER",					  "XOOPS 2.0.X"); // xoops version you're using
define("META_DCMI_COV",					"United States"); // geographic target of you contents
define("META_DCMI_TYP",	        "Interactive Resource"); // http://dublincore.org/documents/dcmi-type-vocabulary/


///// HEADER AREA

  // Logo/Site name url
define("HOME_PAGE",				      $xoopsConfig['sitename']);
define("HOME_URL",				      XOOPS_URL);
define("HOME_DESC",				      "Home Page [Acc-Key: H]");
define("HOME_AKEY",				      "H");

  // Accessible navigation (should be contextualized)
define("ANAV_SKIP",				      "Navigate to:&nbsp;");
define("ANAV_CONT",				      "Main Content");
define("ANAV_CONT_DESC",				"Navigate to the main contents of the page");
define("ANAV_LCOL",				      "Left Column");
define("ANAV_LCOL_DESC",				"Navigate to site's main menu");
define("ANAV_RCOL",				      "Right Column");
define("ANAV_RCOL_DESC",				"Navigate to other site's menu");

  // Column hiding / Style switch
define("HCONTR_ON",				      "High contrast");
define("HCONTR_DESC",				    "Activate High Contrast layout for low-vision users");
define("STYLE_OFF",				      "No style");
define("STYLE_OFF_DESC",				"See layout without css style");
define("NO_COLUMNS",				    "Hide columns");
define("NO_COLUMNS_DESC",				"Hide any loaded column");

define("SHOW_ALL",				      "Default layout");
define("SHOW_ALL_DESC",				  "Return to normal loaded layout");

define("HIDE_LCOL_DESC",				"Hide left column");
define("SHOW_LCOL_DESC",				"Show left column");
define("HIDE_RCOL_DESC",				"Hide right column");
define("SHOW_RCOL_DESC",				"Show left column");


  // Search
define("SEARCH_INP",				    "......");
define("SEARCH_BUT",				    "Search");
define("SEARCH_LAB",				    "Find words in this site"); // For label tag in search forms


  // Horizontal menu links (headerbar.html)
define("HBAR_LINK1",				    "News");
define("HBAR_LINK1_URL",				XOOPS_URL."/modules/news");
define("HBAR_LINK1_TITLE",			"Last News [Acc-Key: N]");
define("HBAR_LINK1_AKEY",		   	"N");

define("HBAR_LINK2",				    "Forum");
define("HBAR_LINK2_URL",				XOOPS_URL."/modules/newbb");
define("HBAR_LINK2_TITLE",			"Discussion Forums [Acc-Key: F]");
define("HBAR_LINK2_AKEY",		   	"F");

define("HBAR_LINK3",				    "Files");
define("HBAR_LINK3_URL",				XOOPS_URL."/modules/PDdownloads");
define("HBAR_LINK3_TITLE",			"File repository [Acc-Key: D]");
define("HBAR_LINK3_AKEY",		   	"D");

define("HBAR_LINK4",				    "Links");
define("HBAR_LINK4_URL",				XOOPS_URL);
define("HBAR_LINK4_TITLE",			"Useful links [Acc-Key: L]");
define("HBAR_LINK4_AKEY",		   	"L");

define("HBAR_LINK5",				    "Faq");
define("HBAR_LINK5_URL",				XOOPS_URL);
define("HBAR_LINK5_TITLE",			"Frequently asked questions [Acc-Key: S]");
define("HBAR_LINK5_AKEY",		   	"S");


///// FOOTER
define("RSS_IMG_URL",				    "".XOOPS_URL."/backend.php");
define("RSS_IMG_ALT",				    "RSS 2.0");
define("RSS_IMG_DESC",				  "Feed RSS 2.0");
define("PAGE_TOP",				      "Top");
define("PAGE_TOP_DESC",				  "Go to the top of the page");

?>
