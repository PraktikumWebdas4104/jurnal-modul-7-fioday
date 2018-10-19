<?php 
include 'koneksi.php';
	session_start();

		$que = "SELECT * from data";
		$qry = mysqli_query($conn,$que);
		$row = mysqli_fetch_array($qry);

			echo "<table border='1'>
					<tr>
						<th>Nama</th>
						<th>Nim</th>
					</tr>";

					foreach($qry as $row){

			echo "<tr>
					<td>".$row['nama']."</td>
					<td>".$row['nim']."</td>
				</tr>";
			}
		
			//echo "<table>
					//<tr>
					//	<td><a herf='editprofil.php'>Edit</a></td>
					//	<td><a href='posting.php'>Posting</a></td>
					//	<td><a href='logout.php'>Logout</a></td>
					//</tr>
				//</table>";
	
 ?>