<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>User Home Page</title>
    <body>
    <div class="container">
        <div class="content">
            <h1>User Home Page</h1>

            Welcome,
            <?php
            echo $email;
            ?>

            <a href="<?php echo base_url().'user/add_article'; ?>">Add a new article</a>

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

            <a href="<?php echo base_url().'user/logout'; ?>">Log Out</a>
        </div>
    </div>
    </body>
</head>
</html>