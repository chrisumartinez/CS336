<?php
    require_once("card.php");
    
    class Person{
        private $name; //name of player
        private $hand = array(); // players hand, array of cards
        private $score; // score of player
        private $img; // image of player
        
        function __construct($n) {
            $this->name = $n;
            $this->hand = array();
            $this->score = 0;
            $this->img = NULL;
        }
        
        
        
        /*
        add Card into the hand array.
        @param the card to be added into the hand.
        */
        public function addCard($card){
            $this->addPoints($card);
            array_push($this->hand, $card);
        }
        
        private function addPoints($card){
            $this->score += $card->getPoints();
        }
        // set img
        /*
        Set the image url of the player.
        @return: the long string of html that would display the player image.
        */
        public function returnImage(){
           $this->img = $this->name;
            $imgPath  = "<img class = 'icon' src = './img/players/".$this->name.".png' alt = '".$this->name."' title = '".$this->name."' width = '110' height = '110' />";
            return $imgPath;
        }
        
        /*
        Return the Person's Hand.
        @return the html string that would display the array.
        */
        
        public function returnHand(){
            $imgLinks = array();
            $htmlStringArray = array();
            $htmlHand = '';
            
            //get the imgLink from each card:
            foreach ($this->hand as $acard) {
                $htmlString = "<img class = 'card' src = '".$acard->getImg()."' width = '80px' />";
                $htmlHand .= $htmlString;
            }
            return $htmlHand;
        }
    
        
        
        /*
        Gets the Score of the Person's hand.
        @return the score to display.
        */
        
        public function getScore(){
            return $this->score;
        }
        
        /*
        Display the Player Information.
        */
        public function printPlayer(){
            echo $this->returnImage();
            echo $this->returnHand();
        }
        
        public function getName(){
            return $this->name;
        }
    }  
?>