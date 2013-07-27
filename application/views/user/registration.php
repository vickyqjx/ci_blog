<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI Blog-User Registration</title>
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
            <a href="<?php echo base_url().'user'; ?>" class="brand">CI Blog</a>
        </div>
    </div>
</div>

<div class="wrapper">
    <div class="container">
        <div class="content">
            <div class="proper-content">
                <form class="form" action="<?php echo base_url().'user/sign_up_validation'; ?>"
                      method="post" autocomplete="off">
                    <legend>Registration</legend>
                    <div class="text-error"><small><?php echo validation_errors();?></small></div>
                    <label>Email</label>
                    <input type="text" class="input-block-level" name="email"
                           value="<?php echo $this->input->post('email') ;?>"/>
                    <label>Username</label>
                    <input type="text" class="input-block-level" name="username"/>
                    <label>Password</label>
                    <input type="password" class="input-block-level" name="password"/>
                    <label>Confirm Password</label>
                    <input type="password" class="input-block-level" name="re_password"/>
                    <p class="text-right">
                        <input type="submit" class="btn btn-primary" value="Sign Up"/>
                        <a href="<?php echo base_url().'user/sign_in'; ?>">Sign in</a>
                    </p>
                    <p class="text-right">
                        <small>
                            Just have a look?
                            <a href="<?php echo base_url().'view/viewUser'; ?>">Go</a>
                        </small>
                    </p>

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