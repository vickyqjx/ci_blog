<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CI Blog</title>
    <body>
    <div class="container">
        <div class="content">
            <h1>CI Blog</h1>

            <p><a href="<?php echo base_url().'user/sign_up'; ?>">Sign Up</a></p>
            <p><a href="<?php echo base_url().'user/sign_in'; ?>">Sign in</a></p>

                <?php foreach($users as $user){ ?>
                    <li>
                        <a href="<?php echo base_url().'view/blog?username='.$user->username; ?>">
                            <?php echo $user->username; ?>
                        </a>
                    </li>
                <?php } ?>

            </ul>

        </div>
    </div>
    </body>
</head>
</html>