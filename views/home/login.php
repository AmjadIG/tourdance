<DOCTYPE!>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Login</title>
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/materialize.css"/>
    </head>
    <body>
        <div>
            <?php include('template/header.php')?>
            <div class="container">
                <form method="post" action="loginResult">
                    <p>Username :<input type="text" name="username"/></p>
                    <p>Password :<input type="password" name="password"/></p>
                    <input type="submit" value="Login"/>
                </form>
                <a href="createAccount">Create account</a>
            </div>
            <?php include('template/footer.php')?>
        </div>
    </body>
</html>