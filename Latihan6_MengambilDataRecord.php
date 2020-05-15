//MYSQL_FETCH_ARRAY() 
//Latihan6_MengambilDataRecord

<?php  
//buat koneksi dengan MySQL
$link = mysqli_connect("localhost","root","","lat_dbase");  
mysqli_select_db("lat_dbase"); 
//jalankan query 
$hasil=mysqli_query($link, "select * from tbl_mhs");  
//tampilkan query
While($data=mysqli_fetch_array($hasil))  
{   
    echo "$data[FirstName] $data[LastName] $data[Age]<br>";  
} 
?> 
