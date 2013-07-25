<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>User Add new Article Page</title>
    <body>
    <div class="container">
        <div class="content">
            <h1>Add Article Page</h1>

Welcome,
            <?php
            echo $email;
            ?>

            <form action="<?php echo base_url().'user/add_result'; ?>" method="post">
                Title <p><input type="text" name="title" placeholder="Input an article title"></p>
                Category<p><select name="category">
                    <?php foreach($categories as $category){ ?>
                        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                    <?php } ?>

                </select></p>
                Content<p><textarea name="content" cols="120" rows="20"></textarea></p>

                <input type="submit" value="Add"/>
            </form>
            <a href="<?php echo base_url().'user/home'; ?>">Home</a>
<a href="<?php echo base_url().'user/logout'; ?>">Log Out</a>
</div>
</div>
</body>
</head>
</html>