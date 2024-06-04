<?php
require_once APP_ROOT.'/app/models/Student.php';

class StudentService {
    public $dbConnection;
    public function __construct()
    {
        $this->dbConnection = new DbConnection();
    }

    public function getAllStudents(){
        $students=[];
        if($this->dbConnection!==null){
            $conn = $this->dbConnection->getConnection();
            if($conn != null){
                $sql = "SELECT * FROM tbstudent";
                $query = $conn->query($sql);
                while($row = $query->fetch()){
                    $student =  new Student($row['id'],$row['name'],$row['gender']);
                    $students[] = $student;
                }
                return $students;
            }
        }
    }
    
    
 
   
}