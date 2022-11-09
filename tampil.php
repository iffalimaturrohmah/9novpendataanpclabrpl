<?php
include("koneksi.php");
?>

<html>
    <head>
</head>
<body>
    <h1>PENDATAAN PC LAB RPL</h1>

    <table border="1">
        <tr>
            <th>No Seri</th>
            <th>Merek</th>
            <th>Jumlah</th>
</tr> 

<?php
include("koneksi.php");
 $sql= "SELECT * FROM tb_pendataan";
$query= mysqli_query($koneksi,$sql);

while($pendataan=mysqli_fetch_array($query)){
            echo "<tr>";
            echo "td>" .$pendataan['no_seri']."</td>";
            echo "td>" .$pendataan['merek']."</td>";
            echo "td>" .$pendataan['jumlah']."</td>";
            echo"</tr>";


        }
        ?>
        </table>
    </body>
    </html>


