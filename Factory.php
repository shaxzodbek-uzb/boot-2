<?php

abstract class Writer {
    public abstract function headers();
    public abstract function write(string $dataSet);
}

class ExcelWriter extends Writer{
    public function headers()
    {
        echo 'XML';
    }
    public function write(string $dataSet)
    {
        echo "Excel: $dataSet";
    }
}

class WordWriter extends Writer{
    public function headers()
    {
        echo 'XML';
    }
    public function write(string $dataSet)
    {
        echo "Word: $dataSet";
    }
}

class PDFWriter extends Writer{
    public function headers()
    {
        echo 'binary';
    }
    public function write(string $dataSet)
    {
        echo "PDF: $dataSet";
    }
}

class WriterFactory{
    public static function make(string $type): Writer
    {
        switch ($type) {
            case 'pdf':
                return new PDFWriter;
            case 'word':
                return new WordWriter;
            case 'excel':
                return new ExcelWriter;
        }
    }
}


$writer = WriterFactory::make('pdf');

$write->header();
$write->write();