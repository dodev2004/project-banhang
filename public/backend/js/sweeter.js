
    window.toastMessage = function(title,icon,href){
    Swal.fire({
        title: title,
        text: 'Do you want to continue',
        icon: icon,
        confirmButtonText: 'Tiếp tục'
        }).then(function(res){
            window.location.href = href
        })
    }