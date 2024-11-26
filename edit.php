<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit data</title>
</head>
<body>
    <h2>EDIT DATA BUKU<h2>
    <?php 
    include 'koneksi.php';
    $id = $_GET['id'];
    $data1 = mysqli_query($koneksi,"SELECT * FROM perpusku WHERE id ='$id' ");
    while($d = mysqli_fetch_array($data1)){
    ?>
    <form method="post" action="update.php">
	<table>
		<tr>			
			<td>peminjam</td>
			<td>
				<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
				<input type="text" name="peminjam" value="<?php echo $d['peminjam']; ?>">
			</td>
		</tr>
		<tr>
			<td>judul</td>
			<td><input type="text" name="judul" value="<?php echo $d['judul']; ?>"></td>
		</tr>
		<tr>
			<td>genre</td>
			<td><input type="text" name="genre" value="<?php echo $d['genre']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="SIMPAN"></td>
		</tr>		
	</table>
</form>
<?php
    }
    ?>
</body>
</html> 