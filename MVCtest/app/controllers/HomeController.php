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
}