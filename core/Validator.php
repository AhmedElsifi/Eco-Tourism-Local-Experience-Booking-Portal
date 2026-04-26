<?php

class Validator
{
    public static function isNumber($value)
    {
        return is_numeric($value);
    }

    public static function isEmpty($value)
    {
        return !isset($value) || trim($value) === '';
    }
    private function validateNumber($value)
    {
        return isset($value) && !empty($value) && is_numeric($value);
    }

}

?>