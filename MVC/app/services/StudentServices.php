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
    public function insertStudent($student){
        if($this->dbConnection != null){
            $conn = $this->dbConnection->getConnection();
            if($conn != null){
                $name = $student->getName();
                $gender = $student->getGender();
                $sql = "INSERT INTO tbstudent(name,gender) values(:name,:gender)";
                $query = $conn->prepare($sql);
                $query->bindParam(':name',$name);
                $query->bindParam(':gender', $gender);
                if(empty($name) || empty($gender)){
                    echo "Vui lòng nhập đủ thông tin";
                }else{
                    $query->execute();
                    echo "Thêm mới thành công";
                }
            }
        }
    }
    public function getStudentById($id){
        if ($this->dbConnection) {
            $conn = $this->dbConnection->getConnection();
            if ($conn) {
                $sql = "SELECT * FROM tbstudent WHERE id = :id";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();
                $student = $stmt->fetch(PDO::FETCH_ASSOC);
                return $student ? new Student($student['id'], $student['name'], $student['gender']) : null;
            }
        }
        throw new Exception("Database connection error.");
    }
    public function updateStudent($id,$name,$gender){
        if($this->dbConnection!=null){
            $conn = $this->dbConnection->getConnection();
            if($conn != null){
                $sql = "UPDATE tbstudent SET name = ?,gender = ? WHERE id = ?";
                $query = $conn->prepare($sql);
                $query->bindParam(1,$name);
                $query->bindParam(2,$gender);
                $query->bindParam(3,$id,PDO::PARAM_INT);
                if(empty($name) || empty($gender)){
                    echo "Vui lòng nhập đủ thông tin";
                }else{
                    $query->execute();
                    echo "Cập nhật thành công";
                }

            }
        }
    }
    public function deleteStudent($id){
        if($this->dbConnection !=null){
            $conn = $this->dbConnection->getConnection();
            if($conn != null){
                $sql = "DELETE FROM tbstudent WHERE id = :id";
                $query = $conn->prepare($sql);
                $query->bindParam(':id',$id,PDO::PARAM_INT);
                if($query->execute()) {
                    echo "Xóa thành công";
                }else{
                }

            }
        }
    }
}