// Sample images array
const imageList = [
  {
    id: "1",
    title: "Bridge Street Residence",
    category: "Bathrooms, Bedrooms, Kitchens",
    description: "A luxury residence with modern interiors.",
    src: "assets/roomherosecimg.png",
  },
  {
    id: "2",
    title: "Cozy Bedroom Space",
    category: "Bedrooms",
    description: "A comfortable bedroom with warm lighting.",
    src: "assets/bathroom.png",
  },
  {
    id: "3",
    title: "Dining Room Inspiration",
    category: "Kitchens",
    description: "A perfect dining setup with modern decor.",
    src: "assets/bedroom.jpg",
  },
  {
    id: "4",
    title: "Luxury Living Room",
    category: "Living Room",
    description: "A spacious living room with modern decor.",
    src: "assets/diningroom.jpg",
  },
  {
    id: "5",
    title: "Elegant Exterior Design",
    category: "Exterior",
    description: "A breathtaking view of modern architecture.",
    src: "assets/exterior.jpg",
  },
  {
    id: "6",
    title: "Stylish Office Space",
    category: "Office",
    description: "A minimalist workspace for productivity.",
    src: "assets/livingroom.jpg",
  },
  {
    id: "7",
    title: "Modern Workspace",
    category: "Office",
    description: "A clean and sophisticated work environment.",
    src: "assets/office.jpg",
  },
  {
    id: "8",
    title: "Artistic Interior",
    category: "Interior Design",
    description: "A creative space filled with inspiration.",
    src: "assets/room1.avif",
  },
];

// Function to get query parameters
function getQueryParams() {
  const params = new URLSearchParams(window.location.search);
  return {
    id: params.get("id"),
    title: params.get("title"),
    category: params.get("category"),
    description: params.get("description"),
    imageUrl: params.get("imageUrl"),
  };
}

// Load image details
function loadImage(id) {
  const image = imageList.find((img) => img.id === id);
  if (image) {
    document.getElementById("imageTitle").innerText = image.title;
    document.getElementById("imageCategory").innerText =
      "Category: " + image.category;
    document.getElementById("imageDescription").innerText = image.description;
    document.getElementById("imageDisplay").src = image.src;
    document.getElementById("imageDisplay").dataset.id = image.id;
  }
}

// Handle image navigation
function navigateImage(direction) {
  let currentId = document.getElementById("imageDisplay").dataset.id;
  let currentIndex = imageList.findIndex((img) => img.id === currentId);

  if (direction === "next" && currentIndex < imageList.length - 1) {
    loadImage(imageList[currentIndex + 1].id);
  } else if (direction === "prev" && currentIndex > 0) {
    loadImage(imageList[currentIndex - 1].id);
  }
}

// Attach event listeners
document
  .getElementById("prevImage")
  .addEventListener("click", () => navigateImage("prev"));
document
  .getElementById("nextImage")
  .addEventListener("click", () => navigateImage("next"));

// Load image on page load
window.onload = function () {
  document.getElementById("preloader").style.display = "none"; // Hide preloader
  const data = getQueryParams();
  loadImage(data.id);
};
