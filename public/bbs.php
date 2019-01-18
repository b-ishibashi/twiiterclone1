<?php

//関数読み込み
require_once __DIR__ . '/../functions.php';

$comments = [];
if (isset($_POST['talk'])) {
    $comments[] = $_POST['text'];
}

var_dump($comments);

include __DIR__ . '/../template/bbs.php';