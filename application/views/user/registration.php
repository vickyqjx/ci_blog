<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registration Page</title>
    <body>
    <div class="container">
        <div class="content">
            <h1>Registration Page</h1>
            <form action="<?php echo base_url().'user/sign_up_validation'; ?>" method="post" autocomplete="off">
                <?php
                echo validation_errors();
                ?>
                Email:<input type="text" name="email" value="<?php echo $this->input->post('email') ;?>"/>
                Username:<input type="text" name="username"/>
                Password:<input type="password" name="password"/>
                Confirm Password:<input type="password" name="re_password"/>
                <input type="submit" value="Sign Up"/>
            </form>
            <a href="<?php echo base_url().'user/sign_in'; ?>">Back to sign in</a>
        </div>
    </div>
    </body>
</head>
</html>