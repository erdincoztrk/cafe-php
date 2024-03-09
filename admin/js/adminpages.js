function homePage(){
    $.ajax({
        url : "homepage.php",
        type : "GET",
        success : (data)=>{
            $('div#mainDiv').html(data)
        }
    })
}
function userList(){
    $.ajax({
        url : "user_list.php",
        type : "GET",
        success : (data)=>{
            $('div#mainDiv').html(data)
        }
    })
}