<?php
  //step1. get database access
  require ('../config/database.php');
  //step2. get from data
  $f_name = $_POST['fname'];
  $l_name = $_POST['lname'];
  $m_number= $_POST['mnumber'];
  $ide_number= $_POST['idnumber'];
  $e_mail= $_POST['email'];
  $p_wd= $_POST['passwd'];
  //step3.create query to insert into
  $query =
  "INSER INTO users (
    firstname, 
    lastname, 
    mobile_number, 
    ide_number. 
    email, 
    passsword
  ) VALUES (
   '$f_name',
   '$l_name',
   '$m_number',
   '$ide_number',
   '$e_mail',
   '$p_wd'
  )
  ";
   //step4.execute query
   $res=pg_query($conn, $query);
   //step5