<!DOCTYPE html>
<?php
$bgImage = "img/sea.jpg";
include 'api/pixabayAPI.php';

if(isset($_GET['layout'])){
    if(!$_GET['category']==""){
        $imageURLs = getImageURLs($_GET['category'], $_GET['layout']);
        $bgImage = $imageURLs[array_rand($imageURLs)];
} else {
    if(isset($_GET['keyword'])){
     $imageURLs = getImageURLs($_GET['keyword'],$_GET['layout']);
     $bgImage = $imageURLs[array_rand($imageURLs)];
}
    
}
    
}
else{
        if(!$_GET['category']==""){
        $imageURLs = getImageURLs($_GET['category']);
        $bgImage = $imageURLs[array_rand($imageURLs)];
} else {
    if(isset($_GET['keyword'])){
     $imageURLs = getImageURLs($_GET['keyword']);
     $bgImage = $imageURLs[array_rand($imageURLs)];
}
    
}
    
}
?>

<html>
    <head>
        <title> Image Carousel</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style> @import url("css/styles.css");
            body{
                background-image: url(' <?=$bgImage ?>');
                background-repeat: no-repeat;
                background-size:100%;
            }
        </style>
    </head>
    <body>
        <?php
        
            if(!isset($imageURLs)){
                echo "<h2> Type a keyword to display a slideshow <br /> With Random Images from Pixabay.com <br /> ";
            }else{
                
            ?>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
               <ol class="carousel-indicators">
                   <?php
                   for($i = 0; $i < 5; $i++){
                       echo "<li data-target='#carousel-example-generic' data-slide-to='$i'";
                       echo($i == 0)?"class='active'": "";
                       echo "></li>";
                   }
                   ?>

              </ol>
              
              <div class="carousel-inner" role="listbox">
            <?php
                for($i = 0; $i < 5; $i++){
                    do{
                        $randomIndex = rand(0, count($imageURLs));
                    }
                    while(!isset($imageURLs[$randomIndex]));
                    
                    echo '<div class="item ';
                    echo ($i==0)?"active":"";
                    echo '">';
                    echo '<img src = "' . $imageURLs[$randomIndex] . '">';
                    echo '</div>';
                    unset($imageURLs[$randomIndex]);
                
                }
                
                ?>
                
                </div>
                  <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
       <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
                
                
                
                
            </div>
                
        <?php
            }
        ?>
        <form>
            <input type="text" name = "keyword" placeholder = "Keyword" value = "<?=$_GET['keyword']?>"/>
            <input type = "submit" value = "Submit" />
            <br>
            <input type= "radio" id = "horizontal" name = "layout" value = "horizontal">
            <label for  = "horizontal" ></label><label for = "horizontal">horizontal</label>
            <input type= "radio" id = "vertical" name = "layout" value = "vertical">
            <label for  = "vertical" ></label><label for = "vertical">vertical</label>
  
        <select id = "dropdown" name = "category" >
            <option value = ""> Select an Option:</option>
            <option value = "nature">Nature</option>
            <option>Space</option>
            <option>Forest</option>
            <option>Ocean</option>
            <option>Mountain</option>
            
        </select>

        </form>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>
</html>