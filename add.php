

<?php include './datbase.php';?>

<?php
if(isset($_POST['submit']))
{
        $question_num=$_POST['question_nymber'];
         $question_text=$_POST['question_text'];
         
         $choices=array();
         $choices[1]=$_POST['choice1'];
         $choices[2]=$_POST['choice2'];
         $choices[3]=$_POST['choice3'];
         $choices[4]=$_POST['choice4'];
         $choices[5]=$_POST['choice5'];
             
      $question_num_corr=$_POST['correct'];
      $query="insert into questions (question_number,text) values ('$question_num','$question_text')";
      $insert_row=$mysqli-> query($query) or die($mysqli->error.__LINE__); 
      
      
      if($insert_row)
      {
          
          foreach ($choices as $choice => $value) {
              if($value!='')
              {
                  if($question_num_corr==$choice){
                    $correct=1;  
                      
                  }
                  else
                  {
                      
                     $correct=0;  
                  }
                  
                  $query="insert into choices (question_number,is_correct,text) values ('$question_num','$correct','$value')";
                  
                     $insert_row=$mysqli-> query($query) or die($mysqli->error.__LINE__);
                     
                     if($insert_row)
                     {
                         continue;
                         
                     }
                     else{
                         die('error ('.$mysqli->errno .')'.$mysqli->error );
                         
                         
                     }
                  
                  
              }
              
          }
          
          
         $msg="Question  has  bees added successful"; 
          
      }
      
      
}

$query="select * from questions ";

$results=$mysqli-> query($query) or die($mysqli->error.__LINE__);
$total=$results->num_rows;
$next=$total+1;

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>  php  quizzer elmokhtar  </title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        
        <header>
            <div class="container">
                <h1> php quizzer</h1>
                
                
            </div>
            
        </header>
        
        
    <main>
        
        <div class="container">
           
            <h2>ADD Anew Question </h2>
            
            <?php if(isset($msg))
            {
     echo '<p>'.$msg.'<p>'; 
                
            }?>
            <form method="post" action="add.php">
            <p> <label> Question number :</label>
                <input type="number" name="question_nymber" value="<?php echo $next;;?>"></p>
            
            <p> <label> Question text:</label>
                <input type="text" name="question_text"></p>
            
            <p> <label> choice #1:</label>
                <input type="text" name="choice1"></p>
            <p> <label> choice #2:</label>
                <input type="text" name="choice2"></p>
            <p> <label> choice #3:</label>
                <input type="text" name="choice3"></p>
            <p> <label> choice #4:</label>
                <input type="text" name="choice4"></p>
            <p> <label> choice #5:</label>
                <input type="text" name="choice5"></p>
            
            <p> <label> correct answer</label>
                <input type="number" name="correct"></p>
            <input type="submit" class="start" name="submit">
            </form>
            </div> 
        
    </main>
    
    <footer>
        
       <div class="container">
           copyright&copy; 2017, elmokhtar php quizzer
                
                
            </div> 
    </footer>
       
    </body>
</html>


