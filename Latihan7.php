//MYSQL_NUM_ROWS()
//Latihan 7

<?php
	$koneksi=mysqli_connect("localhost","root","","lat_dbase");
	if (mysqli_connect_errno())
  	{
  		echo "Koneksi database gagal : ".mysqli_connect_error();
  	}  	
  	$sql = "SELECT * FROM tbl_mhs";
	if ($hasil=mysqli_query($koneksi,$sql))
	{
		$hit=mysqli_num_rows($hasil);
		echo "Jumlah Record $hit";
	}
	mysqli_close($koneksi);
?>