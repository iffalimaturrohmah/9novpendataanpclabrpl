<html>
    <head>
</head>
<body>
    <h2>APLIKASI PENDATAAN PC LAB RPL</h2>
    <from action="proses-tambah.php" method="POST">
    <fieldset>
<P>
    <label for="no_seri">No seri:</label>
    <label type="number" name="no_seri">
</p>
<p>
    <label for="merek">Merek:</label>
    <input type="radio" name="merek" value="asus"/>Asus 
    <input type="radio" name="merek" value="lenovo"/>Lenovo 
    <input type="radio" name="merek" value="hp"/>Hp 
    <input type="radio" name="merek" value="acer"/>Acer 
</p>
<p>
    <label for="jumlah">Jumlah:</label>
    <input type="number" name="jumlah">
</p>
<p>
    <input type="submit" value="Kirim" name="tambah" />
</p>

</fieldset>
</body>
</html>

