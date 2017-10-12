<?php

     //creating func. to conn. to db
function db_connect(){

        //varibles with db details
         $db_user = "onion";
         $db_pass = "noino";
         $db_host = "localhost";
         $db_name = "login_base";
         $db_type = "mysql";

         $options = array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8');

         // preparing data structure DSN
         $dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";


         try{
                 $pdo = new PDO($dsn, $db_user, $db_pass, $options);

                  //some error handling
                 $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                 $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);


            print("conncetion successful!");

          }catch(PDOException $e){
             die("Error ;(".$e->getMessage());
          }

         return $pdo;

       }


        header('Content-Type: text/html; charset=utf-8');
    session_start();

?>

