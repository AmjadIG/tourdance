<DOCTYPE!>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Create New Account</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/materialize.css"/>
</head>
<body>
<div>
    <?php include('template/header.php')?>
    <div class="container">
        <form method="post" action="createAccountVisitorResult">
            <p>First Name :<input type="text" name="first_name"/></p>
            <p>Last Name :<input type="text" name="last_name"/></p>

            <p>Username :<input type="text" name="username"/></p>
            <p>Password :<input type="password" name="password1"/></p>
            <p>Enter the password again :<input type="password" name="password2"/></p>

            <p>Mail Address :<input type="email" name="mail_address"/></p>

            <input type="submit" value="Submit"/>
        </form>
    </div>
    <?php include('template/footer.php')?>
</div>
</body>
</html>