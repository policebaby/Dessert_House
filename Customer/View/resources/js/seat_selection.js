
function seat(id) {
  // console.log(id);
  var button = document.getElementById(id);
  button.style.backgroundColor = '#c22014';
  button.style.color = 'white';
  button.disabled = true;
  document.getElementById("seat_form").submit();
  localStorage.setItem(id, '#c22014');
  localStorage.setItem(id, 'white');
}

window.onload = function() {
  var buttons = document.getElementsByTagName("button");
  for (var i = 0; i < buttons.length; i++) {
    var button = buttons[i];
    if (localStorage.getItem(button.id)) {
      button.style.backgroundColor = '#c22014';
      button.style.color = 'white';
      button.disabled = false;
    }
  }
};