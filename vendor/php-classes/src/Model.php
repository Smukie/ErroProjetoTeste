<?php

namespace saes;

class Model {

  private $values = [];

  public function __call($name, $args)
  {
    $method = substr($name, 0, 3);
    $fieldName = substr($name, 3, strlen($name));
    switch($method)
    {
      case "get":
        return $this->values[$fieldName];
      break;
      case "set":
        $this->values[$fieldName] = $args[0];
      break;
    }
  }

  public function setData($data = array())
  {
    foreach ($data as $key => $value){
      $this->{"set".$key}($value);
    }
  }

  public function getValues()
  {
    return $this->values;
  }
  /*public function __call($invokedMethod, $arguments)
  {
    $methodType = substr($invokedMethod, 0, 3);
    $methodName = substr($invokedMethod, 3, strlen($invokedMethod));
    switch($methodType)
    {
      case "get":
        return $this->values[$methodName];
      break;
      case "set";
        return $this->values[$methodName] = $arguments[0];
      break;
    }
  }

  public function setData($data = array())
  {
    foreach($data as $key => $value)
    {
      $this->{"set". $key}($value);
    }
  }

  public function getData()
  {
    return $this-> values;
  }*/

}
