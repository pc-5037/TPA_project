<html>
<head>
<title>My Form</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('add_attraction'); ?>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Add successfully</h3></CENTER><br>
<?php } ?>
<?php echo form_label('Attraction Name :'); ?> <?php echo form_error('name'); ?><br />
<?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?><br />

<?php echo form_label('Description :'); ?> <?php echo form_error('desc'); ?><br />
<?php echo form_input(array('id' => 'desc', 'name' => 'desc')); ?><br />

<?php echo form_label('Height Limit :'); ?> <?php echo form_error('hlimit'); ?><br />
<?php echo form_input(array('id' => 'hlimit', 'name' => 'hlimit')); ?><br />

<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>

</body>
</html>

