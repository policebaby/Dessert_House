const inputElements = document.querySelectorAll(
"input[type='text'], input[type='file']"
);
const productImg = document.getElementById("productImg");
const cancelBtn = document.getElementById("cancelBtn");

cancelBtn.addEventListener("click", function () {
inputElements.forEach((input) => {
    // input.value = "";
    if (input.type === "file") {
      // Clear selected file
    input.value = "";
    } else {
      // Clear text input field
    input.value = "";
    }
});
productImg.src = "./resources/images/default_product_image.png";
});
