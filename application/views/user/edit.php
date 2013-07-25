<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>User Edit Article Page</title>
    <body>
    <div class="container">
        <div class="content">
            <h1>User Edit Article Page</h1>

            Welcome,
            <?php
            echo $email;
            ?>

            <form action="<?php echo base_url().'user/edit_result'; ?>" method="post">
                <input type="hidden" name="article_id" value="<?php echo $article->id; ?>">
                <input type="hidden" name="category_id" value="<?php echo $article->category_id; ?>">
                <input type="hidden" name="article_category_id" value="<?php echo $article->article_category_id; ?>">
                Title <p><input type="text" name="title" value="<?php echo $article->title; ?>"></p>
                Category<p><select name="category">
<<<<<<< HEAD
                        <option value="" selected>----</option>
=======
>>>>>>> f9932718fa49ed66a4a84c47fd0d5f02af2a7863
                        <?php foreach($categories as $category){ ?>
                            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                        <?php } ?>
                    </select></p>
                Content<p><textarea name="content" cols="120" rows="20"><?php echo $article->content; ?></textarea></p>

                <input type="submit" value="Save Change"/>
            </form>

            <a href="<?php echo base_url().'user/article?id='.$article->id; ?>">Back</a>

            <a href="<?php echo base_url().'user/home'; ?>">Home</a>
            <a href="<?php echo base_url().'user/logout'; ?>">Log Out</a>
        </div>
    </div>
    </body>
</head>
</html>