<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: inline-block;
            width: 100px;
        }
        .form-group input {
            width: calc(100% - 110px);
            padding: 8px;
            border-radius: 4px;
        }
        .form-group select {
            width: calc(100% - 110px);
            padding: 8px;
            border-radius: 4px;
        }
        .btn-group {
            text-align: center;
        }
        .btn-group button {
            padding: 10px 20px;
            margin-right: 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-save {
            background-color: #4CAF50;
            color: white;
        }
        .btn-save:hover {
            background-color: #45a049;
        }
        .btn-cancel {
            background-color: #f2f2f2;
            color: black;
        }
        .btn-cancel:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Input Barang</h2>
    <form id="inputForm">
        <div class="form-group">
            <label for="kode">Kode:</label>
            <input type="text" id="kode" name="kode" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div class="form-group">
        <label for="satuan">Satuan:</label>
            <input type="text" id="satuan" name="satuan" required>
        </div>
        <div class="form-group">
            <label for="harga_beli">Harga Beli:</label>
            <input type="number" id="harga_beli" name="harga_beli" required>
        </div>
        <div class="form-group">
            <label for="harga_jual">Harga Jual:</label>
            <input type="number" id="harga_jual" name="harga_jual" required>
        </div>
        <div class="btn-group">
        <td><a href="Tugas1.php"><button type="button" class="btn-update">Update</button>
        <td><a href="Tugas1.php"><button type="button" class="btn-delete">Delete</button>
        <td><a href="Tugas1.php"><button type="button" class="btn-cancel">Cancel</button>
        </div>
    </form>
</div>

</body>
</html>
