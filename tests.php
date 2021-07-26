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
    <script src="/html/tests.js"></script>
</head>
<body>
    <input type="text" id="hi">
    <input type="text" id="hi2">
    <div id = "err" style="color: red; display:none;">an error occur</div>
    <button id="click">any</button>
    
</body>
</html>