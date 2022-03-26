<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> PHP variables</title>
</head>
<body> 

    <form method="GET">
        <input type=" text" name="person">
        <button>SUBMIT</button>
    </form>

    <?php

   $name = $_GET['person'];
   echo $name. " is the one who works for IT company";

    ?>
    
</body>
</html>