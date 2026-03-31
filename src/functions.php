<?php

require_once "conexion.php";



function getItems() {
    global $conn;

    $stmt = $conn->query("SELECT * FROM ttst");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function addItem($nome) {
    global $conn;

    $stmt = $conn->prepare("INSERT INTO ttst (nome) VALUES (:nome)");
    $stmt->bindParam(':nome', $nome);
    $stmt->execute();
}

function deleteItem($id) {
    global $conn;

    $stmt = $conn->prepare("DELETE FROM ttst WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

function updateItem($id, $nome) {
    global $conn;

    $stmt = $conn->prepare("UPDATE ttst SET nome = :nome WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome', $nome);
    $stmt->execute();
}