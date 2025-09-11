<?php

  //step1. get database access
  require ('../config/database.php');

  //step2. get from data
  $f_name = $_POST['fname'];
  $l_name = $_POST['lname'];
  $m_number = $_POST['mnumber'];
  $id_number = $_POST['idnumber'];
  $e_mail = $_POST['email'];
  $p_wd = $_POST['passwd'];
  $enc_pass = password_hash($p_wd, PASSWORD_DEFAULT);
  //step3.create query to insert into
  $query =
    "
    INSERT INTO users (
    firstname, 
    lastname, 
    mobile_number, 
    ide_number, 
    email, 
    password
  ) VALUES (
   '$f_name',
   '$l_name',
   '$m_number',
   '$id_number',
   '$e_mail',
   '$enc_pass'
  )
  ";
   //step4.execute query
   $res = pg_query ($conn, $query);

   //step5. validate result
   if($res){
    echo "User has been created succesfully !!!";
   }else{
    echo "Something wrong!";
   }

   ?>