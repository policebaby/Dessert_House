
formFile.addEventListener("change",function(event){

    document.getElementById("profileImg").src = 
    window.URL.createObjectURL(event.target.files[0]);
});