<?php

namespace App\Models;

use Storage;

class Reporter
{
    private $pathToCsvFile;
    private $csvFileHeaders;
    private $convertedData;
    private $files;

    public function __construct()
    {
        $files[] = array('name'=>'tamura', 'age'=>'25', 'job'=>'エンジニア');
        $files[] = array('name'=>'suzuki', 'age'=>'23', 'job'=>'介護士');
        $files[] = array('name'=>'maki', 'age'=>'29', 'job'=>'レストラン');
        $header = array_keys($files[0]);

        $this->files = $files;
        $this->csvFileHeaders = $header;
    }

    public function getConvertedData()
    {
        return $this->files;
    }
    

    public function putCsvToStorage()
    {
        $header = $this->csvFileHeaders;

        $content = fopen('php://temp', 'w');
        fputcsv($content, $header);
        foreach ($files as $file) {
            fputcsv($content, $file);
        }
        rewind($content);

        Storage::put(sprintf('converted/%d/', date("Y/m/d H:i:s")), $content);
    }

    public function getPathToCsvFile()
    {
        return $this->pathToCsvFile;
    }

    public function getCsvFileHeaders()
    {
        return $this->csvFileHeaders;
    }
}
