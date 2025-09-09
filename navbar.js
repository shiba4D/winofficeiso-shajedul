// navbar.js
document.addEventListener("DOMContentLoaded", function () {
  // Hamburger toggle
  document.addEventListener("click", function (e) {
    if (e.target.closest("#hamburger")) {
      document.querySelector(".menu").classList.toggle("open");
      document.getElementById("hamburger").style.display = "none";
    }
  });

  // Dropdown support
  const dropdownBtn = document.querySelector(".dropbtn");
  if (dropdownBtn) {
    dropdownBtn.addEventListener("click", function () {
      this.nextElementSibling.classList.toggle("show");
    });
  }
});
