<?php
require_once 'Database.php';

class Course {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAll() {
        return $this->db->query("SELECT * FROM cursos");
    }

    public function getById($id) {
        $courses = $this->db->query("SELECT * FROM cursos WHERE id = $id");
        return $courses ? $courses[0] : null;
    }

    public function create($data) {
        $sql = "INSERT INTO cursos (nombre_curso, codigo_curso, profesor_responsable, horario, fecha_inicio, fecha_fin, descripcion, nivel_dificultad)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        return $this->db->execute($sql, [
            $data['nombre_curso'],
            $data['codigo_curso'],
            $data['profesor_responsable'],
            $data['horario'],
            $data['fecha_inicio'],
            $data['fecha_fin'],
            $data['descripcion'],
            $data['nivel_dificultad']
        ]);
    }

    public function update($id, $data) {
        $sql = "UPDATE cursos SET nombre_curso=?, codigo_curso=?, profesor_responsable=?, horario=?, fecha_inicio=?, fecha_fin=?, descripcion=?, nivel_dificultad=?
                WHERE id=?";
        return $this->db->execute($sql, [
            $data['nombre_curso'],
            $data['codigo_curso'],
            $data['profesor_responsable'],
            $data['horario'],
            $data['fecha_inicio'],
            $data['fecha_fin'],
            $data['descripcion'],
            $data['nivel_dificultad'],
            $id
        ]);
    }

    public function delete($id) {
        $sql = "DELETE FROM cursos WHERE id=?";
        return $this->db->execute($sql, [$id]);
    }
}
?>
