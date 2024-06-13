<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cliente = $_POST['cliente'];
    $whatsapp = $_POST['whatsapp'];
    $atendente = $_POST['atendente'];
    $descricao = $_POST['descricao'];
    $dt_entrega = $_POST['dt_entrega'];
    $preco = $_POST['preco'];
    $info_adicionais = $_POST['info_adicionais'];
    $checkbox = $_POST['checkbox'];

} else {
    echo "Nenhum arquivo enviado.";
}

$sql_cliente = "SELECT * 
        FROM clientes
        WHERE whatsapp = '$whatsapp' AND ativo = '1' LIMIT 1";
$stmt_cliente = $pdo->prepare($sql_cliente);
$stmt_cliente->execute(['whatsapp' => $whatsapp]);
$cliente_existente = $stmt_cliente->fetch(PDO::FETCH_ASSOC);

if ($cliente_existente) {
    $cliente_id = $cliente_existente['cod'];
    echo "Cliente encontrado: " . $cliente['nome'];
} else {
    // Inserir novo cliente
    $sql_novo_cliente = "INSERT INTO clientes (nome, whatsapp) VALUES (:nome, :whatsapp) RETURNING cod";
    $stmt_novo_cliente = $pdo->prepare($sql_novo_cliente);
    $stmt_novo_cliente->execute(['nome' => $cliente, 'whatsapp' => $whatsapp]);
    $cliente_id = $stmt_novo_cliente->fetchColumn();
    echo "Cliente cadastrado: " . $cliente['nome'];
}



/*// Processar o formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cliente = $_POST['cliente'];
    $whatsapp = $_POST['whatsapp'];
    $atendente = $_POST['atendente'];
    $descricao = $_POST['descricao'];
    $dt_entrega = $_POST['dt_entrega'];
    $preco = $_POST['preco'];
    $info_adicionais = $_POST['info_adicionais'];
    $checkbox = $_POST['checkbox'];

    $file = $_FILES['imagens'];
    $fileName = $file['name'];
    $fileTmpPath = $file['tmp_name'];

    // Definir o caminho para salvar o arquivo (você pode ajustar isso conforme necessário)
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    $dest_path = $uploadDir . $fileName;

    if (move_uploaded_file($fileTmpPath, $dest_path)) {
        try {
            // Inserir os detalhes do pedido no banco de dados
            $sql = "INSERT INTO pedidos (cliente, atendente, descricao, data_previsao, preco, info_adicionais) 
                    VALUES ((SELECT cod FROM clientes WHERE nome = :cliente), 
                            (SELECT cod FROM atendentes WHERE nome = :atendente), 
                            :descricao, 
                            :data_previsao, 
                            :preco, 
                            :info_adicionais)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                'cliente' => $cliente,
                'atendente' => $atendente,
                'descricao' => $descricao,
                'data_previsao' => $dt_entrega,
                'preco' => $preco,
                'info_adicionais' => $info_adicionais
            ]);

            $pedido_id = $pdo->lastInsertId();

            foreach ($checkbox as $item) {
                $sql = "INSERT INTO pedidos_itens (cod, tipo) VALUES (:cod, :tipo)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(['cod' => $pedido_id, 'tipo' => $item]);
            }

            $sql = "INSERT INTO uploads (pedido_id, filename, filepath) VALUES (:pedido_id, :filename, :filepath)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['pedido_id' => $pedido_id, 'filename' => $fileName, 'filepath' => $dest_path]);

            echo "Pedido enviado e salvo com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao salvar no banco de dados: " . $e->getMessage();
        }
    } else {
        echo "Erro ao mover o arquivo.";
    }
} else {
    echo "Nenhum arquivo enviado.";
}*/
?>