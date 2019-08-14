
<?php
require '../settings/connect.config.php';

$sq = "SELECT * FROM locations";
$q = $db->query($sq);
?>
<select name="where_to" class="form-input">
	<option>Where To?</option>
	<?php

while ($rows = $q->fetch_object()) {
	$name = $rows->l_name;
	$region = $rows->l_region;
	?>
	<option value="<?php echo $name.' '.$region ?>"><?php echo $name .' '.$region?></option>
	<?php
}
?>
</select>