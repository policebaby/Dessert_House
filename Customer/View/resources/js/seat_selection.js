$(document).ready(function(){

    $(".a").click(function(event) {
        $(this).css('background-color', 'red !important');
        console.log(event.target.attributes[0].value);
    });
    $(".b").click((event) => {
        console.log(event.target.attributes[0].value);
    }); 
    $(".c").click((event) => {
        console.log(event.target.attributes[0].value);
    });
    $(".d").click((event) => {
        console.log(event.target.attributes[0].value);
    });
    $(".e").click((event) => {
        console.log(event.target.attributes[0].value);
    });
    $(".f").click((event) => {
        console.log(event.target.attributes[0].value);
    });

  });

  let seats = [
    { number: 1, status: "Available" },
    { number: 2, status: "Taken" },
    { number: 3, status: "Waiting" }
  ];
  
  // Loop through the array and print the status of each seat
  for (let i = 0; i < seats.length; i++) {
    console.log("Seat " + seats[i].number + ": " + seats[i].status);
  }