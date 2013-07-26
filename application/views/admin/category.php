<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Mange Category Page</title>
    <body>
    <div class="container">
        <div class="content">
            <p>Hello, <?php echo $name; ?>!<a href="<?php echo base_url().'admin/logout'; ?>">Logout</a></p>
            <a href="<?php echo base_url().'admin/home'; ?>">Back</a>
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
                <input type="submit" value="Add"/>
            </form>
        </div>
    </div>
    </body>
</head>
</html>