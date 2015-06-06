<?php
include "mainfile.php"; //if the page is in a subfolder you have to code: include "../mainfile.php"; 
include "header.php"; //same as above
//Uncomment Following lines if you want to hide (value 0) left or right block in the page.
//ATTENTION: this works only if you have an if statement in theme.html such as <{if $xoops_showrblock == 1}>
//$xoopsTpl->assign( 'xoops_showlblock', 0);
//$xoopsTpl->assign( 'xoops_showrblock', 0);
?>

//Yor html code goes here!! (the code between the tags <body> </body> it's ok)
//Yor html code goes here!!
//Yor html code goes here!!

<?php

//Uncomment one of the following lines if you want to add custom elements such as dedicated page title or keywords
//$xoopsTpl->assign('xoops_pagetitle', 'Change this text with your custom text');
//$xoTheme->addMeta( 'meta', 'keywords', 'your,custom,keywords' );
//$xoTheme->addMeta( 'meta', 'description', 'custom site/page description' );

include XOOPS_ROOT_PATH.'/footer.php';

?>
