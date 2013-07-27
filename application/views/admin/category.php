<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI Blog-Admin Home</title>
    <link rel="stylesheet" href="<?php echo base_url().'css/bootstrap.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'css/bootstrap-responsive.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'css/ci_blog.css'; ?>">
    <style>
        body{
            background-image:url('<?php echo base_url().'img/background_admin.png'; ?>') ;
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

                <div class="text-right">
                    Hello, <?php echo $name; ?>!
                    <a href="<?php echo base_url().'admin/logout'; ?>"><em>Logout</em></a>
                </div>

                <h1>Admin Home Page</h1>
                <div class="push"></div>

                <ol>
                    <?php foreach($categories as $category){ ?>
                        <li><?php echo $category->name; ?></li>
                    <?php } ?>
                </ol>

                <form action="<?php echo base_url().'admin/add_category'; ?>" method="post" autocomplete="off">
                    <?php
                    echo validation_errors();
                    ?>
                    <p>Add a new category:</p>
                    <input type="text" name="category_name" value="<?php echo $this->input->post('category_name') ?>"/>

                    <input class="btn btn-primary" type="submit" value="Add"/>
                    <a class="btn btn-info" href="<?php echo base_url().'admin/home'; ?>">Cancel</a>
                </form>

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

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="<?php echo base_url().'js/bootstrap.js'; ?>"></script>
</body>
</html>
