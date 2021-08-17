const options = document.querySelectorAll(".option");
const messages = document.querySelectorAll(".message");
const coursesDiv = document.querySelector(".courses_parent");
const settingsButton = document.querySelector(".option3");
const settingsDiv = document.querySelector(".settings");
options.forEach((option) => {
  option.addEventListener("click", () => {
    messages.forEach((message) => {
      message.style.display = "none";
    });
  });
});

const resetAllButtons = () => {
  options.forEach((option) => {
    option.children[0].style.color = "#d9dcd6";
    option.children[1].style.color = "#d9dcd6";
    option.style.backgroundColor = "#11364b";
  });
};

const activeButton = (e) => {
  e.style.backgroundColor = "#d9dcd6";
  e.children[0].style.color = "#11364b";
  e.children[1].style.color = "#11364b";
};

const enrollCourseButton = document.querySelector(".option1");
const formParent = document.querySelector(".form_parent");

enrollCourseButton.addEventListener("click", () => {
  resetAllButtons();
  activeButton(enrollCourseButton);
  coursesDiv.style.display = "none";
  formParent.style.display = "";
  settingsDiv.style.display = "none";
});

const viewCourseButton = document.querySelector(".option2");

viewCourseButton.addEventListener("click", () => {
  resetAllButtons();
  activeButton(viewCourseButton);
  formParent.style.display = "none";
  coursesDiv.style.display = "";
  settingsDiv.style.display = "none";
});

settingsButton.addEventListener("click", () => {
  resetAllButtons();
  activeButton(settingsButton);
  formParent.style.display = "none";
  coursesDiv.style.display = "none";
  settingsDiv.style.display = "";
});

let goToSettings = () => {
  resetAllButtons();
  activeButton(settingsButton);
  formParent.style.display = "none";
  coursesDiv.style.display = "none";
  settingsDiv.style.display = "";
};

const navFade = () => {
  const burgerButton = document.querySelector(".burger");
  const line1 = document.querySelector(".line1");
  const line2 = document.querySelector(".line2");
  const line3 = document.querySelector(".line3");
  const nav = document.querySelector(".nav");
  const navLinks = document.querySelectorAll(".nav div");
  const header = document.querySelector("header");
  burgerButton.addEventListener("click", () => {
    header.classList.toggle("active");
    nav.classList.toggle("active");
    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = ``;
      } else {
        link.style.animation = `navLinksFade 0.5s ease forwards ${index / 7}s`;
      }
    });
    line1.classList.toggle("toggle");
    line2.classList.toggle("toggle");
    line3.classList.toggle("toggle");
  });
};

navFade();
