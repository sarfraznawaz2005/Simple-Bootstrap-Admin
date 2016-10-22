<?php require_once 'includes/head.php' ?>

<style>
    .panel {
        margin-top: 100px;
    }
</style>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="glyphicon glyphicon-lock"></i> Please Sign In
                </div>
                <div class="panel-body animated fadeIn">
                    <form role="form">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input required="required" autocomplete="off" class="form-control" placeholder="E-mail Address"
                                   name="email" type="email">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input required="required" autocomplete="off" class="form-control" placeholder="Password" name="password"
                                   type="password" value="">
                        </div>
                        <br>
                        <div class="checkbox3 checkbox-primary checkbox-inline checkbox-check checkbox-round">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Remember Me</label>
                        </div>
                        <br>
                        <div align="center">
                            <button style="margin-left: -1px;" class="btn btn-block btn-primary" type="submit">
                                <span class="glyphicon glyphicon-log-in"></span> Sign In
                            </button>

                            <br>
                            <a href="#">Forgot Password</a>
                        </div>
                    </form>

                </div>
            </div>
            <div class="well text-center">
                <strong><i class="fa fa-info-circle"></i> Don't have an account? <a href="#">Sign Up</a></strong>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery.js"></script>
<script src="css/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="js/app.js"></script>

</body>
</html>
