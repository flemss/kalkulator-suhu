<?php
class TemperatureConverter {
    private $temperature;

    public function __construct($temperature) {
        $this->temperature = $temperature;
    }

    public function toKelvin() {
        return $this->temperature + 273.15;
    }

    public function toCelcius() {
        return $this->temperature;
    }

    public function toReamur() {
        return $this->temperature * 4 / 5;
    }

    public function toFahrenheit() {
        return $this->temperature * 9 / 5 + 32;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = floatval($_POST["temperature"]);
    $unit = $_POST["unit"];

    $converter = new TemperatureConverter($temperature);

    switch ($unit) {
        case "kelvin":
            $result = $converter->toKelvin();
            break;
        case "celcius":
            $result = $converter->toCelcius();
            break;
        case "reamur":
            $result = $converter->toReamur();
            break;
        case "fahrenheit":
            $result = $converter->toFahrenheit();
            break;
        default:
            $result = "Invalid unit";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Konversi Suhu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Hasil Konversi Suhu</h2>
        <p>Hasil konversi suhu dari <?php echo $temperature; ?> derajat ke <?php echo $unit; ?> adalah:</p>
        <p><?php echo $result; ?></p>
        <a href="index.php">Kembali</a>
    </div>
</body>
</html>
