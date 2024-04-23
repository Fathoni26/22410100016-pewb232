function toggleCheckbox(checkbox) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function(cb) {
        if (cb !== checkbox) {
            cb.checked = false;
        }
    });
}

function calculate() {
    var radius = parseFloat(document.getElementById("radius").value);
    var length = parseFloat(document.getElementById("length").value);
    var width = parseFloat(document.getElementById("width").value);
    var height = parseFloat(document.getElementById("height").value);
    var resultTextarea = document.getElementById("result");
    var results = "";

    var selectedCalculation = "";

    if (document.getElementById("volumeBalok").checked) {
        selectedCalculation = "Volume Balok";
    } else if (document.getElementById("luasPermukaanBalok").checked) {
        selectedCalculation = "Luas Permukaan Balok";
    } else if (document.getElementById("volumeKubus").checked) {
        selectedCalculation = "Volume Kubus";
    } else if (document.getElementById("luasPermukaanKubus").checked) {
        selectedCalculation = "Luas Permukaan Kubus";
    } else if (document.getElementById("volumeTabung").checked) {
        selectedCalculation = "Volume Tabung";
    } else if (document.getElementById("luasPermukaanTabung").checked) {
        selectedCalculation = "Luas Permukaan Tabung";
    }
    switch (selectedCalculation) {
        case "Volume Balok":
            var volumeBalok = length * width * height;
            results += "Volume Balok: " + volumeBalok.toFixed(2);
            break;
        case "Luas Permukaan Balok":
            var luasPermukaanBalok = 2 * (length * width + length * height + width * height);
            results += "Luas Permukaan Balok: " + luasPermukaanBalok.toFixed(2);
            break;
        case "Volume Kubus":
            var volumeKubus = Math.pow(height, 3);
            results += "Volume Kubus: " + volumeKubus.toFixed(2);
            break;
        case "Luas Permukaan Kubus":
            var luasPermukaanKubus = 6 * Math.pow(height, 2);
            results += "Luas Permukaan Kubus: " + luasPermukaanKubus.toFixed(2);
            break;
        case "Volume Tabung":
            var volumeTabung = Math.PI * Math.pow(radius, 2) * height;
            results += "Volume Tabung: " + volumeTabung.toFixed(2);
            break;
        case "Luas Permukaan Tabung":
            var luasPermukaanTabung = 2 * Math.PI * radius * (radius + height);
            results += "Luas Permukaan Tabung: " + luasPermukaanTabung.toFixed(2);
            break;
        default:
            results += "Pilih salah satu jenis perhitungan.";
    }

    resultTextarea.value = results;
}