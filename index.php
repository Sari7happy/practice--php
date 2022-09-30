<?php

error_reporting(E_ALL);
// エラーリポートを消せる
ini_set('display_errors','On');

if(!empty($_POST)){

        $to = $_POST['email'];
        $subject = $_POST['subject'];
        $comment= $_POST['comment'];

        $msg ='';
        include('mail.php');
}
?>

<!-- 
        $dsn=("mysql:host=localhost;dbname=php_sample01;charset=utf8");

        $user= 'root';
        $password = 'root1';

        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
        );
    

        $dbh= new PDO($dsn,$user,$password,$options);

        $stmt = $dbh ->prepare('SELECT*FROM users WHERE email =:email AND pass =:pass');

        $stmt ->execute(array(':email' => $email,':pass'=> $pass));
        
        $result =0;

        $result =$stmt ->fetch(PDO::FETCH_ASSOC);

        if(!empty($result)){
            session_start();
            $_SESSION['login'] = true;
        
        header("Location:mypage.php");
    // /移動したいところへロケーション決める
    }
}

?> -->



























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

        textarea{
            color:#545454;
            height: 200px;
            width: 100%;
            padding: 5px 10px;
            font-size:16px;
            display: block;
            margin-bottom: 10px;
            box-sizing: border-box;
            border-color: #ddd;
        }


        input[type="submit"]:hover{
            background: #111;
            cursor: pointer;
        }

    </style>   
</head>
<body>
    <p><?php if(!empty($msg)) echo $msg;?></p>
    <h1>お問合せ</h1>    
    <form method="post">
        <!-- ""自分自身に「送信」 -->
        
        <input type="text" name="email" placeholder="email" value="<?php if(!empty($_POST['email'])) echo $_POST['email'];?>">
    
        <input type="text" name="subject" placeholder="件名" value="<?php if(!empty($_POST['subject'])) echo $_POST['subject'];?>">
<!-- phpの中に値を保持するプログラムを書く -->
        <textarea name="comment" placeholder="内容"><?php if(!empty($_POST['comment'])) echo $_POST['comment'];?></textarea>
        
        <input type="submit" value="送信">
    </form>

</body>
</html>