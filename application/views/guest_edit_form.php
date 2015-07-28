<html>
<head>
<title>My Form</title>
</head>
<body>

<?php foreach ($a_guest as $guest): ?>
<p>Edit Detail & Click Update Button</p>
<form method="post" action="<?php echo base_url() . "index.php/edit_guest/edit"?>">
<label id="hide">ID :</label>
<input type="text" id="hide" name="gid" value="<?php echo $guest->gid; ?>" readonly="readonly"><br>
<label id="hide">UID :</label>
<input type="text" id="hide" name="guid" value="<?php echo $guest->guid; ?>" readonly="readonly"><br>
<label>Name :</label>
<input type="text" name="gname" value="<?php echo $guest->gname; ?>"><br>
<label>Email :</label>
<input type="email" name="gmail" value="<?php echo $guest->gmail; ?>"><br>
<label>Mobile No. :</label>
<input type="tel" name="gtel" value="<?php echo $guest->gtel; ?>"><br>
<input type="submit" id="submit" name="dsubmit" value="Update">
</form>
<?php endforeach; ?>

</body>
</html>
