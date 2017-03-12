$(document).ready(function(){
    $("#frm_login").submit(function(event){
        event.preventDefault();

$.ajax({
url: "http://127.0.0.1/simple_login_comp/index.php/user/do_login",  
type: "POST",
data: 
{
    username: $('#username').val(),
    password: $('#password').val()},
success: function(data) 
{
    if (data== 'loggedIn')
    {   
        alert("you are logged IN");
        //window.location.replace("http://127.0.0.1/simple_login_redirect/index.php/user/home");
        //window.location.href="http://127.0.0.1/simple_login_comp/index.php/user/members";
    }
    else if(data== 'sorry'){

        alert("sorry");
    }
    //else{
    //  alert(data);
    //}
}
    });
});
});