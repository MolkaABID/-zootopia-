<?php
    class Package {
    
        private string $nom;
        private string $localisation;
        private $date;
        private float $prix;
        private string $type;
        private string $image;
        private string $description;


        public function __construct($nom,$localisation,$date, $prix,$type, $image,$description){
           
            $this->nom = $nom;
            $this->localisation =$localisation;
            $this->date = $date;
            $this->prix = $prix;
            $this->type = $type;
            $this->image = $image;
            $this->description =$description;
        }

    
        public function getNom (){
            return $this->nom;
        }

        public function getLocalisation(){
            return $this->localisation;
        }

        public function getDate(){
            return $this->date;
        }
      

        public function getPrix (){
            return $this->prix ;
        }

        public function getType (){
            return $this->type;
        }

        public function getImage (){
            return $this->image ;
        }
        
        public function getDescription (){
            return $this->description;
        }
        public function setNom ($nom){
            $this->nom = $nom;
        }

        
        public function setLocalisation($localisation ){
            $this->localisation= $localisation ;
        }

        public function setDate($date){
            $this->date= $date;
        }
      

        public function setPrix ($prix){
            $this->prix = $prix ;
        }

        public function setType ($type){
            $this->type= $type;
        }

        public function setImage ($image){
            $this->image= $image ;
        }
        
        public function setDescription ($description){
            $this->description = $description;
        }

       
    }