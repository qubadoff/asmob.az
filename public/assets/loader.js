window.addEventListener("load", function () {
    // Wait for all assets (CSS, images, JS) to load
    const preloader = document.getElementById("preloader");

    // Fade out the preloader
    preloader.style.opacity = "0";

    setTimeout(() => {
      preloader.style.display = "none";
      document.body.style.opacity = "1";
    }, 200);
  });