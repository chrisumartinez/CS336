<!DOCTYPE html>
<html>
    <head>
        <title> Silverjack </title>
        <link rel="stylesheet" href="./css/styles.css">
        <h1>Silverjack!</h1>
        <h2>This is our awesome website that we made together as a team.</h2>
    </head>
    <body>

        
        <?php
            require('object1.php');
            
            //destroy previous session
            if (isset($_POST['resetGame'])) {
                session_start();
                $_SESSION = array();
                session_destroy();
            }
            
            //make new session
            session_start();
            
            // check if main object already exists and create if it does not
            if(isset($_SESSION['obj']) && !empty($_SESSION['obj'])) {
                //don't touch anything
            } else {
                $obj = new SilverjackHandler();
                $_SESSION['obj'] = $obj;
            }
            //deal a card
            if (isset($_POST['dealcard'])) {
                $carddeal = $_SESSION['obj'];
                $carddeal->dealCard();
                $_SESSION['obj'] = $carddeal;
            }
            
            //print game
            $_SESSION['obj']->printGame();
            
            echo "<div class = 'theend'>";
            //check win
            $_SESSION['obj']->checkWin();
            
            echo "<br />";
                        
            if ($_SESSION['obj']->getWin() == FALSE){
                echo "<form method='post'>
                        <input id = 'buttonB' type='submit' value='Deal Card' name='dealcard'>
                    </form>";
                echo "<form method='post'>
                        <input id = 'buttonA' type='submit' value='Reset' name='resetGame'>
                    </form>";
            } else {
                echo "<form method='post'>
                        <input id = 'buttonA' type='submit' value='Reset' name='resetGame'>
                    </form>";
            }
            echo "</div>";
        ?>
    </body>
    <footer>
            <hr>
             CST 336 Internet Programming. 2017&copy; Brandon Engholm, Diego Vega Maravilla, Christian Martinez and Garred Murphy <br />
             <figure>
                <img src="img/csumb_logo.jpg" alt="CSUMB" />
            </figure>

    </footer>
</html>