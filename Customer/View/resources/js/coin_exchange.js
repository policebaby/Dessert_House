document.getElementById("submitBtn").addEventListener('click', function (exchange) {
    Swal.fire({
        title: 'Request send successfully!',
        text: "Please wait for a moment",
        icon: 'success',
        
        confirmButtonColor: '#3085d6',
        
        confirmButtonText: 'back to home'
    })
})