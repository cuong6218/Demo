<?php


namespace App\Model;


class DataConnect
{
    protected $path;

    public function __construct()
    {
        $this->path = 'src/Model/data.json';
    }

    function readFile()
    {
        $data = file_get_contents($this->path);
        return json_decode($data, true);
    }

    function saveFile($arr)
    {
        $data = json_encode($arr);
        file_put_contents($this->path, $data);
    }

    function resetData()
    {
        file_put_contents($this->path, json_encode([]));
    }
}