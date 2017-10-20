<!DOCTYPE html>
<html>
    <head>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Lobster|Lora|Modak|Nosifer|Open+Sans|Roboto|Yanone+Kaffeesatz" rel="stylesheet">
        <style> @import url("css/styles.css"); </style>
        <Title>Music Quiz!</Title>
    </head>
    <body>
        <div>
            <h1> What Kind of Rap Music Listener are you? Find some new Music!</h1>
            <br>
            
            <form>
                <label for = "name" id = "nameLabel">Your First Name:</label>
                <br>
                 <input type = "text" name = "name" placeholder = "name" id = "name" required>
                 <br>
                 <label for = "ageText" id = "ageLabel">Your Age:</label>
                 <br>
                 <input type  = "number" name = "number"  placeholder = "Age" id = "ageText" required>
                 <br>
                 <label for = "timeline">Pick a Timeline:</label>
                 <br>
                 <select name  = "timeline" id = "timeline" required>
                     <option value = "">Choose one:</option>
                     <option value = "1990s">1990s</option>
                     <option value = "2000s">2000s</option>
                     <option value = "2010s">2010s</option>
                 </select>
                 <br>
                 <label for "ambiance"> Your Ambiance: </label>
                 <select id = "ambiance" name = "ambiance" required>
                     <option value = "" >Choose One:</option>
                     <option value = "Soul">Soul</option>
                     <option value = "Pop Culture">Pop Culture</option>
                 </select>
                 <br>
                 <input type = "checkbox" name = "fan" value = "yes"> New Rap Fan?
                 <br>
                 <input type = "submit" name  = "submit" value = "Finish" id = "button">
            </form>
            
        </div>
        <?php
        
        $soulArray = array('Nujabes','SwuM','Chance the Rapper','Taylor Bennett', 'MF Doom', 'Madlib',
        'LAKEY INSPIRED', 'DJ Okinawari', 'Common', 'Nas', 'Eric B', 'Rakim', 'Public Enemy', 'American Caravan',
        'Big L', 'Big Pun', 'Mos Def', 'Fugees', 'Large Professor', 'Pete Rock', 'CL Smooth');
        
        
        $popCultureArray = array('Lil Uzi Vert', 'Migos', 'Drake', 'J Cole', 'Kendrick Lamar', 'Logic', 'Childish
        Gambino', 'Torey Lanez', 'Bruno Mars', 'Ludacris', 'Big Pun', 'Fat Joe', 'Tupac', 'Biggie Smalls'
        , 'Method Man', 'Redman', 'Raekwon', 'Ghostface Killah', 'GZA', 'RZA');
        
        $notRapFanArray = array('Common', 'Tupac', 'Nas', 'Mos Def', 'Biggie Smalls', 'Wu-Tang Clan', 'Fugees', 'Kid Frost',
        'Nujabes', 'DJ Premier', 'Dr. Dre', 'NWA', 'Jay Z', 'Kanye West', 'Kendrick Lamar', 'Big L', 'Cise Starr', 'Lil Kim',
        'TLC', 'Grandmaster Flash', 'SugarHill Gang', 'The Roots', 'Slum Village', 'J Dilla');
        
        //Required Tags and Special Input Tags complete form processing.
        // Pick a Song Depending on the answers chosen:
        
        $pointCounter = 0;
        //age points. 0 - 16 = 2 points. 17 - 25 = 4 points. 26 - 40 = 6 points. 40+ = 8 points.
        $age = $_GET['number'];
        if($age > 40){
            $pointCounter += 8;
        }
        else{
            if($age > 26){
                $pointCounter += 6;
            }
            else{
                if($age > 17){
                    $pointCounter += 4;
                }
                else{
                    $pointCounter += 2;
                }
            }
        }
        //Check Timelines. 1990s - 8 points. 2000s - 4 points. 2010s - 2 points.
        $timeline = $_GET['timeline'];
        if($timeline == '2010s'){
            $pointCounter += 2;
        }
        else{
            if ($timeline == '2000s'){
                $pointCounter += 4;
            }
            else{
                $pointCounter += 8;
            }
        }
        
        //check now for soul, gangsta and pop culture selection.
        //soul, pop, gangsta have different arrays.
        
        $rapGenre = $_GET['ambiance'];
    
        
        //if they chose soul, pick an artist from the soul array.
        if($rapGenre == 'Soul'){
            
            
            //depending on points, choose a random index.
            if($pointCounter > 10){
                //choose an older artist, from index 10 -> above.
                $artistIndex = rand(11, count($soulArray));
                $artist = $soulArray[$artistIndex];
            }
            else{
                //choose a newer artist.
                $artistIndex = rand(0, 10);
                $artist = $soulArray[$artistIndex];
            }
            
        }
        else{
            //FOR POP CULTURE            
            
            //depending on points, choose a random index.
            if($pointCounter > 10){
                //choose an older artist, from index 10 -> above.
                $artistIndex = rand(11, count($soulArray));
                $artist = $soulArray[$artistIndex];
            }
            else{
                //choose a newer artist.
                $artistIndex = rand(0, 10);
                $artist = $soulArray[$artistIndex];
            }
           
        }
        
        
        //if not a rap fan, choose from a complete different list of rappers.
        if(isset($_GET['fan'])){
            $artistIndex = rand(0, count($notRapFanArray));
            $artist = $notRapFanArray[$artistIndex];
        }
        
        
        $name = $_GET['name'];
        
        echo "<div id = 'results' >";
        echo "$name,";
        echo '<br>';
        echo '<p> Results have been submitted. Here is a recommended artist! </p> <br>';
        //if they were not a rap fan, explain:
        echo "$fan";
        if(isset($_GET['fan'])){
            echo '<p>Here is a recommended artist for introducing
            yourself to the world of Rap. </p> <br>';
        }
        
        
        echo "<p> $artist";
        echo '<br>';
        echo '</div';
        
        ?>

        
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>