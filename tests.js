
        $("document").ready(function(){
            $("#click").click(function(){
                $.post('tests2.php', {name:$("#hi").val(), password: $("#hi2").val()},function(data){
                    if(data == "success"){
                        window.location = "main.php"
                    }
                    else{
                        console.log("yay");
                        $("#err").css("display","initial");
                    }
                })
            });
        });
