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
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
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
        <br>
        <div id = "content" >
            <table>
                <tr id ="table-header">
                    <td> <strong> Programming Language:</strong></td>
                    <td><strong>Years of Experience:</strong></td>
                </tr>
                <tr class = "table-row">
                    <td>Java</td>
                    <td>5 Years</td>
                </tr>
                <tr clas  = "table-row">
                    <td>C++:</td>
                    <td>3 Years</td>
                </tr>
                <tr class = "table-row">
                    <td> PHP:</td>
                    <td>2 Years </td>
                </tr></tr>
            </table>
            <ul> 
                <li><span class = "hobby">Music: </span>   I am a Hip Hop Fan.  </li>
                <li><span class = "hobby">Soccer: </span>I follow Soccer, my club is Arsenal F.C.</li>
                <li><span class = "hobby">CS: </span> I spend a couple hours a day brushing up on my programming
                languages</li>
                
            </ul>
        </div>
        
        <!-- This is the footer <-></->->
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