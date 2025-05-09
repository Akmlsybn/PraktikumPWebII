<?php 
require 'Koneksi.php';

function getAllMembers($query) {
    $conn = getConnection();
    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insertData($table, $data) {
    $conn = getConnection();
    unset($data['submit']); 
    $columns = implode(", ", array_keys($data));
    $placeholders = ":" . implode(", :", array_keys($data));
    $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
    $stmt = $conn->prepare($sql);
    return $stmt->execute($data);
}

function updateData($table, $data, $columns, $columValues) {
    $conn = getConnection();
    unset($data['submit']);  
    $set = "";
    foreach ($data as $key => $value) {
        $set .= "$key = :$key, ";
    }
    $set = rtrim($set, ", ");
    $sql = "UPDATE $table SET $set WHERE $columns = $columValues";
    $stmt = $conn->prepare($sql);
    return $stmt->execute($data);
}

function deleteData($table, $columns, $columValues) {
    $conn = getConnection();
    $sql = "DELETE FROM $table WHERE $columns = :value";
    $stmt = $conn->prepare($sql);
    return $stmt->execute(['value' =>$columValues]);
}

?>