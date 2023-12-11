<?php

namespace Mvc\model;

use Mvc\model\db\Connection;
use Mvc\controller\Controller;
use Mvc\core\Response;
use PDO;

class Model
{

   public function table(string $params)
   {

     $connect = new Connection;
     $query = "SELECT `name` FROM `after`";
     $stmt = $connect->pdo->query($query);
     $after = $stmt->fetch(PDO::FETCH_ASSOC);

      $query1 = "SELECT `name` FROM `admin`";
      $stmt1 = $connect->pdo->query($query1);
           $admin = $stmt1->fetch(PDO::FETCH_ASSOC);
           $after = strtolower($after['name']);
           $admin = strtolower($admin['name']);

           if($params === $after){

              return $after;

            }elseif($params === $admin){

              return $admin;

            }
    }

   public function after($path)
   {

     $controller = new Controller;
     $controller->postMethod($path[0]);

   }

   public function admin($path)
   {

      $cantroller = new Controller;
      $cantroller->postMethod($path[0]);

   }

    public function login()
    {

       $connect = new Connection;
       $email = $_POST['email'];
       $password = $_POST['password'];

       if($email == ''){

            if ($password == '') {

            }

       }else{

         $query = "SELECT  `email`,`password` FROM `users`";
         $stmt = $connect->pdo->query($query);
         $exses = $stmt->fetch(PDO::FETCH_ASSOC);

         if($email === $exses['email']){

          $pass = md5($password) === 'dafsdfasdgeqwgredf';

              if ($password === $exses['password']) {

                $controller = new Controller;
                $controller->postMethod();

              }else{

                  die('Error: password complet');
              }

         }else{

           die('Error: email complet');

         }

    }

     $connect->pdo = die;

    }

    public function registration()
    {

      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $pwd = $_POST['repPwd'];

      if($password === $pwd)
      {

         if(!$name == ''){

           if (!$email == '') {

               if (!$password == '') {

                 $connect = new Connection;
                 $exses = $connect->pdo->query("SELECT  `email`,`password` FROM `users`")->fetch(PDO::FETCH_ASSOC);
                 $pass = md5($password) === 'dafsdfasdgeqwgredf';

                    if($email == $exses['email']){

                       die('0');

                      }
                       if ($pass == $exses['password']) {

                     die('1');

                     }else{

                              $query = "INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$pass')";
                              $stmt = $connect->pdo->prepare($query);
                              $stmt->execute();
                              $controller = new Controller;
                              return  $controller->postMethod($path);

                     }
                   }
                 }
               }
             }

              $conection->pdo = die;

  }

}
