<?php 

require_once 'lang/i18n.class.php';
require_once 'functions.php';

$lang = ($_GET['language'])?$_GET['language']:'fr';

$i18n = new i18n();

$i18n->setCachePath('./langcache');
$i18n->setFilePath('./lang/lang_{LANGUAGE}.ini'); // language file path
$i18n->setFallbackLang($lang);
$i18n->setPrefix('L');
$i18n->setForcedLang($lang); // force english, even if another user language is available
$i18n->init();

?>