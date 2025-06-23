<?php
require_once __DIR__ . '/../models/Cliente.php';

class ClienteController {
    public function index() {
        $clientes = Cliente::getAll();
        include __DIR__ . '/../views/clientes/list.php';
    }

    public function save($data = null) {
        $data = $data ?? $_POST;

        if (empty($data)) {
            http_response_code(400);
            echo 'Dados inválidos';
            return;
        }

        $data['cpf'] = preg_replace('/\D/', '', $data['cpf']);

        try {
            if (!empty($data['id'])) {
                $ok = Cliente::update($data['id'], $data);
            } else {
                $ok = Cliente::create($data);
            }

            if ($ok) {
                echo 'OK';
            } else {
                http_response_code(500);
                echo 'Erro ao salvar';
            }
        } catch (PDOException $e) {
            http_response_code(500);
            if ($e->getCode() == '23000') {
                if (strpos($e->getMessage(), 'cpf') !== false) {
                    echo 'CPF já cadastrado!';
                } elseif (strpos($e->getMessage(), 'email') !== false) {
                    echo 'Email já cadastrado!';
                } else {
                    echo 'Dado duplicado!';
                }
            } else {
                echo 'Erro no banco: ' . $e->getMessage();
            }
        }
    }

    public function delete() {
        $id = $_GET['id'] ?? null;

        if (!$id) {
            http_response_code(400);
            echo 'ID inválido';
            return;
        }

        try {
            $ok = Cliente::softDelete($id);

            if ($ok) {
                echo 'OK';
            } else {
                http_response_code(500);
                echo 'Erro ao excluir';
            }
        } catch (PDOException $e) {
            http_response_code(500);
            echo 'Erro no banco: ' . $e->getMessage();
        }
    }
}
