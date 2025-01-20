function isSmartPhone() {
  if (window.matchMedia && window.matchMedia('(max-device-width: 768px)').matches) {
    return true;
  } else {
    return false;
  }
}

const navbar = document.querySelector(".navbar");

if(isSmartPhone(true)) {
  navbar.classList.add("mobile");

const navbarMenu = document.querySelector(".navbar");
const navbarBtn = document.querySelector(".navbar-btn");
const navbarContent = document.querySelector(".navbar-content");

navbarMenu.addEventListener("click", () => {

  navbarBtn.classList.toggle("active");
  navbarContent.style.opacity = 1;
  if (!navbarContent.classList.contains("active")) {
    navbarContent.classList.add("active");
  } else {
    navbarContent.classList.remove("active");
  }
});
}
