
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="none" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="admin login">
    <title>Ignisterra -
    <?php if ($titulo): ?>
      <?php echo $titulo.' '.urldecode($maquina); ?>
    <?php endif; ?>   </title>
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/tcg/voyager/assets/css/app.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/fontawesome-all.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css"/>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.timepicker.css'); ?>">
    <style>
        body {

            background-image:url(<?php base_url() ?>'assets/img/bg.jpg');
            background-color: #FFFFFF;
        }
        .login-sidebar{
            border-top:5px solid #22A7F0;
        }
        @media (max-width: 767px) {
            .login-sidebar {
                border-top:0px !important;
                border-left:5px solid #22A7F0;
            }
        }
        body.login .form-group-default.focused{
            border-color:#22A7F0;
        }
        .login-button, .bar:before, .bar:after{
            background:#22A7F0;
        }
    </style>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <!-- Javascript Libs -->


</head>
