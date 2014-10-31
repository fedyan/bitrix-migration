<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');

include("bm.php");

$bm = new BitrixMigration('restore.php');
$bm->start();






?>