
 <?php
 
 $db_host='localhost';
 $db_name='quizzer';
 $user='root';
 $pass='';


 // $con = mysqli_connect($db_host,$user,$pass,$db_name) the first way in  hte project;
 


 $mysqli = new mysqli($db_host,$user,$pass,$db_name);


 if ($mysqli->connect_error) {
 	die("faild to connect to my sql : ".$mysqli->connect_error());
 	
 }

 ?> 
