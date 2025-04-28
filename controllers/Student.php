<?php
require_once 'Database.php';

class Student {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAll() {
        return $this->db->query("SELECT * FROM estudiantes");
    }

    public function getById($id) {
        $students = $this->db->query("SELECT * FROM estudiantes WHERE id = $id");
        return $students ? $students[0] : null;
    }

    public function create($data) {
        $sql = "INSERT INTO estudiantes (nombre, apellido, email, telefono, fecha_nacimiento, genero) 
                VALUES (?, ?, ?, ?, ?, ?)";
        return $this->db->execute($sql, [
            $data['nombre'],
            $data['apellido'],
            $data['email'],
            $data['telefono'],
            $data['fecha_nacimiento'],
            $data['genero']
        ]);
    }

    public function update($id, $data) {
        $sql = "UPDATE estudiantes SET nombre=?, apellido=?, email=?, telefono=?, fecha_nacimiento=?, genero=? WHERE id=?";
        return $this->db->execute($sql, [
            $data['nombre'],
            $data['apellido'],
            $data['email'],
            $data['telefono'],
            $data['fecha_nacimiento'],
            $data['genero'],
            $id
        ]);
    }

    public function delete($id) {
        $sql = "DELETE FROM estudiantes WHERE id=?";
        return $this->db->execute($sql, [$id]);
    }
}
?>
