$(document).ready(function () {
    $("#exampleInputUsername1").keyup(function () { 
        var user = $(this).val();
        $.post("Ajax/checkUsername",{un:user},function(data){
            $("#check").html(data);
        });
    });
    alert("this is notifi");
});