<?php
require_once "function.php";

$checkbox = [
"Русский","Английский","Немецкий","Испанский"
    ];

    $select = [
        "Yandex","Mail","Google"
         ];

         $radio = [
            "PHP","JS","CSS"
             ];

         $name = $_POST["name"]??"";
         $number = $_POST["number"]??"";
         $chb = $_POST["chb"]??"";
         $lang = $_POST["lang"]??[];
         $email = $_POST["email"]??"";
         $radiobutton = $_POST["radiobutton"]??"";

         // Проверка имени

         $error = [];

$count = mb_strlen($name);
if($count<2){
    $name = "";
    $error[0] = "В строке имя должно быть больше одного символа <br>";
}


     if(preg_match("/^((\+7)|8){1}[0-9]{10}$/s",$number)){
    }
    else {
        $number = "";
        $error[1] = "Номер должен быть формы +7/8********** <br>";
    };


  global $error;
    filter_var($email, FILTER_SANITIZE_EMAIL);
  if (filter_var($email, FILTER_VALIDATE_EMAIL)){
  }
  else {
    $email = "";
    $error[2] = "Введите корректный email <br>";
  }


   if(count($lang)==0){
    $error[3] = "Выберите хотя бы один язык <br>";
   }
   else{
   }


    
    if($radiobutton==""){
      $error[4] = "Выберите хотя бы один пункт <br>";
     
    };


   if(count($error)==0){
//csv
getCsv($name,$number,$radiobutton,$email,$lang,$chb);

//json
getJson($name,$number,$radiobutton,$email,$lang,$chb);

//txt
getTxt($name,$number,$radiobutton,$email,$lang,$chb);
   }

    

require_once "index.view.php";