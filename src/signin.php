<?php

  //step1. get database access
  require ('../config/database.php');

  //step2. get from data
  $e_mail = $_POST['email'];
  $p_wd = $_POST['passwd'];

  //step 3. query to validate data
  $sql_check_user="
  select 
     u.email,
     u.password
  from
     users u 
  where 
   u.email = '$e_mail' and 
   u.password= '$p_wd'
  limit 1

  ";
  $res_check = pg_query ($conn, $sql_check_user);
  if(pg_num_rows($res_check) > 0){
     echo "User exists. GO to main page !!!";
     header('refresh:0;url=signup.html');
  }else{
     echo "Verify data";
  }
  ?>