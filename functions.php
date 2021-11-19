<?php
#This form saves fields to file
function formToFile(){

    $str = $_POST['name']."|".$_POST['email']."|".$_POST['phone']."|".$_POST['message'].
        "|".date ('Y-m-d h:i:s')."\n***\n";

    file_put_contents('form-requests.txt', $str, FILE_APPEND);

}
