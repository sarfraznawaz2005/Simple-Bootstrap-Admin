<?php require_once 'includes/head.php' ?>
<body>
<?php require_once 'includes/nav.php' ?>

<div class="container-fluid main-container">
    <?php require_once 'includes/sidebar.php' ?>

    <div class="col-md-10 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <b class="fa fa-th-large"></b> Dashboard
            </div>
            <div class="panel-body animated fadeIn">
                <!-- page content -->
                <?php require_once 'pages/dashboard.php' ?>
            </div>
        </div>
    </div>

    <?php require_once 'includes/footer.php' ?>

</div>
</body>
</html>
