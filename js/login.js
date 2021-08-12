const eyeIcon = document.querySelector(".fa-eye");
const password = document.querySelector("#password");

eyeIcon.addEventListener("click", () => {
  if (password.type == "password") {
    password.type = "text";
  } else {
    password.type = "password";
  }
});
