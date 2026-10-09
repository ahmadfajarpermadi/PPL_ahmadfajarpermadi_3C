<?php
require_once "Validator.php";
try {
    $result = validateAge(25);
    echo "PASS: Umur 25 diterima\n";
} catch (Exception $e) {
    echo "FAIL: Umur 25 tidak diterima. Error: " . $e->getMessage() . "\n";
}
try {
    $result = validateAge(-5);
    echo "FAIL: Umur -5 seharusnya ditolak\n";
} catch (Exception $e) {
    echo "PASS: Umur -5 ditolak. Error: " . $e->getMessage() . "\n";
}