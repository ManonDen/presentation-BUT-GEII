
document.addEventListener("DOMContentLoaded", () => {
    const carouselInner = document.querySelector(".carousel-inner");
    const items = document.querySelectorAll(".carousel-item");
    const nextBtn = document.querySelector(".next");
    const prevBtn = document.querySelector(".prev");

    let index = 0;
    const total = items.length;
    const intervalTime = 3000; // 3 secondes

    function updateCarousel() {
        carouselInner.style.transform = `translateX(-${index * 100}%)`;
    }

    function nextSlide() {
        index = (index + 1) % total;
        updateCarousel();
    }

    function prevSlide() {
        index = (index - 1 + total) % total;
        updateCarousel();
    }

    nextBtn.addEventListener("click", () => {
        nextSlide();
        resetAutoPlay();
    });

    prevBtn.addEventListener("click", () => {
        prevSlide();
        resetAutoPlay();
    });

    let autoPlay = setInterval(nextSlide, intervalTime);

    function resetAutoPlay() {
        clearInterval(autoPlay);
        autoPlay = setInterval(nextSlide, intervalTime);
    }
});


document.addEventListener("DOMContentLoaded", () => {
    const video = document.getElementById("bg-video");
    if (video) {
        video.play().catch(() => {
            console.log("Autoplay bloqué par le navigateur");
        });
    }
});
