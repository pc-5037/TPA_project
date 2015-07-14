<html>
<head>
<title>My Form</title>
</head>
<body>

<?php foreach ($an_attraction as $attraction): ?>
<p>Edit Detail & Click Update Button</p>
<form method="post" action="<?php echo base_url() . "index.php/edit_attraction/edit"?>">
<label id="hide">Id :</label>
<input type="text" id="hide" name="did" value="<?php echo $attraction->aid; ?>" readonly="readonly"><br>
<label>Name :</label>
<input type="text" name="dname" value="<?php echo $attraction->aname; ?>"><br>
<label>Description :</label>
<input type="text" name="desc" value="<?php echo $attraction->description; ?>"><br>
<input type="submit" id="submit" name="dsubmit" value="Update">
</form>
<?php endforeach; ?>

</body>
</html>
