<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\Reporter;

class ExampleTest extends TestCase
{
    public function testBasicExample()
    {
        $reportObj = new Reporter();
        $files = $reportObj->getConvertedData();
        $csvFileHeaders = $reportObj->getCsvFileHeaders();

        $this->assertEquals($files[0]['name'], 'tamura');
    }
}
