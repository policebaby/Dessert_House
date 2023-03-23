// Get the PopUp
var popUp = document.getElementById("popUp");

// Get the button that opens the pop up scrren
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the popUp
btn.onclick = function(event) {
    popUp.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    popUp.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target != popUp && event.target.textContent != "View") {
        popUp.style.display = "none";
    }
}
