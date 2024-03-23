function smallNotice(text, icon, timer = 3000) {
    icon = (typeof icon == "number") ? icon.toString() : icon;
    var iconNumber = "4"
    switch (icon) {
        case "1":
            iconNumber = 'success'
            break;
        case "2":
            iconNumber = 'info'
            break;
        case "3":
            iconNumber = 'error'
            break;
        case "4":
            iconNumber = 'warning'
            break;
    }
    Swal.fire({
        position: 'bottom-end',
        icon: iconNumber,
        title: text,
        showConfirmButton: false,
        timer: timer,
        toast: true
    });
}

function controlEmptyInput(formId){
    var inputlar = $('#'+formId + ' input').length;
    var boslar = 0;
    for(var i = 0; i < inputlar; i++){
        if($('#'+formId+' input').val() === ''){
            boslar++;
            smallNotice("There mustn't be no empty field", '4')
            return 1;
        }
    }
}