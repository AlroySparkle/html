<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="/html/sources/jquery.js"></script>
    <script src="/html/sources/jquery.session.js"></script>
    <script>
        $("document").ready(function(){
            $("#click").click(function(){
                $.post('tests2.php', {name:$("#hi").val(), password: $("#hi2").val()},function(data){
                    window.location= "tests2.php";
                })
            });
        });
    </script>
</head>
<body>
    <input type="text" id="hi">
    <input type="text" id="hi2">
    <button id="click">any</button>
    
</body>
</html>