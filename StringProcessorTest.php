<?php
use PHPUnit\Framework\TestCase;
require  "StringProcessor.php";

class StringProcessorTest extends TestCase
{
    private $stringProcessor;

    protected function setUp()
    {
        $this->stringProcessor = new StringProcessor();
    }

    protected function tearDown()
    {
        $this->stringProcessor = NULL;
    }

    /*
    * Tests for capitalize function
    */
    public function testCapitalizeSuccess()
    {
        $result = $this->stringProcessor->capitalize("hello world");
        $this->assertEquals("HELLO WORLD", $result);
    }

    public function testCapitalizeFail()
    {
        $result = $this->stringProcessor->capitalize("hello world");
        $this->assertNotEquals("hello world", $result);
    }

    public function testCapitalizeNoString()
    {
        $result = $this->stringProcessor->capitalize("");
        $this->assertEquals("No string passed", $result);
    }

    /*
    * Tests for capitalizeAlternate function
    */
    public function testCapitalizeAlternateSuccess()
    {
        $result = $this->stringProcessor->capitalizeAlternate("hello world");
        $this->assertEquals("hElLo wOrLd", $result);
    }

    public function testCapitalizeAlternateFail()
    {
        $result = $this->stringProcessor->capitalizeAlternate("hello world");
        $this->assertNotEquals("hello world", $result);
    }

    public function testCapitalizeAlternateNoString()
    {
        $result = $this->stringProcessor->capitalizeAlternate("");
        $this->assertEquals("No string passed", $result);
    }

    /*
    * Tests for createCSVFile function
    */
    public function testCreateCSVFileSuccess()
    {
        $result = $this->stringProcessor->createCSVFile("hello world");
        $this->assertEquals("CSV created!", $result);
    }

    public function testCreateCSVFileNoString()
    {
        $result = $this->stringProcessor->createCSVFile("");
        $this->assertEquals("No string passed", $result);
    }

    public function testCreateCSVFileCheckForFileExistence()
    {
        $result = $this->stringProcessor->createCSVFile("hello world");
        $this->assertFileExists("string.csv");
    }

    public function testCreateCSVFileCheckForFileContent()
    {
        $result = $this->stringProcessor->createCSVFile("hello world");
        $expected = 'h,e,l,l,o, ,w,o,r,l,d';
        $this->assertEquals($expected, trim(file_get_contents('string.csv')));
    }

    public function testCreateCSVFileCheckForFileContentNotMatch()
    {
        $result = $this->stringProcessor->createCSVFile("hello worlds");
        $expected = 'h,e,l,l,o, ,w,o,r,l,d';
        $this->assertNotEquals($expected, trim(file_get_contents('string.csv')));
    }
}
?>