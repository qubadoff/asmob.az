var swiper = new Swiper(".mySwiper", {
  spaceBetween: 50,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    976: {
      slidesPerView: 4,
    },
  },
});

// Featured Works
document.addEventListener("DOMContentLoaded", function () {
  // Tabların başladığı vəziyyət
  let tabs = document.querySelectorAll(".tabs input[type='radio']");
  let tabContents = document.querySelectorAll(".tabs .tab");

  // Yalnız `show all` tabını göstərmək
  tabContents.forEach((tab) => (tab.style.display = "none")); // İlk başda bütün tabları gizlə
  document.getElementById("tabone-content").style.display = "flex"; // Yalnız `show all` tabını göstər

  tabs.forEach((tab) => {
    tab.addEventListener("change", function () {
      // Hər bir tabın seçimində, yalnız o tabın məzmununu göstər
      tabContents.forEach((tab) => (tab.style.display = "none")); // Bütün tabları gizlət
      let selectedTab = tab.id.replace("tab", "tab"); // Seçilən tabın ID-si
      document.getElementById(`${selectedTab}-content`).style.display = "flex"; // Seçilən tabı göstər
    });
  });
});

// Burger menu
const accordion_container = document.querySelector(".accordion_container");
const burger_menu = document.querySelector(".burger_menu");
const burger = document.querySelector(".burger");
burger_menu.addEventListener("click", () => {
  burger.classList.toggle("active");
  if (accordion_container.style.display == "none") {
    accordion_container.style.display = "block";
  } else {
    accordion_container.style.display = "none";
  }
});

const search_icon = document.querySelector(".bi-search");
const x_icon = document.querySelector(".fa-xmark");
const search_container = document.querySelector(".search_container");
search_icon.addEventListener("click", () => {
  search_icon.style.display = "none";
  x_icon.style.display = "flex";
  search_container.style.display = "flex";
});
x_icon.addEventListener("click", () => {
  search_icon.style.display = "flex";
  x_icon.style.display = "none";
  search_container.style.display = "none";
});
// Swiper 2
var swiper = new Swiper(".mySwiper2", {
  loop: true,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    976: {
      slidesPerView: 6,
    },
  },
});

// Accordion
const mediaQuery = window.matchMedia("(min-width: 976px)");
mediaQuery.addEventListener("change", (event) => {
  if (event.matches) {
    // location.reload(); // Səhifəni yenilə
    accordion_container.style.display = "none";
    burger.classList.remove("active");
  }
});
