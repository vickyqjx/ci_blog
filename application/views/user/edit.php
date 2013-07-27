<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI Blog-User Edit</title>
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

                <h3>Edit article</h3>

                <form action="<?php echo base_url().'user/edit_result'; ?>" method="post">
                    <input type="hidden" name="article_id" value="<?php echo $article->id; ?>">
                    <input type="hidden" name="category_id" value="<?php echo $article->category_id; ?>">
                    <input type="hidden" name="article_category_id" value="<?php echo $article->article_category_id; ?>">
                    Title <p><input type="text" name="title" value="<?php echo $article->title; ?>"></p>
                    Category<p><select name="category">
                            <option value="" selected>----</option>
                            <?php foreach($categories as $category){ ?>
                                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                            <?php } ?>
                        </select></p>
                    Content<p><textarea name="content" style="width: 100%; height: 250px"><?php echo $article->content; ?></textarea></p>
                    <input class="btn btn-primary" type="submit" value="Save"/>
                    <a class="btn btn-info" href="<?php echo base_url().'user/article?id='.$article->id; ?>">Cancel</a>

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