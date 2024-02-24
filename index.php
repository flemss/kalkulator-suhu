<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suhu Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Suhu Calculator</h2>
        <form action="calculator.php" method="post">
            <label for="temperature">Masukkan Suhu dalam celcius bray:</label>
            <input type="text" name="temperature" required>

            <label for="unit">Konversi ke:</label>
            <select name="unit" required>
                <option value="kelvin">Kelvin</option>
                <option value="celcius">Celcius</option>
                <option value="reamur">Reamur</option>
                <option value="fahrenheit">Fahrenheit</option>
            </select>

            <button type="submit">Konversi</button>
        </form>
    </div>
</body>
</html>
