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
        <div class="center-align">
            <div class="card-panel blue-grey">
                <div class="white-text">
                    <h6>Who are you ?</h6>
                </div>
            </div>
        </div>
        <div class="col l4 m6 s12">
            <div class="card">
                <!--div class="card-image">
                    <img src="<?php echo base_url()?>assets/pictures/account/visitor.jpg">
                </div-->
                <div class="card-action">
                    <a href="createAccountVisitor">Visitor</a>
                </div>
            </div>
        </div>
        <div class="col l4 m6 s12">
            <div class="card">
                <!--div class="card-image">
                    <img src="<?php echo base_url()?>assets/pictures/account/dancer.jpg">
                </div-->
                <div class="card-action">
                    <a href="createAccountDancer">Dancer</a>
                </div>
            </div>
        </div>
        <div class="col l4 m12 s12">
            <div class="card">
                <!--div class="card-image">
                    <img src="<?php echo base_url()?>assets/pictures/account/school_agent.jpg">
                </div-->
                <div class="card-action">
                    <a href="createAccountSchoolAgent">School Agent</a>
                </div>
            </div>
        </div>
    </div>
    <?php include('template/footer.php')?>
</div>
</body>
</html>