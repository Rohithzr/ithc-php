<?php
//category.php
include 'connect.php';
include 'header.php';
$sql = "SELECT
			cat_id,
			cat_name,
			cat_description
		FROM
			categories;";
$result = mysql_query($sql);

if(!$result)
{
	echo 'The category could not be displayed, please try again later.' . mysql_error();
}
else
{
	if(mysql_num_rows($result) == 0)
	{
		echo 'This category does not exist.';
	}
	else
	{
		//display category data
		while($row = mysql_fetch_assoc($result))
		{
			echo '<h2><a class="links" href="category.php?id='  . $row['cat_id']  .'">&prime;' . $row['cat_name'] . '&prime;</a> category</h2>';
			echo '<hr width=50% align="left">';
			echo '&Prime;'  . $row['cat_description'] . '&Prime; <br />';
			echo '<hr>';
		}
	}
}
include 'footer.php';
?>