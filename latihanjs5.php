<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Bilangan</title>
</head>
<body>
    <h2>Kalkulator Bilangan</h2>
    <form>
        Start:
        <input type="number" name="start" id="start">
        <br>
        End:
        <input type="number" name="end" id="end">
        <br>
        <button type="button" onclick="generateNumbers()">Tampilkan</button>
        <br>
        <textarea id="result" rows="10" cols="30" readonly></textarea>
    </form>

    <script>
        function generateNumbers() {
            var start = parseInt(document.getElementById("start").value);
            var end = parseInt(document.getElementById("end").value);
            var resultTextarea = document.getElementById("result");
            var numbers = "";

            if (isNaN(start) || isNaN(end)) {
                resultTextarea.value = "Masukkan nilai awal dan akhir yang valid.";
            } else if (start >= end) {
                resultTextarea.value = "Nilai awal harus kurang dari nilai akhir.";
            } else {
                for (var i = start; i <= end; i++) {
                    numbers += i + "\n";
                }
                resultTextarea.value = numbers;
            }
        }
    </script>
</body>
</html>
