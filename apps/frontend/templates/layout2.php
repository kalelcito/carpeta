<!DOCTYPE html>
<html>
<head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <?php include_stylesheets() ?>
    <link rel="stylesheet" href="<?php echo public_path('plugins', array('absolute' => 'true')); ?>/iCheck/square/blue.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <?php include_javascripts() ?>
    <?php include_slot('js') ?>

</head>
<body class="hold-transition login-page">

<div class="login-box">
    <div class="login-logo">
        <b>Carpeta Virtual</b>
    </div>
    <?php echo $sf_content ?>
</div>
<script src="<?php echo public_path('plugins', array('absolute' => 'true')); ?>/iCheck/icheck.min.js"></script>
<script>
    $(document).ready(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>

</body>
</html>