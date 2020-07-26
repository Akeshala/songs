<?php
$connect = mysqli_connect("localhost", "root", "", "song details");
$output = '';
$search = '';

if (isset($_POST["query"])) {

	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM details
	WHERE  confirmed NOT IN ('unconfirmed') AND (songname LIKE '%" . $search . "%'
	OR artist LIKE '%" . $search . "%' 
	OR lyricist LIKE '%" . $search . "%' 
	OR composer LIKE '%" . $search . "%' 
	OR album LIKE '%" . $search . "%' 
	OR musician LIKE '%" . $search . "%')
	 LIMIT 6";
} else {
	$query = "
	SELECT * FROM userall ORDER BY id";
}
$result = mysqli_query($connect, $query);

if ($search != '') {

	if (mysqli_num_rows($result) > 0) {
		$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th><p style="color:white">Page</p></th>
							<th><p style="color:white">Song name</p></th>
							<th><p style="color:white">Artist</p></th>
							<th><p style="color:white">Lyricist</p></th>
							<th><p style="color:white">Composer</p></th>
							<th><p style="color:white">Album</p></th>
						</tr>';
		while ($row = mysqli_fetch_array($result)) {
			$output .= '
			<tr>
				<td><form method="POST" action="show-song-session.php"><button class="btn btn-success" name="view" type="submit">View</button>
				<input type="hidden" value="'. $row["id"] .'" name="id"></form></td>
				<td><p style="color:white">' . $row["songname"] . '</p></td>
				<td><p style="color:white">' . $row["artist"] . '</p></td>
				<td><p style="color:white">' . $row["lyricist"] . '</p></td>
				<td><p style="color:white">' . $row["composer"] . '</p></td>
				<td><p style="color:white">' . $row["album"] . '</p></td>
				</a>
			</tr>
		';
		}
		echo $output;
	} else {
		echo '<p style="color:white">Song not available or invalid input.</p>';
	}
}
