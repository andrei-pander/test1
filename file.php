<?php

class File
{
    public static function readCSV($fileName)
    {
        if (($fp = fopen($fileName, 'r')) !== false) {
            $arrFromCSV = array();
            while (($row = fgetcsv($fp, 0, ';')) !== false) {
                $arrFromCSV[] = $row;
            }
            return $arrFromCSV;
        }
        Logger::log('cannot read file \'' . $fileName . '\'');
        return false;
    }
}