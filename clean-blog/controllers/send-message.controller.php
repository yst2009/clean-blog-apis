<?php 

require_once BASE_PATH."core/validations.php";
$errors = [];

if(check_method("POST")){

    $name = sanitize_input('name');
    $email = sanitize_input('email');
    $phone = sanitize_input('phone');
    $message = sanitize_input('message');

    // name =>  required , string(a-zA-Z0-9 .) , min:3 , max : 200 

   if(required($name)){
        $errors['name'] = "name is required";
   }elseif(min_input($name,3)){
        $errors['name'] = "name must be at least 3 characters long";
   }

   // email => required , email 
   // phone => required , numeric , max:15
   // message => required , string(a-zA-Z0-9 .,!?) , min:10 , max : 1000


   if(empty($errors)){
        // insert data 
        $result = insert('messages',[
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'content' => $message
        ]);
        if($result){
            set_session("success","message sent successfully");
        }
    }else{
        set_session("errors",$errors);
    }

   header("Location: ".BASE_URL."index.php?page=contact");
   exit;

}else{
    require_once "views/404.views.php";
}