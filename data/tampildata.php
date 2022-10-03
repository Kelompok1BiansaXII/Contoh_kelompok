<?php
include "koneksi.php";
$no = 1;
$query = mysqli_query($kon, 'SELECT * FROM table1 ORDER BY id ASC');                                
                            
$result = array(); 
while ($data = mysqli_fetch_array($query)) {
$result[] = $data;
}
foreach ($result as $value){                                
?>
<?php  echo $value['name']?>                
<?php  echo $value['kelas']?>               
<?php  echo $value['alamat']?>               
<?php } ?>


<!-- fungsi2 yang dibutuhkan
query
result
while
value
foreach
echo
 -->
