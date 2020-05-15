//MYSQL_FETCH_ROW() 
//Latihan5_Menampilkan Data

<?php  
//buat koneksi dengan MySQL
$link = mysqli_connect("localhost","root","","lat_dbase");  
// mysqli_select_db("lat_dbase");  
$hasil=mysqli_db_query($link, "SELECT * FROM tbl_mhs"); 
//Tampilkan Query 
While($data=mysqli_fetch_row($hasil))  
{    
    echo "$data[0] $data[1] $data[2]<br>";  
} 
?> 