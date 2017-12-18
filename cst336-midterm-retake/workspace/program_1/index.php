<!DOCTYPE html>
<html>
    <head>
        <title> Billiard Game </title>
        <style>
         @import url('css/styles.css');
        </style>
    </head>
    <body>
        <div id = "main">
        <?php

        $ballArray = array();
        //begin by pulling random balls out:
        while(count($ballArray) != 9){
            //non dupes
            $ball = rand(0,15);
            $flag = false;
            for($j =0; $j <count($ballArray); $j++){
                if($ball == $ballArray[$j]){
                    $flag = true;
                }
            }
            if($flag == false){
                array_push($ballArray, $ball);
            }
        }
        
        //now with all 9 balls, display them into the table.
        
        //pull out balls, have counter ready to add sums;
        $evenBallCounter = 0;
        $oddBallCounter = 0;
        
        echo '<div id = "ballDisplay">';
        
        echo  '<table id>
                <tr id ="table-header">
                    <td> <strong> Billiard Balls: Even or Odd!</strong></td>
                    <br>
                </tr>';
                
        for($k = 0; $k < 3; $k++){
        
           echo '<tr class = "table-row">';
            for($m = 0; $m < 3; $m++){
                
                $ballPop = array_pop($ballArray);
             
                //if even
                if($ballPop % 2 == 0){
                    //add yelllow background
                       echo '<td style = "' . 'background-color: yellow;"' .  "id = 'row$k$m'><img src = 'img/$ballPop.png' $</td>";
                       $evenBallCounter += $ballPop;
                }
                else{
                    //add green backround
                      echo '<td style = "' . 'background-color: green;"' .  "id = 'row$k$m'><img src = 'img/$ballPop.png' $</td>";
                      $oddBallCounter += $ballPop;
                }
                
            }
            
            
        }
        
        echo '</table>';
        echo '</div>';
        echo '<div id = "result">';
        
        
        echo '<br><br>';
    
        
        
        echo "Even Ball Score: $evenBallCounter";
        echo '<br>';
        echo "Odd Ball Score: $oddBallCounter";
        
        echo '<br>';
        
        
        if($evenBallCounter < $oddBallCounter){
            echo 'Even Balls Win!';
        }
        else{
            echo 'Odd Balls Win!';
        }
         echo '</div';
        ?>
       
   
        
        <form>
            Customize Output: (Value Must not Exceed 4)
            <br>
            <label for = "row">Row:</label>
            <input type = "number" id = "row" name = "row">
            <br>
            <label for = "column">Column:</label>
            <input type = "number" id = "column" name  = "column">
            <br>
            <label for = "include">Include 8 Ball:</label>
            <input type = "checkbox" id ="include" name = "include">
            <br>
            <label for = "Ascending">Ascending Order:</label>
            <input type = "radio" id = "Ascending" name = "Order" value = "Ascending">
            <label for = "Descending">Descending Order:</label>
            <input type = "radio" id = "Descending" name  = "Order" value = "Descending">
            <br>
            <input type = "submit" value = "Display!">
        </form>
        </div>
        
        <div>
              
    <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="color:green">
      <td>1</td>
      <td>The page includes the basic form elements as in the Program Sample: Text boxes, Checkbox, radio buttons</td>
      <td width="20" align="center">3</td>
    </tr>
    <tr style="color:green">
      <td>2</td>
      <td>When accessing the webpage directly, a 3x3 table with random balls is displayed</td>
      <td width="20" align="center">10</td>
    </tr> 
    <tr style="color:green">
      <td>3</td>
      <td>The balls are NOT duplicated </td>
      <td align="center">5</td>
    </tr>    
	<tr style="color:green">
      <td>4</td>
      <td>Even balls have a yellow background. The cue ball (the white ball) is even </td>
      <td align="center">5</td>
    </tr> 
    <tr style="color:green">
      <td>5</td>
      <td>Odd balls have a green background</td>
      <td align="center">5</td>
    </tr>
    <tr style="color:green">
      <td>6</td>
      <td>The sum of ball values is displayed below the table</td>
      <td align="center">5</td>
    </tr>       
    <tr style="color:#600000">
      <td>7</td>
      <td>When submitting the form, a table with random balls is created using the custom number of rows and columns</td>
      <td align="center">10</td>
    </tr>  
    <tr style="color:#600000">
      <td>8</td>
      <td>There is validation for empty number of rows and columns, and rows and columns greater than 4  </td>
      <td align="center">5</td>
    </tr>  
    <tr style="color:#600000">
      <td>9</td>
      <td>When the  "Include the 8 ball" checkbox is checked, the 8 ball must be displayed within the table, in a random position </td>
      <td align="center">5</td>
    </tr>    
    <tr style="color:#600000">
      <td>10</td>
      <td>The balls are displayed in ascending order if "Ascending" is checked. </td>
      <td align="center">5</td>
    </tr>        
    <tr style="color:#600000">
      <td>11</td>
      <td>The balls are displayed in descending order if "Descending" is checked. </td>
      <td align="center">5</td>
    </tr> 
    <tr style="color:green">
      <td>12</td>
      <td>The total number of points of even and odd balls is properly displayed. </td>
      <td align="center">5</td>
    </tr>  
    <tr style="color:green">
      <td>13</td>
      <td>The right winner (even balls, odd balls, or tie) is displayed. </td>
      <td align="center">5</td>
    </tr>              
    <tr style="color:green">
      <td>14</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
    </tr>     
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b></b></td>
    </tr> 
  </tbody></table>

        </div>

    </body>
    
    
    
    
</html>