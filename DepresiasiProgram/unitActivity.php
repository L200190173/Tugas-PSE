<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container bg-dark text-white">
    <div class="rows">
        <form action="unitActivity.php" method="get">
            <h2><b><center> PERHITUNGAN DEPRESIASI UNIT OF ACTIVITY</center></b></h2>
            <div class="form-group">
                <label>Harga Perolehan:</label>
                <input type="text" name="harga" class="form-control" value="" required>
            </div>
            <div class="form-group">
                <label>Nilai Residu:</label>
                <input type="text" name="residu" class="form-control" value=""  required>
            </div>
                <label>Pemakaian:</label>
                <input type="text" name="pemakaian" class="form-control" value=""  required>
            </div>
            <div class="form-group">
                <label>Kapasitas Maksimal:</label>
                <input type="text" name="kapasitas_max" class="form-control" value=""  required>
            </div>
            
            <button type="button" class="btn btn-white" onclick="location.href='index.php'">Back</button>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>
        <br>
        <?php
        if (isset($_GET['harga'])) {
            $perolehan=$_GET['harga'];
            $residu=$_GET['residu'];
            $pemakaian=$_GET['pemakaian'];
            $kapasitas_max=$_GET['kapasitas_max'];
            $hasil=0;
                    $hasil = ($perolehan - $residu) * ($pemakaian / $kapasitas_max);
        }
            if (isset($_GET['harga'])) {
                $hasil = "Hasil depresiasi menggunakan metode Unit of Activity adalah " .number_format($hasil,0,',','.');
                echo "<h5>$hasil</h5>" ;
            }
        ?>
    </div>
</div>
</body>
</html>