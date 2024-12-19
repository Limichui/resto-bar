<?php
session_start();

if (isset($_POST['lang'])) {
    $_SESSION['lang'] = $_POST['lang'];
    $_SESSION['flag'] = $_POST['flag'];
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'No se ha especificado ningún idioma']);
}
?>