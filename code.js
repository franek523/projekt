// Funkcja wyświetlająca okno logowania i ukrywająca okno rejestracji
function showLoginPopup() {
    document.getElementById("login-popup").style.display = "block";
    document.getElementById("register-popup").style.display = "none";
}

// Funkcja ukrywająca okno logowania
function hideLoginPopup() {
    document.getElementById("login-popup").style.display = "none";
}

// Funkcja wyświetlająca okno rejestracji i ukrywająca okno logowania
function showRegisterPopup() {
    document.getElementById("register-popup").style.display = "block";
    document.getElementById("login-popup").style.display = "none";
}

// Funkcja ukrywająca okno rejestracji
function hideRegisterPopup() {
    document.getElementById("register-popup").style.display = "none";
}

// Funkcja resetująca formularz rejestracji po jego wysłaniu
function resetRegisterForm() {
    document.getElementById("register-form").reset();
}

// Funkcja obsługująca wysłanie formularza rejestracji
function submitRegisterForm(event) {
    // Tutaj dodaj logikę obsługi wysłania formularza (np. wysłanie danych na serwer)

    // Po wysłaniu formularza zresetuj go
    resetRegisterForm();

    // Zapobieganie domyślnej akcji przeglądarki
    event.preventDefault();
}

// Czekaj, aż cały dokument HTML zostanie załadowany
document.addEventListener('DOMContentLoaded', () => {
    // Pobierz referencje do gracza i przeszkód
    const player = document.getElementById('player');
    const obstacles = document.querySelectorAll('.obstacle');
    let score = 0;
    let isMovingLeft = false;
    let isMovingRight = false;

    // Funkcja do poruszania gracza
    function movePlayer() {
        if (isMovingLeft && player.offsetLeft > 0) {
            player.style.left = `${player.offsetLeft - 10}px`;
        }
        if (isMovingRight && player.offsetLeft + player.offsetWidth < window.innerWidth) {
            player.style.left = `${player.offsetLeft + 10}px`;
        }
    }

    // Obsługa naciśnięcia klawiszy strzałek
    document.addEventListener('keydown', (event) => {
        if (event.key === 'ArrowLeft') {
            isMovingLeft = true;
        }
        if (event.key === 'ArrowRight') {
            isMovingRight = true;
        }
    });

    // Obsługa zwolnienia klawiszy strzałek
    document.addEventListener('keyup', (event) => {
        if (event.key === 'ArrowLeft') {
            isMovingLeft = false;
        }
        if (event.key === 'ArrowRight') {
            isMovingRight = false;
        }
    });

    // Aktualizacja gry co 20 milisekund
    setInterval(() => {
        movePlayer();
    }, 20);
});