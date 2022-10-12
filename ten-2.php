<?php
$email = "abc@gmail.com";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo $email . " is valid";
}else{
echo $email . "is not valid";
}
?>