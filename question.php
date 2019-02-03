
<?php
include './datbase.php';
?>

<?php session_start(); ?>

<?php
$number=(int )$_GET['n'];

//for question
$query="select * from questions where question_number=$number";

$result=$mysqli-> query($query) or die($mysqli->error.__LINE__); 
$question=$result->fetch_assoc();

$query="select * from questions ";

$results=$mysqli-> query($query) or die($mysqli->error.__LINE__);
$total=$results->num_rows;


//for choices
$query="select * from choices where question_number=$number";

$choices=$mysqli-> query($query) or die($mysqli->error.__LINE__);





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
            <div class=" current">
                Question  <?php echo $question['question_number'];?> of  <?php echo $total;?>
                
            </div>
            <p class="question" > 
                <?php echo $question['text'];?>
            </p>
            
            <form method="post" action="process.php">
                <ul class="choices">
                   <?php $row = $choices->fetch_assoc();
 var_dump($row);
                           ?>
                    
                <?php  while ($row = $choices->fetch_assoc()):?>  
                        
                    <li><input type="radio" name="choice" value="<?php echo $row['id'];?>"> <?php echo $row['text'];?> </li>

  
                 <?php endwhile;?> 
                    
                    
                  
                </ul>
                
                <input type="submit"   value="submit">
                
                <input type="hidden"  name="number" value="<?php echo $question['question_number'];?>">
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


