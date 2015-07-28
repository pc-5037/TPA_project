

<form method="post" action="<?php echo base_url() . "index.php/set_role/setstanum"?>">
<label id="hide">Station ID :</label>
<input type="text" id="sid" name="sid"><br>
<input type="submit" id="submit" name="submit" value="Update">
</form>
<?php if(isset($_SESSION['station'])){echo $_SESSION['station'];} ?>

