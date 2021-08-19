const eyeIcon = document.querySelector(".fa-eye");
const password = document.querySelector("#password");

eyeIcon.addEventListener("click", () => {
  if (password.type == "password") {
    password.type = "text";
    eyeIcon.classList.add("fa-eye-slash");
  } else {
    password.type = "password";
    eyeIcon.classList.remove("fa-eye-slash");
  }
});
