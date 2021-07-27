$("document").ready(function() {
    $("#login").click(function() {
        $.post('session.php', { name: $("#username").val(), password: $("#password").val() }, function(data) {
            if (data == "success") {
                window.location = "main.php"
            } else {
                $("#err").css("display", "initial");
            }
        })
    });
});