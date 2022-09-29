<?php

error_reporting(E_ALL);
// エラーリポートを消せる
ini_set('display_errors','On');

if(!empty($_POST)){
    define('MSG01','入力必須です。');
    define('MSG02','Emailの形式で入力してください。');
    define('MSG03','パスワード（再入力）が合っていません。');
    define('MSG04','半角英数字のみいただけます。');
    define('MSG05','6文字以上で入力してください。');

    // defineは定数を定義
    

    $err_msg =array();
    
// フォームが入力してない時
    if(empty($POST['email'])){

        $err_msg['email'] = MSG01;
    }

    if(empty($_POST['pass'])){

        $err_msg['pass'] = MSG01;
    }

    if(empty($_POST['pass_retype'])){

        $err_msg['pass_retype'] = MSG01;
    }

    if(empty($err_msg)){
// 変数にユーザー情報を代入
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $pass_re = $_POST['pass_retype'];
    


// emailの形式でない場合
    if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)){
        $err_msg['email'] = MSG02;
    }
// パスワードと再入力があってない場合.!==ははさない
    if($pass !== $pass_re){
        $err_msg['pass'] = MSG03;
    }

    if(empty($err_msg)){

    if(!preg_match("/^[a-zA-Z0-9])+$/",$pass)){
        $err_msg['pass'] =MSG04;
        // passwordが6文字以内でない場合、mb_stelenで何文字か判定してくれる
    }else if(mb_strlen($pass) < 6){

        $err_msg['pass'] = MSG05;
    }
    if(empty($err_msg)) header("Location:mypage.php");
    // /移動したいところへロケーション決める
    }
}
}


?>




































<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ホームページのタイトル</title>
    <style>
        body{
            margin: 0 auto;
            padding: 150px;
            width: 25%;
            background: #fbfbfa;
        }

        h1{color:#545454;font-size:20px;}
        form{
            overflow: hidden;
        }
        input[type="text"]{
            color:#545454;
            height: 60px;
            width: 100%;
            padding: 5px 10px;
            font-size: 16px;
            display: block;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        /* CSSもtypeをパスワード用に作ると文字がシークレットモードになる */
        input[type="password"]{
            color:#545454;
            height: 60px;
            width: 100%;
            padding: 5px 10px;
            font-size: 16px;
            display: block;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        input[type="submit"]{
            border: none;
            padding: 15px 30px;
            margin-bottom: 15px;
            background: #3d3938;
            color: white;
            float: right;
        }
        input[type="submit"]:hover{
            background: #111;
            cursor: pointer;
        }

        a{
            color: #545454;
            display: block;
        }

        a:hover{
            text-decoration: none;
        }

        .err_msg{
            color: #ff4d4b;
        }
    </style>   
</head>
<body>
    
    <h1>ユーザー登録</h1>    
    <form action=""method="post">
        <!-- ""自分自身に「送信」 -->
        <span class="err_msg"><?php if(!empty($err_msg['email']))echo $err_msg['email'];?></span>
        <input type="text" name="email" placeholder="email" value="<?php if(!empty($_POST['email'])) echo $_POST['email'];?>">
        <!-- 上の内容入力したい文字を保持する方法 valueの後から入力-->
        <span class="err_msg"><?php if(!empty($err_msg['pass']))echo $err_msg['pass'];?></span>
        <!-- type属性を変えるとパスワードの文字が見えない設定になる -->
        <input type="password" name="pass" placeholder="パスワード" value="<?php if(!empty($_POST['pass'])) echo $_POST['pass'];?>">
        <span class="err_msg"><?php if(!empty($err_msg['pass_retype']))echo $err_msg['pass_retype'];?></span>
        <input type="password" name="pass_retype" placeholder="パスワード（再入力）"value="<?php if(!empty($_POST['pass_retype'])) echo $_POST['pass_retype'];?>">
        <input type="submit" value="送信">
    </form>
        <a href="mypage.php">マイページへ</a>
</body>
</html>