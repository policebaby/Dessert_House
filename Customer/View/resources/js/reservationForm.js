document.getElementById('btnBook').addEventListener('click',  function reserve(form) {
    Swal.fire({
        title: 'Payment Fail!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#0057FF',
        cancelButtonColor: '#C21111',
        confirmButtonText: 'Try Again'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Payment Success!',
                '',
                'success'
            )
        }
    })
})