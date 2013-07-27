<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI Blog</title>
    <link rel="stylesheet" href="<?php echo base_url().'css/bootstrap.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'css/bootstrap-responsive.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'css/ci_blog.css'; ?>">
    <style>
        body{
            background-image:url('<?php echo base_url().'img/background_blog.png'; ?>') ;
            background-repeat: repeat ;
        }
    </style>
</head>

<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a href="<?php echo base_url().'user/sign_in'; ?>" class="brand">CI Blog</a>
        </div>
    </div>
</div>

<div class="wrapper">
    <div class="container">
        <div class="content">
            <div class="proper-content">



                    <a href="<?php echo base_url().'view/viewUser'; ?>">CI Blog Home</a>
                    <div class="text-warning">
                    <h1><?php echo $user->username; ?>'s CI Blog</h1>
                    </div>

                <div class="text-info">
                    <?php foreach($articles as $article){ ?>
                        <div class="text-success"><h4><?php echo $article->title; ?></h4></div>
                        <p><?php echo $article->content; ?></p>
                        <div class="muted pull-right">--<?php echo $article->time; ?></div>
                        </br></br></br>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
    <div class="push"></div>
</div>

<div class="modal-footer footer-wrapper">
    <p class="muted text-center">
        Copyright @ 2013 VickyQiu
        <a href="<?php echo base_url().'admin/login'; ?>">Admin</a>
    </p>
</div>