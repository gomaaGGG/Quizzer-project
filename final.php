
<?php session_start();?>

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
            <h2> yoy are done</h2>
            <p> congratulations your have completed the test   </p>
            <p> Final scoer is <?php echo$_SESSION['score'] ;?> </p>
            <a href="question.php?n=1" class="start">Repat Exam</a>
            </div> 
        
    </main>
    
    <footer>
        
       <div class="container">
           copyright&copy; 2017, elmokhtar php quizzer
                
                
            </div> 
    </footer>
       
    </body>
</html>


