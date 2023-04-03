$(document).ready(function(){

    $(".a").click((event) => {
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