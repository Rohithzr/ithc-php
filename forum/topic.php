<?php
//topic.php
include 'connect.php';
include 'header.php';

$sql = "SELECT topics . * , users . * 
		FROM topics
		INNER JOIN users ON topic_by = user_id
		WHERE topic_id = " . mysql_real_escape_string($_GET['id']);
			
$result = mysql_query($sql);

if(!$result)
{
	echo 'The topic could not be displayed, please try again later.';
}
else
{
	if(mysql_num_rows($result) == 0)
	{
		echo 'This topic doesn&prime;t exist.';
	}
	else
	{
		while($row = mysql_fetch_assoc($result))
		{
		
		/*	echo'<div><div class="arrow_box">
			User : '. $row['user_name'].'<br />';
			if($row['user_per']==12){
			echo 'Email ID : '. $row['user_email'].'<br />';
			}
			else{
			echo'Email ID : Hidden';	
			}
			echo 'Level : '. $row['user_level'].'<br />
			      Posted on : '. $row['topic_date'].'<br />
			
			
			*/
			echo'<div class="module red">
			<h2>' . $row['user_name'] . '&nbsp;&nbsp;<tt>Posted:</tt>
			<a href="#">
			Visit Profile
			</a></h2>';
			echo'<ul>
				<li>'  . $row['topic_subject'] . '</li>
				<li><nav id="date">Posted on : '  . $row['topic_date'] . '</nav></li>
					</ul>
			</div>Comments :<br />';
			
			$posts_sql = "SELECT 
			posts.post_topic, 
			posts.post_content, 
			posts.post_date, 
			posts.post_by, 
			users.user_id, 
			users.user_name, 
			users.user_level
				FROM posts
				LEFT JOIN users ON posts.post_by = users.user_id
				WHERE posts.post_topic = " . mysql_real_escape_string($_GET['id']);
						
			$posts_result = mysql_query($posts_sql);
			
			if(!$posts_result)
			{
				echo 'The posts could not be displayed, please try again later.';
			}
			else
			{
			
				while($posts_row = mysql_fetch_assoc($posts_result))
			{
				
				echo'<div class="module red">
				<ul>
				<li><b>' . $posts_row['user_name'] . '</b>&nbsp;&nbsp;<tt>says :</tt></li>
				<li>' . $posts_row['post_content'] . '</li>
				<li><nav id="date">Posted on : '  . $posts_row['post_date'] . '</nav></li>
				</div>';
				/*echo '<tr class="topic-post">
							<td class="user-post">' . $posts_row['user_name'] . '<br/>' . date('d-m-Y H:i', strtotime($posts_row['post_date'])) . '</td>
							<td class="post-content">' . htmlentities(stripslashes($posts_row['post_content'])) . '</td>
						  </tr>';*/
				}
			}
		}
	}
}
			
			
			/*<div class="note rounded">
			<u>' . $row['user_name'] . '</u><br />
			' . $row['topic_subject'] . '
			</div>';*/
			
			/*
			//display post data
			echo '<table class="topic" border="1">
					<tr>
						<th colspan="2">' . $row['topic_subject'] . '</th>
					</tr>';
		
			//fetch the posts from the database
			$posts_sql = "SELECT
						posts.post_topic,
						posts.post_content,
						posts.post_date,
						posts.post_by,
						users.user_id,
						users.user_name
					FROM
						posts
					LEFT JOIN
						users
					ON
						posts.post_by = users.user_id
					WHERE
						posts.post_topic = " . mysql_real_escape_string($_GET['id']);
						
			$posts_result = mysql_query($posts_sql);
			
			if(!$posts_result)
			{
				echo '<tr><td>The posts could not be displayed, please try again later.</tr></td></table>';
			}
			else
			{
			
				while($posts_row = mysql_fetch_assoc($posts_result))
				{
					echo '<tr class="topic-post">
							<td class="user-post">' . $posts_row['user_name'] . '<br/>' . date('d-m-Y H:i', strtotime($posts_row['post_date'])) . '</td>
							<td class="post-content">' . htmlentities(stripslashes($posts_row['post_content'])) . '</td>
						  </tr>';
				}
			}
			*/
			if(!$_SESSION['signed_in'])
			{
				echo 'You must be <a href="signin.php">signed in</a> to reply. You can also <a href="signup.php">sign up</a> for an account.';
			}
			else
			{
				//show reply box
				echo '<form method="post" class="replyform" action="reply.php?id=' . $row['topic_id'] . '">
						<label for="reply-content">Your Reply</label>
						<textarea name="reply-content"></textarea>
						<input type="submit" value="Post" class="button2" />
					</form>';
			}
			
			//finish the table
		
	


include 'footer.php';
?>