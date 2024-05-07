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
        
        <!-- Dodany przycisk do wywołania okna logowania -->
        <button id="show-login-popup" onclick="showLoginPopup()">Zaloguj</button>

        <!-- Okno logowania -->
        <div class="login-popup" id="login-popup">
            <button class="close-btn" onclick="hideLoginPopup()"><i class="fa-solid fa-circle-xmark"></i></button>
            <h2>Zaloguj się</h2>
            <!-- Formularz logowania z polem email i hasłem -->
            <form>
                <input type="email" id="email" name="email" placeholder="Adres e-mail" required id="email"><br>
                <input type="password" id="password" name="password" placeholder="Hasło" required class="haslo"><br>
                <button type="submit" id="przycisk-zaloguj">Zaloguj</button>
            </form>
            <p>Nie masz jeszcze konta? <a href="#">Zarejestruj się</a></p>
        </div>

        <nav>
            <a href="zajecia.php"><i class="fas fa-dumbbell"></i>Zajęcia</a>
            <a href="o-nas.php"><i class="fas fa-info-circle"></i>O nas</a>
            <a href="kontakt.php"><i class="fas fa-phone"></i>Kontakt</a>
            <a href="gra.php"><i class="fas fa-gamepad"></i>Gra</a>
        </nav>


    </header>
    

    <section class="kontakt">
        <h2>Kontakt</h2>
        <p>Zapraszamy do odwiedzenia naszego klubu. Znajdziesz nas pod poniższym adresem:</p>
        <p>ul. Gospody 3B, 80-344 Gdańsk</p>
        <p>Możesz także skontaktować się z nami pod numerem telefonu: 211 315 072 lub za pośrednictwem e-maila: kontakt@fitzone.org.pl</p>
    </section>

    <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2321.3869224179166!2d18.581528377247746!3d54.42080187262039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd0ada5c0c846d%3A0x91627a1463e9f14f!2sFIT%20ZONE!5e0!3m2!1spl!2spl!4v1712957259148!5m2!1spl!2spl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <footer>
        <p>&copy; 2024 Klub Fitness FitZone. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>