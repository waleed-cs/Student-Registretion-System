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
