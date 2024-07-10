<?php
session_start();


if (!isset($_SESSION['screen'])) {
    $_SESSION['screen'] = '';
}



function checkRequestMethod()
{
    if (!$_SERVER['REQUEST_METHOD'] == 'POST') return;
    $key = $_POST['key'];
    if ($key === 'C') return resetScreen();
    if ($key === '±') return positivNegatif();
    if ($key === '%') return percent();
    if ($key === '=') return total();
    return addToScreen($key);
}

function resetScreen()
{
    $_SESSION['screen'] = '';
}
function positivNegatif()
{
    if ($_SESSION['screen'] !== '') {
        $_SESSION['screen'] = strval(floatval($_SESSION['screen']) * -1);
    }
}
function percent()
{
    if ($_SESSION['screen'] !== '') {
        $_SESSION['screen'] = strval(floatval($_SESSION['screen']) / 100);
    }
}

function total()
{
    if ($_SESSION['screen'] !== '') {
        try {
            $result = eval('return ' . $_SESSION['screen'] . ';');
            $_SESSION['screen'] = strval($result);
        } catch (ParseError $e) {
            $_SESSION['screen'] = 'Error';
        }
    }
}
function addToScreen($key)
{
    $_SESSION['screen'] .= $key;
}
checkRequestMethod();
header("Location: kal.php");
exit();
