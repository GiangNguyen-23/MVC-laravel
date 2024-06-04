<?php
require_once APP_ROOT.'/app/services/StudentServices.php';
require_once APP_ROOT.'/app/models/Student.php';
class HomeController{
    private $studentService;
    public function __construct(){
        $this->studentService = new StudentService();
    }
    public function index(){
        $students = $this->studentService->getAllStudents();
        include_once APP_ROOT.'/app/views/home/index.php';
    }
    public function insert($name, $gender){
        $studentService = new StudentService();
        $id =rand(1,100);
        $student = new Student($id,$name,$gender);
        $studentService->insertStudent($student);
        include_once APP_ROOT.'/app/views/student/success.php';
    }
    public function add(){
        include_once APP_ROOT.'/app/views/student/add.php';
    }

    public function update(){
        try{
            if(isset($_GET['id']) && $_POST['name']&& $_POST['gender']){
                $id = $_GET['id'];
                $name = $_POST['name'];
                $gender = $_POST['gender'];
                $this->studentService->updateStudent($id,$name,$gender);
                include_once APP_ROOT.'/app/views/student/success.php';
            }
        }catch(PDOException $e){
            echo $e;

        }
    }
    public function edit($id){
        $student = $this->studentService->getStudentById($id);
        include APP_ROOT.'/app/views/student/edit.php';
    }
    public function delete($id){
        try{
            if($id){
                $this->studentService->deleteStudent($id);
                include_once APP_ROOT.'/app/views/student/success.php';
            }
        }catch(PDOException $e){
            echo $e;
        }
    }
}