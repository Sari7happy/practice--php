<?php
    if(!empty($file)){

        $upload_path ='images/'.$file['name'];
        $rst =move_uploaded_file($file['tmp_name'],$upload_path);

        if($rst){
            $msg ='画像をアップしました。アップした画像ファイル名:'.$file['name'];
            $img_path =$upload_path;

        }else{
            $msg ='画像はアップできませんでした。エラー内容:'.$file['error'];

        }

    }else{
        $msg ='画像を選択してください。';   




    }
