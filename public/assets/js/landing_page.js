// Mobile menu toggle
document
    .querySelector(".mobile-menu-button")
    .addEventListener("click", function () {
        document.querySelector(".mobile-menu").classList.toggle("hidden");
    });

// Navbar scroll effect
window.addEventListener("scroll", function () {
    const nav = document.querySelector("nav");
    if (window.scrollY > 50) {
        nav.classList.add("bg-white", "dark:bg-gray-800", "shadow-md");
        nav.classList.remove("bg-transparent");
    } else {
        nav.classList.remove("bg-white", "dark:bg-gray-800", "shadow-md");
        nav.classList.add("bg-transparent");
    }
});

// Close navbar when click outside
document.addEventListener("click", function (event) {
    const nav = document.querySelector("nav");
    const mobileMenu = document.querySelector(".mobile-menu");
    if (!nav.contains(event.target) && !mobileMenu.contains(event.target)) {
        mobileMenu.classList.add("hidden");
    }
});

/* Efek 3D untuk about me */
const cards = document.querySelectorAll(".card");
cards.forEach((card) => {
    const content = card.querySelector(".card-content");

    card.addEventListener("mousemove", (e) => {
        const cardRect = card.getBoundingClientRect();
        const x = e.clientX - cardRect.left;
        const y = e.clientY - cardRect.top;

        const rotateX = (y / cardRect.height - 0.5) * 20;
        const rotateY = (x / cardRect.width - 0.5) * -20;

        content.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
    });

    card.addEventListener("mouseleave", () => {
        content.style.transform = "rotateX(0deg) rotateY(0deg)";
    });
});

/* FAQ */
function toggleAnswer(answerId) {
    const answer = document.getElementById(answerId);
    const icon = document.getElementById(`icon-${answerId}`);
    answer.classList.toggle("hidden");
    icon.classList.toggle("rotate-180");
}

function toggleAnswerMobile(answerId) {
    const answer = document.getElementById(answerId);
    answer.classList.toggle("hidden");
}

// Dark mode toggle
const darkModeToggle = document.getElementById("darkModeToggle");
const darkModeToggleMobile = document.getElementById("darkModeToggleMobile");

function toggleDarkMode() {
    document.documentElement.classList.toggle("dark");
    localStorage.setItem(
        "darkMode",
        document.documentElement.classList.contains("dark")
    );
}

darkModeToggle.addEventListener("click", toggleDarkMode);
darkModeToggleMobile.addEventListener("click", toggleDarkMode);

// Check for saved user preference
if (
    localStorage.getItem("darkMode") === "true" ||
    (!("darkMode" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    document.documentElement.classList.add("dark");
}

//AOS
AOS.init();

// Fungsi untuk efek mengetik
function typeWriter(text, i, fnCallback) {
    if (i < text.length) {
        document.getElementById("welcome-text").innerHTML =
            text.substring(0, i + 1) + '<span class="typing-text"></span>';
        setTimeout(function () {
            typeWriter(text, i + 1, fnCallback);
        }, 120);
    } else if (typeof fnCallback == "function") {
        setTimeout(fnCallback, 1000);
    }
}

// Memulai efek mengetik
function startTextAnimation(textArray, i) {
    if (typeof textArray[i] == "undefined") {
        setTimeout(function () {
            startTextAnimation(textArray, 0);
        }, 15000); // Jeda 20 detik sebelum mengulang
    } else if (i < textArray[i].length) {
        typeWriter(textArray[i], 0, function () {
            startTextAnimation(textArray, i + 1);
        });
    }
}

// Array teks yang akan diketik
var textArray = [
    "Selamat Datang di PendataX.",
    "Kelola Data sekolah dengan Mudah.",
    "Efisiensi Proses Pendataan.",
];

startTextAnimation(textArray, 0);
