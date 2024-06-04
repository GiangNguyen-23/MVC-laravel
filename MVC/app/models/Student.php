<?php
class Student {
    private $id;
    private $name;
    private $gender;
    public function __construct($id, $name, $gender){
        $this->id = $id;
        $this->name = $name;
        $this->gender = $gender;
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getGender(){
        return $this->gender;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setGender($gender){
        $this->gender = $gender;
    }

}
