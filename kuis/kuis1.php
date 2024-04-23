<!DOCTYPE html>
<html>
<head>
<script src="kuis1.js"> </script>
<link rel= "stylesheet" href="kuis1css.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <title>Menghitung Bangun Ruang</title>
    <style>
        
    </style>
</head>
<body>
    <h2>Menghitung Bangun Ruang</h2>
    <form>
        <div class="checkbox-container">
            <input type="checkbox" id="volumeBalok" name="volumeBalok" onchange="toggleCheckbox(this)"> Volume Balok
            <input type="checkbox" id="luasPermukaanBalok" name="luasPermukaanBalok" onchange="toggleCheckbox(this)"> Luas Permukaan Balok
        </div>
        <div class="checkbox-container">
            <input type="checkbox" id="volumeKubus" name="volumeKubus" onchange="toggleCheckbox(this)"> Volume Kubus
            <input type="checkbox" id="luasPermukaanKubus" name="luasPermukaanKubus" onchange="toggleCheckbox(this)"> Luas Permukaan Kubus
        </div>
        <div class="checkbox-container">
            <input type="checkbox" id="volumeTabung" name="volumeTabung" onchange="toggleCheckbox(this)"> Volume Tabung
            <input type="checkbox" id="luasPermukaanTabung" name="luasPermukaanTabung" onchange="toggleCheckbox(this)"> Luas Permukaan Tabung
        </div>
        <br>
        <label for="radius">Radius (Tabung):</label>
        <input type="number" id="radius" name="radius">
        <br>
        <label for="length">Panjang (Balok):</label>
        <input type="number" id="length" name="length">
        <br>
        <label for="width">Lebar (Balok):</label>
        <input type="number" id="width" name="width">
        <br>
        <label for="height">Tinggi (Balok/Kubus/Tabung):</label>
        <input type="number" id="height" name="height">
        <br>
        <button type="button" onclick="calculate()">Hitung</button>
        <br>
        <textarea id="result" rows="10" cols="30" readonly></textarea>
    </form>

    <script>
      
    </script>
</body>
</html>
