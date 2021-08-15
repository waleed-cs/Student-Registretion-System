buttonToTop = document.querySelector(".fa-chevron-up");

window.onscroll = () => {
  if (this.scrollY >= 400) {
    buttonToTop.classList.add("show");
  } else {
    buttonToTop.classList.remove("show");
  }
};

scrollToTop = () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
};

const navFade = () => {
  const burgerButton = document.querySelector(".burger");
  const nav = document.querySelector(".nav");
  const navLinks = document.querySelectorAll(".nav li");
  burgerButton.addEventListener("click", () => {
    nav.classList.toggle("active");
    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = ``;
      } else {
        link.style.animation = `navLinksFade 0.5s ease forwards ${
          index / 7 + 0.5
        }s`;
      }
    });
  });
};

navFade();
