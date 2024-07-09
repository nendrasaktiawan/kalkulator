<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calculator">
        <form method="post" action="process.php">
            <input type="text" class="calculator-screen" name="screen" value="<?php session_start(); echo isset($_SESSION['screen']) ? $_SESSION['screen'] : ''; ?>" disabled />
            <div class="calculator-keys">
                <button type="submit" name="key" value="C" class="beda">C</button>
                <button type="submit" name="key" value="±" class="beda"2>±</button>
                <button type="submit" name="key" value="%" class="beda">%</button>
                <button type="submit" name="key" value="/" class="operator">&divide;</button>

                <button type="submit" name="key" value="7">7</button>
                <button type="submit" name="key" value="8">8</button>
                <button type="submit" name="key" value="9">9</button>
                <button type="submit" name="key" value="*" class="operator">&times;</button>

                <button type="submit" name="key" value="4">4</button>
                <button type="submit" name="key" value="5">5</button>
                <button type="submit" name="key" value="6">6</button>
                <button type="submit" name="key" value="-" class="operator">&minus;</button>

                <button type="submit" name="key" value="1">1</button>
                <button type="submit" name="key" value="2">2</button>
                <button type="submit" name="key" value="3">3</button>
                <button type="submit" name="key" value="+" class="operator">+</button>

                <button type="submit" name="key" value="0" class="zero">0</button>
                <button type="submit" name="key" value="=" class="samadengan">=</button>
            </div>
        </form>
    </div>
</body>
</html>
