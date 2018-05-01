<?php
            try{
                $database = new PDO('mysql:host=localhost;dbname=movies;charset=utf8mb4', 'root', '');
                
            } catch(PDOException $ex){
                echo "An Error occured!<br>";
                echo $ex->getMessage();
            }
?>