<?php
class Parser {
    private $pathToFile;
    private $xml;
    private $csv;
    private $yml;

    public function __construct($pathToFile)
    {
        if ( ! file_exists($pathToFile) ){
            throw new Exception ( "File not found! :(" ) ;
        } else {
            $this->pathToFile = $pathToFile;
        }
        $this->xml = 'XML is not defined';
        $this->csv = 'CSV is not defined';
        $this->yml = 'YML is not defined';
    }

    private function getArray(){
        if (self::isXML()) {
            return $this->xml;
        } elseif (self::isYML()) {
            return $this->yml;
        }  elseif (self::isCSV()) {
            return $this->csv;
        }else {
            return false;
        }

    }
    private function xml2array($xml) {
        $arr = array();
        foreach ($xml->children() as $r)
        {
            if(count($r->children()) == 0)
            {
                $arr[$r->getName()] = strval($r);
            }
            else
            {
                $arr[] = self::xml2array($r);
            }
        }
        return $arr;
    }

    private function isXML(){
        libxml_use_internal_errors(true);
        $xml = simplexml_load_file($this->pathToFile);
        if (empty(libxml_get_errors())) {
            $this->xml = self::xml2array($xml);//json_decode( json_encode($xml), 1);
            return true;
        } else {
            //throw new Exception ( "XML syntax error" );
            return false;
        }
    }

    private function isCSV(){
        $csv = fopen($this->pathToFile,'r');
        $array = array();
        $header = null;
        while ($row = fgetcsv($csv)) {
            if ($header === null) {
                $header = $row;
                continue;
            }
            $array[] = array_combine($header, $row);
        }
        fclose($csv);
        if (!empty($array)){
            $this->csv = $array;
            return true;
        } else {
            return false;
        }

    }

    private function isYML(){
        $yml = yaml_parse_file($this->pathToFile);
        if (!empty($yml) && is_array($yml)) {
            $this->yml = $yml;
            return true;
        } else {
            return false;
        }
    }
    /**
     * @return array
     */

    public function parse(){
        return self::getArray();
    }

}