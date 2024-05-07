<?php
// Przykładowa logika obsługi formularza logowania
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tutaj umieść kod obsługi formularza logowania
    // Przykładowo, możesz sprawdzać dane logowania w bazie danych

    // Po zalogowaniu przekieruj użytkownika na inną stronę, np. stronę główną
    header("Location: index.php");
    exit;
}
?>
