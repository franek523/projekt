<?php
$hostname = "localhost";
$username = "root"; // Twoja nazwa użytkownika bazy danych
$password = ""; // Twoje hasło do bazy danych
$dbname = "fitzone"; // Nazwa Twojej bazy danych

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
    
    // Tworzenie przygotowanego zapytania SQL z parametrami
    $sql = "INSERT INTO users (email, password) VALUES (?, ?)";
    
    // Inicjowanie przygotowanego zapytania
    $stmt = $conn->prepare($sql);
    
    // Bindowanie parametrów do zapytania
    $stmt->bind_param("ss", $email, $password);
    
    // Wykonanie zapytania
    if ($stmt->execute()) {
        // Przekierowanie użytkownika na stronę logowania po zarejestrowaniu
        header("Location: logowanie.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Zakończenie połączenia
$conn->close();
?>





</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
        <link rel="icon" href="https://fit-zone.dk/wp-content/uploads/2019/03/header_logo_fitzone_2.png" sizes="192x192" type="image/png">
        <script src="code.js"></script>
        <title>FitZone</title>
    </head>
<body>
    <header>
        <a href="index.php">
            <img src="https://fit-zone.dk/wp-content/uploads/2022/11/Fitzone-logo-Linje-2020-GW-1220x235-1.png" alt="FitZone Logo">
        </a>
        
        

        <nav>
            <a href="zajecia.php"><i class="fas fa-dumbbell"></i>Zajęcia</a>
            <a href="o-nas.php"><i class="fas fa-info-circle"></i>O nas</a>
            <a href="kontakt.php"><i class="fas fa-phone"></i>Kontakt</a>
            <a href="gra.php"><i class="fas fa-gamepad"></i>Gra</a>
        </nav>


      <!-- Dodany przycisk do wywołania okna logowania -->
    <button id="show-login-popup" onclick="showLoginPopup()">Zaloguj</button>

<!-- Okno logowania -->
<div class="login-popup" id="login-popup">
    <button class="close-btn" onclick="hideLoginPopup()"><i class="fa-solid fa-circle-xmark"></i></button>
    <h2>Zaloguj się</h2>
    <!-- Formularz logowania z polem email i hasłem -->
    <form id="login-form" action="logowanie.php" method="POST" onsubmit="submitForm(event)">
        <input type="email" id="email" name="email" placeholder="Adres e-mail" required><br>
        <input type="password" id="password" name="password" placeholder="Hasło" required class="haslo"><br>
        <button type="submit" id="przycisk-zaloguj">Zaloguj</button>
    </form>

    <p>Nie masz jeszcze konta? <a href="#" onclick="showRegisterPopup()">Zarejestruj się</a></p>
</div>

<!-- Okno rejestracji -->
<div class="register-popup" id="register-popup">
    <button class="close-btn" onclick="hideRegisterPopup()"><i class="fa-solid fa-circle-xmark"></i></button>
    <h2>Zarejestruj się</h2>
    <!-- Formularz rejestracji z polem email i hasłem -->
    <form id="register-form" action="rejestracja.php" method="POST" onsubmit="submitRegisterForm(event)">
        <input type="email" id="register-email" name="email" placeholder="Adres e-mail" required><br>
        <input type="password" id="register-password" name="password" placeholder="Hasło" required class="haslo"><br>
        <button type="submit" id="przycisk-zarejestruj">Zarejestruj</button>
    </form>

    <p>Masz już konto? <a href="#" onclick="showLoginPopup()">Zaloguj się</a></p>
</div>

    </header>
    <section id="strona-glowna">
        <h2>Witaj w Klubie Fitness FitZone!</h2>
        <p>Zapraszamy do naszego klubu fitness, gdzie dbamy o Twoje zdrowie i kondycję. Oferujemy szeroki wybór zajęć oraz profesjonalną opiekę trenerów.</p>
        <p>Dołącz już dziś i zacznij pracować nad lepszą wersją siebie!</p>
    
        <div class="additional-info">
            <h3>Dlaczego warto wybrać Klub Fitness FitZone?</h3>
            <p>Nasz klub oferuje:</p>
            <ul>
                <li>Szeroki wybór zajęć fitness dla każdego poziomu zaawansowania.</li>
                <li>Profesjonalną opiekę trenerów.</li>
                <li>Przyjazną atmosferę i wsparcie innych członków klubu.</li>
            </ul>
            
        </div>
        
    </section>
    
    <div class="full-screen-image" id="full-screen-image">
        <img src="https://fit-zone.dk/wp-content/uploads/2022/11/Fitzone-logo-Linje-2020-GW-1220x235-1.png" alt="FitZone Logo">
    </div>
    
   
    <footer>
        <p>&copy; 2024 Klub Fitness FitZone. Wszelkie prawa zastrzeżone.</p>
    </footer>

 
    </body>
</html>