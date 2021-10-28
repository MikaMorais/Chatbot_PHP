<?php

class Quotation {
    
    private $data = []; #store what the API returns

    public function __construct($coin)
    {
        $api = "https://economia.awesomeapi.com.br/last/{$coin}";
        $obj_json = json_decode(file_get_contents($api));
        $this->data = $obj_json;

        #parse (array)
        $this->data = $this->data->{str_replace('-', '', $coin)};
    }

    public function returns(){
        return $this->data;
    }
}
