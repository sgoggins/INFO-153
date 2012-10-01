<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
    $firstname='George';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="myresponse.php" method="post">
            <label>Firstname</label>
            <input type="text" name="firstname" value=<?php echo $firstname ?>><br>
            <input type="submit" value="Tell Me Your Name">
        </form>
              
    </body>
</html>
