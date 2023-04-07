$(document).ready(function(){

  $(".a").click(function(event) {
      var bgcolor = $(this).css('background-color', '#c22014');  
      $(this).css('color', 'white');  
      console.log(event.target.attributes[0].value);
  });
  $(".b").click(function(event) {
      $(this).css('background-color', '#c22014');  
      $(this).css('color', 'white');    
      console.log(event.target.attributes[0].value);
  }); 
  $(".c").click(function(event){
      $(this).css('background-color', '#c22014');  
      $(this).css('color', 'white');    
      console.log(event.target.attributes[0].value);
  });
  $(".d").click(function(event) {
      $(this).css('background-color', '#c22014');  
      $(this).css('color', 'white');    
      console.log(event.target.attributes[0].value);
  });
  $(".e").click(function(event) {
      $(this).css('background-color', '#c22014');  
      $(this).css('color', 'white');    
      console.log(event.target.attributes[0].value);
  });
  $(".f").click(function(event) {
      $(this).css('background-color', '#c22014');  
      $(this).css('color', 'white');    
      console.log(event.target.attributes[0].value);
  });


});

function fun(this) {
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