
<?php
require '../settings/connect.config.php';

$sq = "SELECT * FROM locations";
$q = $db->query($sq);
?>
<select name="where_from" class="form-input">
	<option>Where Are You?</option>
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