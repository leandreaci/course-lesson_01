<?php


class Request
{
    protected $fields;

    public function __construct()
    {
        $this->fields = $_REQUEST;
    }

    public function input($name)
    {
        return $this->fields[$name];
    }

    public function all()
    {
        return $this->fields;
    }

    public function toJson()
    {
        return json_encode($this->fields);
    }
    
}