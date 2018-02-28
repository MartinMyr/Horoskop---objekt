<?php

    class Person{
        function __construct($firstname, $lastname, $date){
            $this->date = $date;
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            if($date == 0324){
                $this->horoscope = "väduren";
            }

           
           
        }
        
        public function printSign(){

            return $this->horoscope;
        }
            

    }
    
