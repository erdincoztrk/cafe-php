function addUser(form){
    var formElements = form.serialize();



    $.ajax({
        type : "POST",
        url : "Transactions/userTransactions/addUser.php",
        data :formElements,
        success : (data)=>{
            $("#modalClose").click();
            $("div[class*=modal-backdrop]").remove();
            smallNotice("User was added", "success");
            userList();
        },
        error : ()=>{

        }
    })
}