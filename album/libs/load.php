<?php
 function load_template($name){
     include __DIR__." ./../_templates/$name.php";

 }


function validate_cred($username,$password)
{
    if ($username =="nithish@gmail.com" and $password=="password"){
        return true;
    }else{

        return false;
    }
}




?>