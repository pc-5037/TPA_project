<?php echo form_open('add_guest'); ?>
<h1>Register Guest</h1><hr/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<?php $guid = $uid->uid; ?>
<?php echo form_label('UID :'); ?><br />
<?php echo form_input(array('id' => 'uid', 'name' => 'uid', 'value' => $guid)); ?><br />

<?php echo form_label('Guest Name :'); ?> <?php echo form_error('gname'); ?><br />
<?php echo form_input(array('id' => 'gname', 'name' => 'gname')); ?><br />

<?php echo form_label('Guest Email :'); ?> <?php echo form_error('gemail'); ?><br />
<?php echo form_input(array('id' => 'gemail', 'name' => 'gemail')); ?><br />

<?php echo form_label('Guest Mobile No. :'); ?> <?php echo form_error('gmobile'); ?><br />
<?php echo form_input(array('id' => 'gmobile', 'name' => 'gmobile', 'placeholder' => '10 Digit Mobile No.')); ?><br />

<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>

