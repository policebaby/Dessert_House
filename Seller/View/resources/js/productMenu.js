formFile.addEventListener("change",function(event){

    document.getElementById("productImg").src = 
    window.URL.createObjectURL(event.target.files[0]);
});