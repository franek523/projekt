<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "fitzone";

// Tworzenie połączenia z bazą danych
$conn = new mysqli($hostname, $username, $password, $dbname);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sprawdzenie, czy formularz został wysłany
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobranie danych z formularza
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Tworzenie zapytania SQL do wstawienia danych do bazy
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

    // Wykonanie zapytania
    if ($conn->query($sql) === TRUE) {
        echo "Rejestracja udana";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Zakończenie połączenia
$conn->close();
?>
