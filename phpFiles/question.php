<?php 
 
        //represents the value gotten from the link  ?<val>
        $parameter = $_SERVER['QUERY_STRING'];
        session_start();

       
        $qs = array(array(1,2));
        $i=0;

         $question = fopen("question.txt", "r");
       
         //explode the line into an array of cols in the row 
        if($question){
            while(($line = fgets($question)) !== false){
                $rows = explode(",", $line);
               /* echo $rows[1];
                echo "<br>";
               */
                if($rows[2]==$parameter){
                    echo "<div class = 'question'>";
                    echo $rows[1];
                    echo "</div>";
                    break;
                }
            }
            fclose($question);
        }
        
        $question = fopen("question.txt", "r");
         $answer = fopen("answers.txt", "r");

         if ($question) {
             while (($q = fgets($question)) !== false && ($a = fgets($answer))!== false) {
                $qs[$i][0]=$q;
                $qs[$i][1]=$a;
                $i++;
             }
             fclose($question);
             fclose($answer);
         }

?>