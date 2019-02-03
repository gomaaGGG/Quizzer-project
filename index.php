
<?php
include './datbase.php';
?>
<?php
$query="select * from questions ";

$results=$mysqli-> query($query) or die($mysqli->error.__LINE__);
$total=$results->num_rows;

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
                <h2> test your knowledge in php tutorials </h2>
                <p> this is a multiple choice to test your knowledge of php    </p>
                <ul>
                    <li><strong> number of Questions : </strong> <?php echo $total;?> <li>
                        <br>
                    <li><strong> Type :</strong> multiple choice<li>
                             <br>
                     <li><strong>  Estimate time:</strong> <?php echo $total*.5;?> minute<li>  
                              <br>
                 
                    
                </ul>
                <a href="question.php?n=1" class="start">start Quiz</a>
                
                
            </div> 
        
    </main>
    
    <footer>
        
       <div class="container">
           copyright&copy; 2017, elmokhtar php quizzer
                
                
            </div> 
    </footer>
       
    </body>
</html>
