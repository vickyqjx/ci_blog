<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CI Blog</title>
    <body>
    <div class="container">
        <div class="content">
            <a href="<?php echo base_url().'view/viewUser'; ?>">CI Blog Home</a>
            <p><a href="<?php echo base_url().'user/sign_up'; ?>">Sign Up</a></p>
            <p><a href="<?php echo base_url().'user/sign_in'; ?>">Sign in</a></p>
            <h1><?php echo $user->username; ?>'s CI Blog</h1>

            <?php foreach($articles as $article){ ?>
                <p><h4><?php echo $article->title; ?></h4></p>
                <p>--<?php echo $article->time; ?></p>
                <p><?php echo $article->content; ?></p>
                </br></br></br>
            <?php } ?>

        </div>
    </div>
    </body>
</head>
</html>