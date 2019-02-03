<?php
include './datbase.php';
?>
<?php
session_start();
?>
<?php
if(!isset($_SESSION['score'])){
$_SESSION['score']=0;

}
if($_POST)
{
   $number=$_POST['number'];
    $selected_choice=$_POST['choice']; 
    
    
   
    $next=$number+1;
    //correct choice
    
    $query="select * from questions ";

$results=$mysqli-> query($query) or die($mysqli->error.__LINE__);
$total=$results->num_rows;

while ($roww=$results->fetch_assoc()){
    $number1 = $roww['question_number'];
    
    $query="select * from choices where question_number=$number1 and is_correct=1";
    $result=$mysqli-> query($query) or die($mysqli->error.__LINE__); 
    $row=$result->fetch_assoc();
    
    $correct_choice=$row['id'];
}
    
    //compare
     if($correct_choice==$selected_choice)
     {
         $_SESSION['score'] = $_SESSION['score']+1;
         
     }
    
     if($number==$total){
         
         header("location:final.php");
         exit();
     }
 else {
       header("location:question.php?n=".$next);   
 }
    
    
    
    
}



    ?>
