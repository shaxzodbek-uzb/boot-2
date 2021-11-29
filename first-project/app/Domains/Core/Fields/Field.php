<?php
namespace Market\Core\Fields;

class Field {
    protected $key;
    protected $rules;
    public function __construct($key) {
        $this->key = $key;
    }
    static public function make(string $key)
    {
        return new self($key);
    }
    public function rules(string $rules)
    {
        $this->rules = $rules;
        return $this;
    }
    public function getRules()
    {
        return $this->rules;
    }
    public function getKey()
    {
        return $this->key;
    }
    public function serve($item, $key, $value)
    {
        $item->$key = $value;
        return $item;
    }
}