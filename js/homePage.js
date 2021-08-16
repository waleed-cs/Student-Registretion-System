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
  const line1 = document.querySelector(".line1");
  const line2 = document.querySelector(".line2");
  const line3 = document.querySelector(".line3");
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
    line1.classList.toggle("toggle");
    line2.classList.toggle("toggle");
    line3.classList.toggle("toggle");
  });
};

navFade();
