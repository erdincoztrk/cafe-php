function homePage(){
    $.ajax({
        url : "homepage.php",
        type : "GET",
        success : (data)=>{
            $('div#mainDiv').html(data)
        }
    })
}