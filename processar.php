<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    
    // Faça o que desejar com os dados, por exemplo, exiba-os:
    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email;
}
?>
