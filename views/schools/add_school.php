<DOCTYPE! >
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Add School</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/materialize.css"/>
</head>
<body>
<?php include 'template/header.php' ?>
<div class="container">
    <form method="post" action="addSchoolList"> <!-- have to add this function to the controller-->
        <p>Add a school :</p>
        <p>School name :<input type="text" name="school_name"/></p>
        <p>City :<input type="text" name="school_city"/></p>
        <p>Address :<input type="text" name="school_address"/></p>
        <input type="submit" value="Submit"/>
    </form>
</div>
<?php include 'template/footer.php' ?>
</body>
</html>