function smallNotice(text, icon, timer=3000){
    Swal.fire({
        position: 'bottom-end',
        icon: icon,
        title: text,
        showConfirmButton: false,
        timer: timer,
        toast: true
    });
}