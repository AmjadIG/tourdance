<DOCTYPE!>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Events</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/materialize.css"/>
</head>
<body>
    <?php include('template/header.php'); ?>
    <div class="row container">
        <div class="col s6 m6 l6">
            <div class="card">
                <div class="card-image">
                    <img src="<?php echo base_url()?>assets/pictures/tournaments.jpg">
                    <span class="card-title">Tournaments</span>
                </div>
                <div class="card-content">
                    <p>Want to battle with beginners, rookies, or pros? Want to hit the scene with your moves?
                    Or maybe you just want to see which tournaments takes place now? Click in the link below.
                    You can also make a reservation or subscribe to participate in a tournament.</p>
                </div>
                <div class="card-action">
                    <a href="tournaments">See all the tournaments</a>
                </div>
            </div>
        </div>
        <div class="col s6 m6 l6">
            <div class="card">
                <div class="card-image">
                    <img src="<?php echo base_url()?>assets/pictures/shows.jpg">
                    <span class="card-title">Shows</span>
                </div>
                <div class="card-content">
                    <p>In this section, you will find all the shows recently added, incoming, or the past shows.
                    If you want more information, click in the link below. You can also make reservations.</p>
                </div>
                <div class="card-action">
                    <a href="shows">See all the shows</a>
                </div>
            </div>
        </div>
    </div>



    <?php include('template/footer.php'); ?>
</body>
</html>