function addUser(form, formId){
    var formElements = form.serialize();
   var control = controlEmptyInput(formId);
   if(control == 1){
       return;
   }
    $('#modalClose').click();
    $.ajax({
        type : "POST",
        url : "Transactions/userTransactions/addUser.php",
        data :formElements,
        success : (data)=>{
            $("#modalClose").click();
            $("div[class*=modal-backdrop]").remove();
            var message = data.split('*')
            smallNotice(message[0], message[1]);
            userList();
        },
        error : ()=>{

        }
    })
}

function deleteUser(userId){
    $.ajax({
        type : "GET",
        url : "Transactions/userTransactions/deleteUser.php?userid="+userId,
        success : (data) =>{
            var message = data.split('*')
            smallNotice(message[0], message[1]);
            userList();
        },
        error :()=>{
            smallNotice("HATAYA DÜŞTÜ", 3)
        }
    })
}

function editUser(userId){
$.ajax({
    type : "GET",
    url : "partials/user/-edit_user_form.php?user_id="+userId,
    success : (data)=>{
        $('div[id=modal-body]').html(data)
    }
})
}