<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');

include("BitrixMigration.php");

$bm = new BitrixMigration('restore.php');
$bm->start();






?>