<?php
// File: ValidatorTest.php
use PHPUnit\Framework\TestCase;

require_once 'Validator.php';

class ValidatorTest extends TestCase
{
    // ==========================================
    // PENGUJIAN FUNGSI: validateAge
    // ==========================================

    public function testValidAge()
    {
        $this->assertTrue(Validator::validateAge(30)); 
    }

    public function testEmptyAgeThrowsException()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Umur harus berupa angka");
        Validator::validateAge("");
    }

    public function testNegativeAgeThrowsException()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Umur tidak boleh negatif");
        Validator::validateAge(-30);
    }

    // ==========================================
    // PENGUJIAN FUNGSI: validateName
    // ==========================================

    public function testValidName()
    {
        // Memastikan nama yang valid mengembalikan nilai true
        $this->assertTrue(Validator::validateName("Ahmad Fajar"));
    }

    public function testEmptyNameThrowsException()
    {
        // Memastikan nama kosong melempar exception yang sesuai
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Nama tidak boleh kosong");
        Validator::validateName("   "); // Menguji spasi kosong (trim)
    }

    public function testNameWithNumbersThrowsException()
    {
        // Memastikan nama yang mengandung angka melempar exception
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Nama tidak boleh berisi angka");
        Validator::validateName("Ahmad123");
    }
}
