<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Nilai</title>
</head>
<body>
    <h2>Kalkulator Nilai</h2>
    <form>
        UTS (30%):
        <input type="number" name="uts" id="uts" min="0" max="100"> <br>
        UAS (30%):
        <input type="number" name="uas" id="uas" min="0" max="100"> <br>
        Tugas (40%):
        <input type="number" name="tugas" id="tugas" min="0" max="100"> <br>
        <button type="button" onclick="hitungNilai()">Hitung Nilai</button>
        <br>
        <input type="text" name="hasil" id="hasil" readonly>
    </form>

    <script>
        function hitungNilai() {
            var uts = parseFloat(document.getElementById('uts').value);
            var uas = parseFloat(document.getElementById('uas').value);
            var tugas = parseFloat(document.getElementById('tugas').value);

            // Validasi input
            if (isNaN(uts) || isNaN(uas) || isNaN(tugas) || uts < 0 || uts > 100 || uas < 0 || uas > 100 || tugas < 0 || tugas > 100) {
                alert("Masukkan nilai yang valid (0-100) untuk setiap komponen.");
                return;
            }

            // Hitung nilai total
            var nilaiTotal = (uts * 0.3) + (uas * 0.3) + (tugas * 0.4);

            // Konversi nilai menjadi A, B, atau C
            var grade;
            if (nilaiTotal >= 80) {
                grade = 'A';
            } else if (nilaiTotal >= 70) {
                grade = 'B';
            } else if (nilaiTotal >= 60) {
                grade = 'C';
            } else {
                grade = 'D';
            }

            // Tampilkan hasil
            document.getElementById('hasil').value = grade;
        }
    </script>
</body>
</html>
