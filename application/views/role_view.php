<?php $this->load->helper('url'); ?>
<html>
<head>
        <title>Login</title>
</head>
<body>
        <h1>Select Your Position</h1>
        <ul>
            <li><?php echo anchor('set_role/setadmin', 'Admin'); ?></li>
            <li><?php echo anchor('set_role/settick', 'Ticket Seller'); ?></li>
            <li><?php echo anchor('set_role/setstaff', 'Staff'); ?></li>
            <li><?php echo anchor('set_role/station', 'Station'); ?></li>
        </ul>

</body>
</html>
