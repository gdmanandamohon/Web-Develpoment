<?php include 'header.php';?>

<form method="POST" action="sliderconform.php" enctype="multipart/form-data" class='slider'>
	<table border=1px class="table">
	

		<tr>
			<td width="150">Title</td>
			<td width="300"><input type='text' name ='title'></input></td>

		</tr>
		<tr>
			<td>Album:</td>
			<td><input type='text' name ='album'></input></td>

		</tr>
		<tr>
			<td>Artist:</td>
			<td><input type='text' name = 'artist'></input></td>
		</tr>
		<tr>
			<td>Banner:</td>
			<td><input type='text' name = 'banner'></input></td>

		</tr>
		<tr>
			<td>Total Tracks:</td>
			<td><input type='text' name = 'numberoftrack'></input></td>

		</tr>
		<tr>
			<td>Type:</td>
			<td><input type='text' name = 'type'></input></td>

		</tr>
		<tr>
			<td>Bitrate:</td>
			<td><input type='text' name = 'bitrate'></input></td>

		</tr>
		<tr>
			<td>Download Link:</td>
			<td><input type='text' name = 'downloadlink'></input></td>

		</tr>
	</table>
	<input type='file' name = 'imagefile'></input></br></br>
	<input type='submit' value='Submit' id='submit_slider'>
</form>
<?php include 'footer.php';?>

