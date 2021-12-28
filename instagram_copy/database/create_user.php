<?php

//Inclui a conexão para o db
include "connect_db.php";

if(isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $firstname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

//Senha original
$pass = mysqli_real_escape_string($conn, $_POST['senha']);

//Senha segura usando o password_hash
$hash = password_hash($pass, PASSWORD_BCRYPT);

//Mostrar o hash gerado
//echo "Generated hash code: ". $hash;

$sql = "INSERT INTO User (username, firstname, lastname, email, pass)
VALUES ('$username', '$firstname', 'lastname', '$email', '$hash')";

if($conn->query($sql) === TRUE) {
    echo "<br>New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//Fechar a conexão com o banco de dados
$conn->close();
}