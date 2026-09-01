const header = document.querySelector(".header");
const menuToggle = document.getElementById("menuToggle");

menuToggle.addEventListener("click", () => {
  const isOpen = header.classList.toggle("open");
  menuToggle.setAttribute("aria-expanded", String(isOpen));
});
