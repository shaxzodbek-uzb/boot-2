<?php
abstract class UserData {
    abstract public function getData():string;
}
class ExcelUserData extends UserData {
    public function getData(): string
    {
        return 'User data for excel file';
    }
}
class WordUserData extends UserData {
    public function getData(): string
    {
        return 'User data for word file';
    }
}
abstract class ProductData {
    abstract public function getData():string;
}
class ExcelProductData extends ProductData {
    public function getData(): string
    {
        return 'Product data for excel file';
    }
}
class WordProductData extends ProductData {
    public function getData(): string
    {
        return 'Product data for word file';
    }
}
abstract class FileGenerator {
    abstract function getHeaders(): string;
    abstract function getUserContent(): string;
    abstract function getProductContent(): string;
    abstract function getFooter(): string;
}
class ExcelFileGenerator extends FileGenerator {
    public function getHeaders(): string
    {
        return 'header for excel';
    }
    public function getUserContent(): string
    {
        $dataProvider = null;
        $dataProvider = new ExcelUserData();
        return $dataProvider->getData();
    }
    public function getProductContent(): string
    {
        $dataProvider = null;
        $dataProvider = new ExcelProductData();
        return $dataProvider->getData();
    }
    public function getFooter(): string
    {
        return 'footer for excel';
    }
}
class WordFileGenerator extends FileGenerator {
    public function getHeaders(): string
    {
        return 'header for word';
    }
    public function getUserContent(): string
    {
        $dataProvider = null;
        $dataProvider = new WordUserData();
        return $dataProvider->getData();
    }
    public function getProductContent(): string
    {
        $dataProvider = null;
        $dataProvider = new WordProductData();
        return $dataProvider->getData();
    }
    public function getFooter(): string
    {
        return 'footer for word';
    }
}
//User
$fileGenerator = new ExcelFileGenerator;

var_dump($fileGenerator->getHeaders());
var_dump($fileGenerator->getUserContent());
var_dump($fileGenerator->getFooter());

$fileGenerator = new WordFileGenerator;

var_dump($fileGenerator->getHeaders());
var_dump($fileGenerator->getUserContent());
var_dump($fileGenerator->getFooter());

//Product
$fileGenerator = new ExcelFileGenerator;

var_dump($fileGenerator->getHeaders());
var_dump($fileGenerator->getProductContent());
var_dump($fileGenerator->getFooter());

$fileGenerator = new WordFileGenerator;

var_dump($fileGenerator->getHeaders());
var_dump($fileGenerator->getProductContent());
var_dump($fileGenerator->getFooter());