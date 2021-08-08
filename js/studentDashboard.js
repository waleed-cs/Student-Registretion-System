const options = document.querySelectorAll(".option");
const messages = document.querySelectorAll(".message");
const coursesDiv = document.querySelector(".courses_parent");
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

const enrollCourse = document.querySelector(".option1");
const formParent = document.querySelector(".form_parent");

enrollCourse.addEventListener("click", () => {
  resetAllButtons();
  activeButton(enrollCourse);
  coursesDiv.style.display = "none";
  formParent.style.display = "";
});

const viewCourse = document.querySelector(".option2");

viewCourse.addEventListener("click", () => {
  resetAllButtons();
  activeButton(viewCourse);
  formParent.style.display = "none";
  coursesDiv.style.display = "";
});
