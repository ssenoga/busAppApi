<?php 
require '../settings/connect.config.php';
$sql = "SELECT * FROM company";
$q = $db->query($sql);

while($rows = $q->fetch_object()){
	$c_name = $rows->company_name;
	$id = $rows->company_id;
	$logo = $rows->company_logo;
	?>
	<div class="company_list">
			<img src="./img/d1.jpg" class="company_logo">
			<div class="info">
				<p class="company_info">
					<?php echo $c_name;?>
				</p>

				<div class="choose_company">
					<a href="./user_dest.php?id=<?php echo  $id;?>" class="btn">
						Choose This
					</a>
				</div>
			</div>
		</div>

	<?php
}

?>