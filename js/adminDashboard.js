const buttons = document.querySelectorAll(".option");
const studentRegister = document.querySelector(".option1");
const viewStudents = document.querySelector(".option2");
const registerForm = document.querySelector(".form_parent");
const studentTable = document.querySelector(".student_table_parent");
const messages = document.querySelectorAll(".message");

const resetAllButtons = () => {
  buttons.forEach((button) => {
    button.children[0].style.color = "#d9dcd6";
    button.children[1].style.color = "#d9dcd6";
    button.style.backgroundColor = "#11364b";
    messages.forEach((message) => {
      message.style.display = "none";
    });
  });
};

studentRegister.addEventListener("click", () => {
  resetAllButtons();
  studentRegister.style.backgroundColor = "#F6F6F6";
  studentRegister.children[0].style.color = "#11364b";
  studentRegister.children[1].style.color = "#11364b";
  registerForm.style.display = "";
  studentTable.style.display = "none";
});

viewStudents.addEventListener("click", () => {
  resetAllButtons();
  viewStudents.style.backgroundColor = "#F6F6F6";
  viewStudents.children[0].style.color = "#11364b";
  viewStudents.children[1].style.color = "#11364b";
  registerForm.style.display = "none";
  studentTable.style.display = "";
});
