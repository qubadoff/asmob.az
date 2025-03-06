const menuToggle = document.getElementById("menuToggle");
const mobileMenu = document.getElementById("mobileMenu");
const mobileDropdownButton = document.getElementById("mobileDropdownButton");
const mobileDropdownMenu = document.getElementById("mobileDropdownMenu");

// Ensure the menu is hidden when the page loads
document.addEventListener("DOMContentLoaded", function () {
  mobileMenu.classList.remove("show-menu"); // Make sure it's hidden initially
});

if (menuToggle && mobileMenu) {
  menuToggle.addEventListener("click", function () {
    mobileMenu.classList.toggle("show-menu"); // Toggle visibility
  });
}

if (mobileDropdownButton && mobileDropdownMenu) {
  mobileDropdownButton.addEventListener("click", function () {
    mobileDropdownMenu.classList.toggle("show-menu");
  });
}
const header = document.getElementById("siteHeader");
window.addEventListener("scroll", function () {
  if (window.scrollY > 500) {
    header.classList.add("sticky-header");
  } else {
    header.classList.remove("sticky-header");
  }
});

// Initialize Swiper
let swiper = new Swiper(".mySwiper", {
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// Change Background Image for Cards
function changeBackground(imageUrl) {
  document.querySelector(
    ".card-container-main"
  ).style.backgroundImage = `url(${imageUrl})`;
}

// Filtering Images
const buttons = document.querySelectorAll(".filter-btn");
const imageContainers = document.querySelectorAll(".gallery-container");

buttons.forEach((button) => {
  button.addEventListener("click", () => {
    // Remove active class from all buttons
    buttons.forEach((btn) => btn.classList.remove("active-filter"));
    button.classList.add("active-filter");

    // Get the category from the clicked button
    const category = button.getAttribute("data-category");

    // Loop through all images
    imageContainers.forEach((container) => {
      let image = container.querySelector(".gallery-item");
      let imageCategory = container.getAttribute("data-category");

      if (category === "all" || imageCategory === category) {
        container.classList.remove("hidden"); // Show container
        image.style.display = "block"; // Ensure image is visible
        image.classList.remove("fade-out");
        image.classList.add("fade-in");
      } else {
        image.classList.remove("fade-in");
        image.classList.add("fade-out");

        setTimeout(() => {
          container.classList.add("hidden"); // Hide container after animation
          image.style.display = "none"; // Ensure image is hidden
        }, 300);
      }
    });
  });
});

// Mini Swiper
var swiperMini = new Swiper(".swiperMini", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  loopAdditionalSlides: 5,
  speed: 500,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiperMini-button-next",
    prevEl: ".swiperMini-button-prev",
  },

  breakpoints: {
    480: { slidesPerView: 1 },
    640: { slidesPerView: 2, spaceBetween: 15 },
    768: { slidesPerView: 3, spaceBetween: 20 },
    1024: { slidesPerView: 4, spaceBetween: 25 },
  },
});

// Scroll to Top
function scrollToTop() {
  window.scrollTo({ top: 0, behavior: "smooth" });
}

// Open Image Details
function openImageDetails(imageElement) {
  const id = encodeURIComponent(imageElement.dataset.id);
  const title = encodeURIComponent(imageElement.dataset.title);
  const category = encodeURIComponent(imageElement.dataset.category);
  const description = encodeURIComponent(imageElement.dataset.description);
  const imageUrl = encodeURIComponent(imageElement.src);

  window.location.href = `image-details.html?id=${id}&title=${title}&category=${category}&description=${description}&imageUrl=${imageUrl}`;
}
