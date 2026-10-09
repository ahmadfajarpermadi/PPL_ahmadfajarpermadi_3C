<?php
// File: Validator.php

class Validator 
{
    public static function validateAge($age) {
        if (!is_numeric($age)) {
            throw new InvalidArgumentException("Umur harus berupa angka");
        }
        if ($age < 0) {
            throw new InvalidArgumentException("Umur tidak boleh negatif");
        }
        return true;
    }

    public static function validateName($name) {
        if (trim((string)$name) === '') {
            throw new InvalidArgumentException("Nama tidak boleh kosong");
        }
        if (preg_match('/\d/', (string)$name)) {
            throw new InvalidArgumentException("Nama tidak boleh berisi angka");
        }
        return true;
    }
}
