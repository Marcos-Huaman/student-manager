<?php
require_once '../models/Course.php';

$course = new Course();

$action = $_GET['action'] ?? '';

switch($action) {
    
    case 'create':
        $course->create($_POST);
        header('Location: ../views/courses/index.php');
        break;
    case 'update':
        $course->update($_GET['id'], $_POST);
        header('Location: ../views/courses/index.php');
        break;
    case 'delete':
        $course->delete($_GET['id']);
        header('Location: ../views/courses/index.php');
        break;
}
?>
