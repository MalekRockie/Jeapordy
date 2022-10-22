<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <?php include "card.php";
    include "question.php";
      $arr = $qs;//array with question and answer
      $tr = 0;
      $val=array();
      //define criterias
      $criteria= array("GSU","Tech Companies","Web Concepts","Javascript","Haloween",);
      //add the value amounts per question to val[]

    echo "<table>";
    for($i=1;$i<=5;$i++){
      $cal = $i*100;
      $val[$i]=strval("$ {$cal}");
    }
    //create the cards with a 5 X 5 matrix
    //create the criteria header
    for($i=0;$i<5;$i++){
      echo crit($criteria[$i]);
    }
    
    for($i=0;$i<25;$i++){
      if($i%5==0){
        echo "</tr>";
      }
      if($tr==$i){
        echo "<tr>";
        $tr+=5;
      }
      if($i<5){
        echo card($val[1],$i);
        
      }
      else if($i<10){
        echo card($val[2],$i);
      }
      else if($i<15){
        echo card($val[3],$i);
      }
      else if($i<20){
        echo card($val[4],$i);
      }
      else {
        echo card($val[5],$i);
        
      }
    }
    echo "</table>";
    ?>  
    
  </body>
</html>