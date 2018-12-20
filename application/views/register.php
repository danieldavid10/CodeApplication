<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CodeApp | Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Register</h1>
    <?php
        echo 
        form_open('register/create',array('method'=>'POST'));
            echo form_label('User name: ');
            echo form_input('username');
            echo "<br>";
            echo form_label('Email : ');
            echo form_input(array('type'=>'email','name'=>'email'));
            echo "<br>";
            echo form_label('Password : ');
            echo form_password('password');
            echo "<br>";
            echo form_label('Confirm Password : ');
            echo form_password('confirm_pass');
            echo "<br>";
            echo form_submit('submitRegister', 'Register');
            
        echo form_close();

    ?>


    
</body>
</html>