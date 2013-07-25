<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <body>
    <div class="container">
        <div class="content">
            <h1>Login Page</h1>
            <form action="<?php echo base_url().'user/login_validation'; ?>" method="post" autocomplete="off">
                <?php
                echo validation_errors();
                ?>
                Email:<input type="text" name="email" value="<?php echo $this->input->post('email') ;?>"/>
                Password:<input type="password" name="password"/>
                <input type="submit" value="Sign In"/>
            </form>
            <a href="<?php echo base_url().'user/sign_up'; ?>">Sign Up</a>

            <!-- <?php

            echo form_open('user/login_validation');

            echo validation_errors();

            echo "<p>Email:";
            echo form_input('email');
            echo "</p>";

            echo "<p>Password";
            echo form_password('password');
            echo "</p>";

            echo "<p>";
            echo form_submit('login_submit','Sign In');
            echo "</p>";

            echo form_close();

            ?> -->
            <p>Have a look first <a href="<?php echo base_url().'view/viewUser'; ?>">Go</a></p>

        </div>
    </div>
    </body>
</head>
</html>