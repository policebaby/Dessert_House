const replyText = document.getElementById("reply-text");
// const replyText = document.querySelectorAll("reply-text");
const sellerReply = document.getElementById("sellerReply");
const sendBtn = document.getElementById("sendBtn");


replyText.addEventListener("click", function() {
    sellerReply.style.display = "block";
}
);

sendBtn.addEventListener("click", function() {
    sellerReply.style.display = "block";
});

