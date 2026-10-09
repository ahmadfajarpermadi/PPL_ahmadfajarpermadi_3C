<?php
require_once "Validator.php";

// Test 1: nama valid
try {
    $result = validateName("Budi");
    echo "PASS: Nama Budi diterima\n";
} catch (Exception $e) {
    echo "FAIL: Nama Budi tidak diterima. Error: " . $e->getMessage() . "\n";
}

// Test 2: nama diisi angka
try {
    $result = validateName("12345");
    echo "FAIL: Nama 12345 seharusnya ditolak\n";
} catch (Exception $e) {
    echo "PASS: Nama 12345 ditolak. Error: " . $e->getMessage() . "\n";
}

// Test 3: nama dikosongkan
try {
    $result = validateName("");
    echo "FAIL: Nama kosong seharusnya ditolak\n";
} catch (Exception $e) {
    echo "PASS: Nama kosong ditolak. Error: " . $e->getMessage() . "\n";
}