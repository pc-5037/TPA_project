<html>
<head>
<title>My Form</title>
</head>
<body>

<?php foreach ($a_guest as $guest): ?>
<p>Edit Detail & Click Update Button</p>
<form method="post" action="<?php echo base_url() . "index.php/edit_guest/edit"?>">
<label id="hide">Id :</label>
<input type="text" id="hide" name="gid" value="<?php echo $guest->gid; ?>" readonly="readonly"><br>
<label>Name :</label>
<input type="text" name="gname" value="<?php echo $guest->gname; ?>"><br>
<label>Description :</label>
<input type="email" name="gmail" value="<?php echo $guest->gmai; ?>"><br>
<label>Height Limit :</label>
<input type="tel" name="gtel" value="<?php echo $guest->gtel; ?>"><br>
<input type="submit" id="submit" name="dsubmit" value="Update">
</form>
<?php endforeach; ?>

</body>
</html>
