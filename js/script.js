const carouselContainer = document.querySelector('.carousel-container');
const slides = document.querySelectorAll('.carousel-slide');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
const loginbtn = document.querySelector(".login");

let currentIndex = 0;

function showSlide(index) {
    if (index >= slides.length) {
        currentIndex = 0;
    } else if (index < 0) {
        currentIndex = slides.length - 1;
    } else {
        currentIndex = index;
    }
    carouselContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
}

nextBtn.addEventListener('click', () => {
    showSlide(currentIndex + 1);
});

prevBtn.addEventListener('click', () => {
    showSlide(currentIndex - 1);
});

showSlide(currentIndex);

function LoginWindow() {
    window.open("php/login.php", "_self");
}

function RegisterWindow() {
    window.open("php/register.php", "_self");
}