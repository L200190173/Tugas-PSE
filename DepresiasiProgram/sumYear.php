<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container bg-dark text-white">
    <div class="rows">
        <form action="sumYear.php" method="get">
            <h2><b><center> PERHITUNGAN DEPRESIASI SUM OF THE YEAR</center></b></h2>
            <div class="form-group">
                <label>Harga Perolehan:</label>
                <input type="text" name="harga" class="form-control" value="" required>
            </div>
            <div class="form-group">
                <label>Nilai Residu:</label>
                <input type="text" name="residu" class="form-control" value=""  required>
            </div>
            <div class="form-group">
                <label>Umur Ekonomis (Tahun):</label>
                <input type="text" name="umur" class="form-control" value=""  required>
            </div>
            
            <button type="button" class="btn btn-white" onclick="location.href='index.php'">Back</button>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>
        <br>
        <?php
        if (isset($_GET['harga'])) {
            $perolehan=$_GET['harga'];
            $residu=$_GET['residu'];
            $umur=$_GET['umur'];
            $jml_umur = 0;
            for ($i=1; $i<=$umur ; $i++) { 
                $jml_umur = $jml_umur + $i;
            }
            $hasil = ($perolehan - $residu) * $umur / $jml_umur;    
        }
        if (isset($_GET['harga'])) {
            $hasil = "Hasil depresiasi menggunakan metode Sum of The Year pada tahun ke-" . $umur . " adalah " .number_format($hasil,0,',',);
            echo "<h5>$hasil</h5>" ;
        }
        ?>
    </div>
</div>
</body>
</html>