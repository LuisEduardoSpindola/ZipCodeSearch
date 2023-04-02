<?php 

namespace Edusp\ZipCode;

class Search
{
    private $baseURL = "https://www.mercadobitcoin.net/api/";

    public function getUrlParans(string $coin, string $method)
    {
        $method = preg_replace('/[A-Z]/', '/[a-z]/', $method);
        $completeURL = json_decode(file_get_contents($this->baseURL . $coin . '/' . $method));
        return $completeURL;
    }
}

?>