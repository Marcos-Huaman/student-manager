<?php
require_once '../models/Student.php';

$student = new Student();

$action = $_GET['action'] ?? '';

switch($action) {
    case 'create':
        $student->create($_POST);
        header('Location: ../views/students/index.php');
        break;
    case 'update':
        $student->update($_GET['id'], $_POST);
        header('Location: ../views/students/index.php');
        break;
    case 'delete':
        $student->delete($_GET['id']);
        header('Location: ../views/students/index.php');
        break;
}
?>
