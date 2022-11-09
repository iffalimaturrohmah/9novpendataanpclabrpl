<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:tampil.php?");
}
$kode=$_GET['id'];
$sql="SELECT * FROM tb_[endataan WHERE id=$kode";
$query=mysqli_query($koneksi,$sql);
$pendataa=mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)<1){
    die ("Data Tidak Ditemukan");
}
?>

<html>
    <head>
</head>
<body>
    <h3>APLIKASI PENDATAAN PC LAB RPL</h3>
    <from action="prosesedit.php" method="POST">
    <fieldset>
        <input type="hidden" name="id" value=" <?php echo $pendataan['id'] ?>" />
    <p>
        <label for="No_Seri">No Seri :</label>
        <input type="number" name="No_Seri" value="<?php echo $pendataan['No_Seri'] ?>"/>
    </p>
    <p>
        <label for="Merek">Merek :</label>
        <label> <radio name ="merek" value=" <?php echo $pendataan['Merek']?>"/><</label>
        <input type="radio" name="Merek" value="Asus"/> Asus
        <input type="radio" name="Merek" value="Lenovo"/> Lenovo
        <input type="radio" name="Merek" value="Hp"/> Hp
        <input type="radio" name="Merek" value="Acer"/> Acer
    </P>
    <P>
        <label for="Jumlah">Jumlah :</label>
        <input type="number" name="Jumlah"value="<?php echo $pendatan['Jumlah']?>"/>
    </p>
    <p>
        <input type="submit" value="Kirim" name="tambah"/>
    </p>

</fieldset>
</body>
<html>