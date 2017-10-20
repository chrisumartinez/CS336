<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <meta charset = "utf-8" />
        <title> Christian: Personal Website</title>
        <link href="css/styles.css" rel = "stylesheet" type="text/css " />
        <link href="https://fonts.googleapis.com/css?family=Anton|Indie+Flower|Roboto|Wendy+One" rel="stylesheet">
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        
        <header>
            <h1> Christian Martinez</h1>
            <h2> Santa Barbara, California</h2>
        </header>
        <nav id = "navID">
            <hr width = "40%" />
            <a href = "index.php">Home</a>
            <a href = "contact.php">Contact</a>
            <a href = "about.php" >About</a>
        </nav>
        <br />
        <main>
            <figure id = "picOfMe">
                <img src = "img/juan.jpg" alt = "Picture of Christian "/>
            </figure>
            <div id = "infoText">
                <p> Thank you For Visiting my website!</p>
                <br><br>

                <p> I am an aspiring software developer, graduating in 2018
                at California State University, Monterey Bay. </p>
                <p> <em>The sound of the '90s, to me, is a combination of soul and street - it's a feeling.
                - Nas
                </em></p>
                
            </div>
        </main>
        
        
        
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer id = "footer">
            <figure>
                 <img src = "img/otter.jpg" alt = "Picture of CSUMB" />
            </figure>
           
            Course Name: CST336 <br>
            This web page is for academic purposes only.
            
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>