<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container bg-dark text-white">
    <div class="rows">
        <form action="reducingBalance.php" method="get">
            <h2><b><center> PERHITUNGAN DEPRESIASI REDUCING BALANCE </center></b></h2>
            <div class="form-group">
                <label>Harga Perolehan:</label>
                <input type="text" name="harga" class="form-control" value="" required>
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
                $umur=$_GET['umur'];
                $hasil = ($perolehan / $umur) * 2;
                $hasila = "Hasil depresiasi menggunakan metode Reducing Balance pada tahun pertama adalah " .number_format($hasil,0,',','.');
                echo "<h3>$hasila</h3>";
                for ($i=2; $i <= $umur; $i++) { 
                    $hasill = (($perolehan-$hasil) / $umur) * 2;
                    $hasilla = "Hasil depresiasi menggunakan metode Reducing Balance pada tahun ke " .$i. " adalah " .number_format($hasill,0,',','.');
                    echo "<h3>$hasilla</h3>";
                    $perolehan = $perolehan - $hasill;
                    $hasill = ($perolehan/$umur)*2;
                }
            }
        ?>
    </div>
</div>
</body>
</html>