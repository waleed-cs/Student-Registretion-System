const buttons = document.querySelectorAll(".option");
const studentRegister = document.querySelector(".option1");
const viewStudents = document.querySelector(".option2");
const registerForm = document.querySelector(".form_parent");
const studentTable = document.querySelector(".student_table_parent");
const resetAllButtons = () => {
  buttons.forEach((button) => {
    button.children[0].style.color = "white";
    button.children[1].style.color = "white";
    button.style.backgroundColor = "#2c3849";
  });
};

studentRegister.addEventListener("click", () => {
  resetAllButtons();
  studentRegister.style.backgroundColor = "white";
  studentRegister.children[0].style.color = "#334155";
  studentRegister.children[1].style.color = "#334155";
  registerForm.style.display = "";
  studentTable.style.display = "none";
});

viewStudents.addEventListener("click", () => {
  resetAllButtons();
  viewStudents.style.backgroundColor = "white";
  viewStudents.children[0].style.color = "#334155";
  viewStudents.children[1].style.color = "#334155";
  registerForm.style.display = "none";
  studentTable.style.display = "";
});
