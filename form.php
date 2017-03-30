<!DOCTYPE html>
<html>

<head>
    <title>Fun Form</title>
    <style>
        body{background-color:#C0C0C0;}
        form {width: 300px; margin: auto; padding-top: 100px;}        
        input {padding: 8px 3px; width: 100%; }        
        #button {width: 70%; margin-left:60px; background-color:#808080;}
    </style>
</head>

<body>
    <?php
        if (isset($_POST['submit'])) {
            echo 'My name is '.htmlspecialchars($_POST['name']).'ðŸ˜‹ðŸ˜˜ðŸ˜Š'.'.'.'<br>';
            echo 'I am '.(int)$_POST['age'].' years old.'.'<br>';
            echo 'I live in '.htmlspecialchars($_POST['city']).'.';
        }
    ?>
    <form method="post">
        <input type="text" name="name" placeholder="name" required><br><br>
        <input type="text" name="age" placeholder="age" required><br><br>
        <input type="text" name="city" placeholder="city" required><br><br>
        <input type="submit" name="submit" id="button" value="submit">
    </form>
    
</body>
</html>
