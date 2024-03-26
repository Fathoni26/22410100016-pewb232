<html>
<head>
<a href="Tugas11.php" target="_self"><td><input type="button" name="+" value="+"></td></a>
    <title>HTMLku</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        td input[type="button"] {
            padding: 5px 10px;
            background-color: #f2f2f2;
            color: black;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        td input[type="button"]:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th rowspan="2">Kode</th>
        <th rowspan="2">Nama</th>
        <th rowspan="2">Satuan</th>
        <th colspan="2">Harga</th>
        <th rowspan="2">Action</th>
    </tr>
    <tr>
        <td>Beli</td>
        <td>Jual</td>
        
    </tr>
    <tr>
        <td>M01</td>
        <td>CPU</td>
        <td>pcs</td>
        <td>200</td>
        <td>350</td>
        <td><a href="Tugas12.php"><input type="button" value="Update"></a></td>
    </tr>
    <tr>
        <td>M02</td>
        <td>RAM</td>
        <td>pcs</td>
        <td>300</td>
        <td>450</td>
        <td><a href="Tugas12.php"><input type="button" value="Update"></a></td>
    </tr>
    <tr>
        <td>M03</td>
        <td>VGA</td>
        <td>pcs</td>
        <td>400</td>
        <td>550</td>
        <td><a href="Tugas12.php"><input type="button" value="Update"></a></td>
    </tr>
</table>

</body>
</html>
