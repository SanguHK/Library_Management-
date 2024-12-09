<?php

include("data_class.php");

$login_email=$_GET['login_email'];
$login_pasword=$_GET['login_pasword'];

    $obj=new data();
    $obj->setconnection();
    $obj->adminLogin($login_email,$login_pasword);



    





