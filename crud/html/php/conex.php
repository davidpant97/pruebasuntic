<?php

try{
   $base = new PDO ('mysql:host=localhost; dbname=suntic', 'root', '123456');

    

}catch(Exception $e){
    die ('Error: '.$e->getMessage());

}



?>