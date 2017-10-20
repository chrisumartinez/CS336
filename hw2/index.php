<!DOCTYPE html>
<html>
    <head>
         <meta charset = "utf-8" />
        <link href="css/styles.css" rel = "stylesheet" type="text/css " />
<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Roboto|Wendy+One" rel="stylesheet">     </head>
     <main>
         <h1> Football Name Generator!</h1>
     </main>
     <body>
        <div id = "button">
            <form method="post">
                <input type="submit" name="button" id="button" value="Generate A Football Club Name!" /><br/>
            </form>
             <figure>
                <img src  = "../img/football.jpg" alt = "football" title = "title" />
            </figure>
            </div>
     </body>
 
     <?php
//football Club Name Generator
/*
Creates a random football club name depending on randomized arrays.
*/
function buttonPress()
{
//array of random football club names
    //TODO: Fill up with random names
    $footballClubNames = array();
    //Create three random names for each button press.
    $footballCities = array('Barcelona', 'Madrid', 'Los Angeles', 'Santa Barbara',
    'Carpinteria', 'San Luis Obispo', 'Monterey', 'Seaside', 'Culver City', 'Echo Park',
    'Moscow', 'Houston', 'Salt Lake City', 'Calgary', 'Vancouver', 'Paris', 'Minsk', 'Tijuana', 'Osaka'
    , 'Tokyo', 'Hong Kong', 'Seoul');
    
    $fcLabels = array('F.C', 'Dynamo', 'Tigers', 'Flames', 'Dodgers', 'United', 'Galaxy', 'S.C',  'Orcs',
    'Trojans', 'Broncos', 'Blackhawks', 'Ducks', 'Angels', 'Athletics', 'Titans', 'Cowboys', 
    'Giants', 'Eagles', 'Bears', 'Lions');
    
    
    
    //generating the names
    for($i = 0; $i < 3; $i++){
        
        //shuffle arrays  for maximum randomization
        shuffle($footballCities);
        shuffle($fcLabels);

        //get random football city index
        $cityIndex = rand(0, count($footballCities)-1);
        $fcLabelsIndex = rand(0, count($fcLabels) -1 );
        
        //assign to a variable 
        $city = $footballCities[$cityIndex];
        $fcLabel = $fcLabels[$fcLabelsIndex];
    
        
        //pop out the results from the original arrays for 
        //unique randomization
        array_splice($footballCities, $cityIndex, 1);
        array_splice($fcLabels, $fcLabelsIndex, 1);
        
        if($fcLabel === 'F.C' || $fcLabel === 'S.C'){
            $randName = $fcLabel . " " . $city;
        }
        else{
            $randName = $city . " " . $fcLabel;
        }
        array_push($footballClubNames, $randName);
    }
    
    //echo out Team Names
    for($k = 0; $k < count($footballClubNames); $k++){
        $name = $footballClubNames[$k];
        echo "<p>";
        echo "$name <br> <br>";
        echo "</p>";
    }
}

if(array_key_exists('button',$_POST)){
   buttonPress();
}

?>
     </div>
</html>

