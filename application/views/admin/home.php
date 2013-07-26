<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Home Page</title>
    <body>
    <div class="container">
        <div class="content">
            <h1>Admin Home Page</h1>
        <p>Hello, <?php echo $name; ?>!<a href="<?php echo base_url().'admin/logout'; ?>">Logout</a></p>
            <ul>
                <li><a href="<?php echo base_url().'admin/view_category'; ?>">Manage Blog Categories</a></li>
            </ul>
        </div>
    </div>
    </body>
</head>
</html>