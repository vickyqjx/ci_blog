<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI Blog-User Home</title>
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
        <a href="#" class="brand">CI Blog</a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li class="active">
                        <a href="#"> <i class="icon-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'view/blog?username='.$username; ?>" target="_blank">
                            <i class="icon-book"></i>
                            Blog
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
                <div>
                    <small><p class="muted text-right">Your blog's public page
                            <a href="<?php echo base_url().'view/blog?username='.$username; ?>" target="_blank">
                            <?php echo base_url().'view/blog?username='.$username; ?>
                        </a></small>
                    </p>
                </div>

                <div class="push"></div>

                <p><a href="<?php echo base_url().'user/add_article'; ?>">Add a new article</a></p>

                <form action="<?php echo base_url().'user/home'; ?>" method="POST">
                    View by category<select name="category_id">
                        <option value="0" selected>All</option>
                        <?php foreach($categories as $category){ ?>
                            <option
                                <?php if($selected_category==$category->id) echo("selected");?>
                                value="<?php echo $category->id; ?>"><?php echo $category->name; ?>
                            </option>
                        <?php } ?>
                    </select>
                    <input type="submit" value="go"/>
                </form>

                <ul>

                    <?php foreach($articles as $article){ ?>
                        <li>
                            <?php echo $article->title; ?>
                            <a href="<?php echo base_url().'user/article?id='.$article->id; ?>">View</a>
                            <a href="<?php echo base_url().'user/edit_article?id='.$article->id; ?>">Edit</a>
                            <a href="<?php echo base_url().'user/delete_article?id='.$article->id; ?>">Delete</a>
                        </li>
                    <?php } ?>

                </ul>

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