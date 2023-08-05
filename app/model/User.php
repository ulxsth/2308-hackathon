<?php
class User {
    private $id;
    private $name;
    private $description;
    private $password_hash;
    private $signup_date;

    public function __construct($id, $name, $password_hash, $description, $signup_date){
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->password_hash = $password_hash;
        $this->signup_date = $signup_date;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getPasswordHash(){
        return $this->password_hash;
    }

    public function getSignupDate(){
        return $this->signup_date;
    }

    public function setDescription($description){
        $this->description = $description;
    }
}
?>
