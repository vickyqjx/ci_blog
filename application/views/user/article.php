<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>User Article Page</title>
    <body>
    <div class="container">
        <div class="content">
            <h1>User Article Page</h1>

            Welcome,
            <?php
            echo $email;
            ?>

            <a href="<?php echo base_url().'user/add_article'; ?>">Add a new article</a>

            <h4><?php echo $article->title; ?></h4>
            <a href="<?php echo base_url().'user/edit_article?id='.$article->id; ?>">Edit</a>
            <a href="<?php echo base_url().'user/delete_article?id='.$article->id; ?>">Delete</a>
            <p>--<?php echo $article->time; ?></p>
            <p><?php echo $article->category_name; ?></p>
            <p><?php echo $article->content; ?></p>

            <a href="<?php echo base_url().'user/home'; ?>">Home</a>
            <a href="<?php echo base_url().'user/logout'; ?>">Log Out</a>
        </div>
    </div>
    </body>
</head>
</html>