<?php
// POSTを受け取る
$name = $_POST['name'];
$mail = $_POST['mail'];
$syussin = $_POST['syussin'];

// aモードでファイルをオーブン
$file = fopen('kadai_data.txt', 'a');

//ファイルへの書き込み
fwrite($file, $name.  "\n");
fwrite($file, $mail.  "\n");
fwrite($file, $syussin. "\n");

//ファイルを閉じる
fclose($file);

?>

<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    お名前：<?= ($name) ?>
    Email：<?= ($mail) ?>
    出身地：<?= ($syussin)  ?>
</body>

</html>