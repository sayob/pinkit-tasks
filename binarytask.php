<!DOCTYPE html>
<html>
<head>
<title>Binary Task</title>
<style>
        body{background-color:#C0C0C0;}
        form {width: 300px; margin: auto; padding-top: 100px;}        
        input {padding: 8px 3px; width: 100%; }      
        #button {width: 70%; margin-left:60px; background-color:#808080;}
</style>
</head>

<body>
<?php 
//Converting Decimal to Binary
    function convert_decimal($dec){
        $binary;
        while($dec >= 1){
            $rem = $dec % 2;
            $dec /= 2;
            $binary = $rem.$binary;
        }
        if($binary == null){
            $binary = 0;
        }
        return $binary;
    }
?>

<form method="post">
    <input type="number" name="num" placeholder="enter the number" required><br><br>
    <input value="<?php $dec = 0;
        if(isset($_POST['submit'])) {
            $dec = $_POST['num'];
            echo convert_decimal($dec);}?>" readonly><br><br>
    <input type="submit" name="submit" id="button" value="submit">
</form>

</body>
</html>
