<?php

error_reporting(E_ALL);
// エラーリポートを消せる
ini_set('display_errors','On');

if(!empty($_FILES)){

        $file= $_FILES['image'];

        $msg ='';
        $img_path ='';

        include('upload.php');
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

        .img_area, .img_area img{
            width: 100%;
        }

    </style>   
</head>
<body>
    <p><?php if(!empty($msg)) echo $msg;?></p>
    <h1>写真アップロード</h1>    
    <form method="post" enctype="multipart/form-data">
        <!-- ""自分自身に「送信」 -->
        <input type="file" name ="image">
        <input type="submit" value="アップロード">
        
    </form>
    <?php if(!empty($img_path)){?>
        <div class="img_area">
            <p>アップロードした画像</p>
            <img src="<?php echo $img_path;?>">
        </div>
        <?php } ?>
</body>
</html>