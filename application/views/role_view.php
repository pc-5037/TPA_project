<?php $this->load->helper('url'); ?>
<html>
<head>
        <title>Login</title>
</head>
<body>
        <h1>Select Your Position</h1>
        <ul>
            <li><?php echo anchor('welcome/setAdmin', 'Admin'); ?></li>
            <li><?php echo anchor('welcome/setTick', 'Ticket Seller'); ?></li>
            <li><?php echo anchor('welcome/setStaff', 'Staff'); ?></li>
        </ul>

</body>
</html>
