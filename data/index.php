<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="style/css/bootstrap.css">
    <script src="style/js/bootstrap.js"></script>
    <title>beranda</title>
</head>
<body>
    <div class="container-fluid bg-secondary text-white" style="height: 20rem;">
        <div class="p-4">
            <h1>Menampilkan data</h1>
            <h6>Pada sebuah Table dengan Style</h6>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Menu</a>
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <a class="nav-link" href="#">Tambah Data</a>
                    <a class="nav-link" href="#">Edit Data</a>
                </div>
            </div>
        </div>
    </nav>
        <div class="container-fluid">
        <div class="p-4">
            <h3>Menampilkan data</h3>
            <h5>Dari Database</h5>
        </div>
        <div class="p-2">
            <div class="p-4">
                <div class="card">
                    <div class="card-body">
                        <?php
                        include "koneksi.php";
                        ?>
                        <!-- Table untuk menampilkan data -->
                        <table class="table table-responsive">
                            <!-- Header Table -->
                            <thead> 
                                <tr>
                                <th>Id Siswa</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Alamat</th>
                                </tr>
                            </thead>
                            <!-- Ending Header table -->
                            <!-- Script menampilkan data -->
                            <?php
                            include "koneksi.php";
                            $no = 1;
                            $query = mysqli_query($kon, 'SELECT * FROM table1 ORDER BY id ASC');                                
                                            //    table1 diganti dengan nama table yg telah dibuat
                            $result = array(); 
                            while ($data = mysqli_fetch_array($query)) {
                            $result[] = $data;
                            }
                            foreach ($result as $value){                                
                            ?>
                            <!-- data yang ditampilkan dalam table -->
                            <tbody>
                                <tr>
                                <td><?php echo $value['id']?></td>
                                <td><?php  echo $value['name']?></td>                
                                <td><?php  echo $value['kelas']?></td>                
                                <td><?php  echo $value['alamat']?></td>                
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- Ending table -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>