<?php

error_reporting(E_ALL);
ini_set('display_errors','On');

if(!empty($_POST)){
    define('MSG01','入力必須です。');
    define('MSG02','Emailの形式で入力してください。');
    define('MSG03','パスワード（再入力）が合っていません。');
    define('MSG04','半角英数字のみご利用ください。');
    define('MSG05','6文字以上で入力してください。');
    
    $err_flg =false;
    $err_msg =array();

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
    $email =$_POST['email'];
    $pass =$_POST['pass'];
    $pass_re =$_POST['pass_retype'];


}

if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/".$email)){
    $err_msg['email'] = MSG02;
}
if($pass)! == $pass_re){
    $err_msg['pass'] = MSG03;
}
if(empty($err_msg)){
    if(!preg_match("/^[a-zA-Z0-9])+$/".$pass)){
        $err_msg['pass'] =MSG04;
    }else if(mb_strlen($pass) < 6){
        $err_msg['pass'] = MSG05;
    }
if(empty($err_msg)) header("location:mypage.php");
}

}

1

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
    </style>   
</head>
<body>
    
    <h1>ユーザー登録</h1>    
    <form action=""method="post">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="pass" placeholder="パスワード">
        <input type="text" name="pass_retype" placeholder="パスワード（再入力）">
        <input type="submit" value="送信">
    </form>
        <a href="mypage.php">マイページへ</a>
</body>
</html>