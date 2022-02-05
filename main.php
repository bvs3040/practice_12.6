<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice 12.6 </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               
           <?php
            //include 'array.inc.php';
            

            ?>        
               
        </div>       
     
        <div class="about_me">
         
          <h1>  Разбивка </h1>

            <div class="data">
                <div class="fullname">
                    <p>
                    <?php 
                    
                    //print_r(count($example_persons_array));                                      
                    ?> <br>
                    <?php 
                    include 'actionsfullname.inc.php';
                    ?>                                     
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> <?php echo $q; ?> </p>
                    <p> Введите две переменные </p>

                    <form method="post" action="index.php">
                      $x<input name="firstVariable" type="number" value="16" /><br><br>
                      $y<input name="secondVariable" type="number"  value="7" /><br><br>
                        <input type=submit value="Ввести">
                    </form><br><br>                               
                </div>
            </div>

            <div class="knowledge">
                                                                     
                    <?php  include 'knowledge.inc.php'; ?><br>

                    <?php  echo 'тип переменной x: ' . gettype($x); ?><br>
                   
                    <?php  echo $a, ' ', $b, ' ', $c; ?> <br>
                                        
                    <?php echo $d;?><br>

                    <?php echo 'Путь до директории ',__DIR__ ;?><br>

                    <?php echo  'Время выполнения скрипта: ' . (microtime(true) - $start) . ' sec.';?><br>
                     
                    <?php include 'grade.inc.php'; ?><br>
                                      
            </div>
                        
        </div>
        
        <div class="article">
            <p id="lorem" class="text">
            <?php echo $str;?>
            </p>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>
    <script src="index.js"></script>

</body>
</html>
