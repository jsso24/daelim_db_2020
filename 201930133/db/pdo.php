<?php
include "../dbinfo.php";

try{
    $db=new PDO("mysql:host=localhost;dbname=phpdaelim5;"
    ,"daelim5","1234");
    if($db){
        echo "db접속 성공";
    }else{
        echo "db접속 실패";
    }

}catch(PDOException $e){
    echo $e->getMessage();
} 