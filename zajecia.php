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

    <section id="zajecia">
        <h1>Zajęcia w klubie FitZone</h1>

    <ul>
        <li>
            <h3>FitZone HIIT</h3>
            <p>Intensywne treningi interwałowe, które skutecznie spalają kalorie i poprawiają wytrzymałość.</p>
        </li>
        <li>
            <h3>PowerPump</h3>
            <p>Zajęcia z wykorzystaniem sztang i obciążników, które wzmacniają mięśnie oraz poprawiają sylwetkę.</p>
        </li>
        <li>
            <h3>YogaFlow</h3>
            <p>Zajęcia jogi, które pomagają w poprawie elastyczności, równowagi i redukcji stresu.</p>
        </li>
        <li>
            <h3>Zumba Dance Party</h3>
            <p>Energiczne zajęcia taneczne, które nie tylko poprawiają kondycję fizyczną, ale także podnoszą na duchu.</p>
        </li>
        <li>
            <h3>Pilates Core</h3>
            <p>Trening pilatesu skoncentrowany na wzmacnianiu mięśni brzucha, pleców i stabilizacji ciała.</p>
        </li>
        <li>
            <h3>Kardio Kickboxing</h3>
            <p>Dynamiczne zajęcia, które łączą elementy sztuk walki z kardio, doskonałe do spalania kalorii i poprawy kondycji.</p>
        </li>
        <li>
            <h3>Spin & Sweat</h3>
            <p>Zajęcia na rowerach spinningowych, które doskonale poprawiają wytrzymałość oraz kondycję serca i płuc.</p>
        </li>
        <li>
            <h3>Functional Fitness</h3>
            <p>Trening funkcjonalny, który pomaga w poprawie siły, równowagi i mobilności w codziennych czynnościach.</p>
        </li>
        <li>
            <h3>Stretch & Relax</h3>
            <p>Zajęcia relaksacyjne, które skupiają się na rozciąganiu mięśni i redukcji napięcia po intensywnym treningu.</p>
        </li>
        <li>
            <h3>Bootcamp Challenge</h3>
            <p>Wyzwania treningowe, które testują siłę, wytrzymałość i determinację uczestników.</p>
        </li>
    </ul>
    </section><br>

    <footer>
        <p>&copy; 2024 Klub Fitness FitZone. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>