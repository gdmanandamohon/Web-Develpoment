<?php 
include'header.php';?>
<div class='message_tbl_div'>

<table border=1px class="message_table">
		<th>Name</th>
		<th>Email</th>
		<th>Phone No</th>
		<th>Message</th>
		<th>Checked</th>
		
		<?php
		$Query="SELECT * FROM `tbl_messsgae` WHERE `isvisited`=0 ";
		$result =mysql_query($Query);
		while($row =mysql_fetch_array($result))
		{
			$id=$row['message_id'];
			echo "<tr>";
					echo "<td>".$row ['sender_name']."</td>";
					echo "<td>".$row ['sender_email']."</td>";
					echo "<td>".$row ['sender_phhno']."</td>";
					echo "<td>".$row ['sender_message']."</td>";
					//echo "<td><form action='' method='post'><input type='hidden' value ='$id' name='select_message_item'/><input type='submit' name='message_hidebutton' value='Hide'/><form></td>";
					echo"<td><a href=hidemessage.php?message_id=".$id.">Hide</a></td>";		
			echo "</tr>";
		}
		
		?>
		
	</table></div>
<?php include'footer.php';?>
