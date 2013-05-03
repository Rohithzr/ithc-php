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
			echo '<div class="module green">
			<h2>' . $row['cat_name'] . '
			<a href="category.php?id='  . $row['cat_id']  .'">
			View Topics
			</a></h2>';
				echo'<ul>
				<li>'  . $row['cat_description'] . '</li>
					</ul>
			</div>';				

		}
	}
}
include 'footer.php';
?>