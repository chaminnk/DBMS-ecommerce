<?php
include('database.controller.php');
$sql="SELECT * FROM subcategory s JOIN category c ON s.cat_id=c.cat_id WHERE c.cat_name='electronics';";
$result=mysqli_query($db,$sql);
while($row = mysqli_fetch_assoc($result)){
	$subcat_array[]=$row;
 }
foreach($subcat_array as $subcat){
	$subcat_name=$subcat['subcat_name'];
	echo "<li><a href=\"#\">$subcat_name</a></li>";
}
?>