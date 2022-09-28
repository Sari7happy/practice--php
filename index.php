<?php

$str ='html内にこの文字が表示されます!ブラウザで表示してみるとphpプログラムは見えません!'
// 変数を指定$strで箱に入れている

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">

    <title>ホームページのタイトル</title>
</head>
<body>
    <h1>PHPプログラムを作ってみよう!</h1>
    <p><?php echo $str; ?></p>
    <!-- echoはその中を表示しなさい -->
    
</body>
</html>