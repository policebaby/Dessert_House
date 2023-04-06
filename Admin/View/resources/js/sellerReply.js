function toggleSellerReply(index) {
  var element = document.getElementById("sellerReply" + index);
  var commentText = document.getElementById("commentText" + index);

  if (commentText.innerText == "1" && element.style.display !== "none") {
      element.style.display = "none";
  } else if (commentText.innerText == "1" && element.style.display === "none") {
      element.style.display = "block";
  }
}
