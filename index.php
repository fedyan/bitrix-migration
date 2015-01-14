<?php
define("NEED_AUTH",true);
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
if ( !$GLOBALS['USER']->IsAdmin() ) die('Access denied.');
include("bm.php");
$bm = new BitrixMigration(__FILE__);
$bm->start();
