<?php
require_once __DIR__ . '/../config/db.php';

class Cliente {
    public static function getAll() {
        $db = Database::connect();
        $stmt = $db->query("SELECT id, nome, cpf, email, status, data_alteracao FROM clientes WHERE status != 'excluido'");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT id, nome, cpf, email, status, data_alteracao FROM clientes WHERE id = ? AND status != 'excluido'");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO clientes (nome, cpf, email, status) VALUES (?, ?, ?, ?)");
        return $stmt->execute([
            $data['nome'],
            $data['cpf'],
            $data['email'],
            $data['status'] ?? 'ativo'
        ]);
    }

    public static function update($id, $data) {
        $db = Database::connect();
        $stmt = $db->prepare("UPDATE clientes SET nome = ?, cpf = ?, email = ?, status = ?, data_alteracao = NOW() WHERE id = ?");
        return $stmt->execute([
            $data['nome'],
            $data['cpf'],
            $data['email'],
            $data['status'],
            $id
        ]);
    }

    public static function softDelete($id) {
        $db = Database::connect();
        $stmt = $db->prepare("UPDATE clientes SET status = 'excluido', data_alteracao = NOW() WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
