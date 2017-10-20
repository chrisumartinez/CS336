<?php
        function displaySymbol($randomValue, $pos){
            switch($randomValue){
                case 0: $symbol = "seven";
                break;
                case 1: $symbol = "cherry";
                break;
                case 2: $symbol = "lemon";
                break;
                case 3: $symbol = "grapes";
            }
            echo "<img id = 'reel$pos' src = 'img/$symbol.png' alt = '$symbol' title = '$symbol' width = '70' />";
        }
        
        function displayPoints($rand1, $rand2, $rand3){
            echo '<div id = output >';
            if($rand1 == $rand2 && $rand2 == $rand3){
                switch($rand1){
                    case 0: $totalPoints = 1000;
                    echo "<audio autoplay='autoplay' src = '../sounds/smd.mp3'>
                    
                       </audio>";
                    echo ' <h1> Jackpot! </h1>';
                    break;
                    case 1: $totalPoints = 500;
                    break;
                    case 2: $totalPoints = 250;
                    break;
                    case 3: $totalPoints = 900;
                }
                echo "<h2>You won $totalPoints points! </h2>";
            } else{
                echo '<h3> Try Again! </h3>';
            }
            echo '</div>';
        }
        
        function play(){
             for($i = 1; $i <= 3; $i++){
             ${"rand" . $i} = rand(0,3);
             displaySymbol(${"rand" . $i}, $i);
            
              }
              displayPoints($rand1, $rand2, $rand3);
        
        }


?>