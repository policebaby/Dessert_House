const newPassword = document.getElementById("new-password");
const confirmPassword = document.getElementById("confirm-password");
const message = document.getElementById("message");

confirmPassword.addEventListener("input", () => {
if(newPassword.value !== confirmPassword.value) {
    message.textContent = "Passwords do not match";
}else{
    message.textContent = "";
}
});
