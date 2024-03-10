function addUser(form){
    var formElements = form.serialize();

   var elementUzunluk = $('#addUserForm input[type=text]').length
    for(var i = 0; i<elementUzunluk; i++){
        var deger = $("addUserForm input[type=text]:eq("+i+")").val();
        if(!deger || deger == ''){
            alert("Lütfen Bütün Alanları Doldurunuz!")
            return;
        }
    }

    $.ajax({
        type : "POST",
        url : "Transactions/userTransactions/addUser.php",
        data :formElements,
        success : (data)=>{
            userList();

        },
        error : ()=>{
        userList()
        }
    })
}