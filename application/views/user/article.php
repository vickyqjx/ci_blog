<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI Blog-User Article</title>
    <link rel="stylesheet" href="<?php echo base_url().'css/bootstrap.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'css/bootstrap-responsive.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'css/ci_blog.css'; ?>">
    <style>
        body{
            background-image:url('<?php echo base_url().'img/background_user.png'; ?>') ;
            background-repeat: repeat ;
        }
    </style>
</head>

<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-th-list"></span>
            </a>
            <a href="<?php echo base_url().'user/home'; ?>" class="brand">CI Blog</a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li class="active">
                        <a href="<?php echo base_url().'user/home'; ?>"> <i class="icon-home"></i>
                            Home
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


</div>

<div class="wrapper">
    <div class="container">
        <div class="content">
            <div class="proper-content">
                <div class="text-right text-success">
                    Welcome,<?php echo $email;?>
                    <em><a href="<?php echo base_url().'user/logout'; ?>">Logout</a></em>
                </div>

                <a href="<?php echo base_url().'user/add_article'; ?>">Add a new article</a>

                <h3><?php echo $article->title; ?></h3>
                --<?php echo $article->category_name; ?>
                <p class="muted"><small>--<?php echo $article->time; ?></small></p>

                <p class="text-right">
                    <a href="<?php echo base_url().'user/edit_article?id='.$article->id; ?>">Edit</a>
                    <a href="<?php echo base_url().'user/delete_article?id='.$article->id; ?>">Delete</a>
                </p>

                <p><?php echo $article->content; ?></p>

                <a href="<?php echo base_url().'user/home'; ?>">Back to home</a>

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