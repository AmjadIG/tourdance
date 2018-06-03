<DOCTYPE! >
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Dancers</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/materialize.css"/>
</head>
<body>
    <?php include 'template/header.php' ?>
        <div class="container">
            <h4>List of dancers</h4>
            <ul class="collection">
                <?php foreach($dancer as $item) { ?>
                    <li><a class="collection-item"><?php echo $item->stageNameDancer; ?></a></li>
                <?php } ?>
            </ul>
            <!--p><a href="add_dancer">Add Dancer</a></p-->
        </div>
    <?php include 'template/footer.php' ?>
</body>
</html>