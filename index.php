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