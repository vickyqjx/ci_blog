<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Login Page</title>
    <body>
    <div class="container">
        <div class="content">
            <h1>Admin Login Page</h1>
            <form action="<?php echo base_url().'admin/login_validation'; ?>" method="post" autocomplete="off">
                <?php
                echo validation_errors();
                ?>
                Admin Name:<input type="text" name="name" value="<?php echo $this->input->post('usermane') ;?>"/>
                Password:<input type="password" name="password"/>
                <input type="submit" value="Sign In"/>
            </form>
        </div>
    </div>
    </body>
</head>
</html>