<?php
    require_once('card.php');

    class Deck{
        private $deckType; //this is a string of the decks set (diamond, spade, etc)
        private $deck=array(); //an array full of Cards
        
        function __construct($type) {
            $this->deckType = $type;
            $this->deck = array();
            
            for ($i = 1; $i < 14; $i++){
                array_push($this->deck, new Card("./img/".$this->deckType."/".$i.".png", $i));
            }
            shuffle($this -> deck);
        }
        
        
        // getCard function
        public function getCard()
        {
             $card = array_pop($this -> deck);
             return $card;
        }
        
        public function getSize()
        {
            $counting = sizeof($deck);
            return $counting;
        }
        
    }
?>