<?php

    class Person{
        private $horoscope;
        private $firstname;
        private $lastname;
        function __construct($firstname, $lastname, $date){
            $this->horoscope = $horoscope;
            $this->date = $date;
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            if($date == "0324"){
                echo "asd";
                $this->horoscope = "väduren";
            }else{

            }

           
           
        }
        
        public function printSign(){
            
            return $this->horoscope;
        }
            

    }
    
    
