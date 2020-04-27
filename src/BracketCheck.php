<?php


class BracketCheck
{
    public static function brackets_check(string $str) {
        preg_match('/[^() ,\n\t\r"\']/',$str,$matches);
        if($matches) throw new InvalidArgumentException("string contains invalid symbol '{$matches[0]}'");
        return (substr_count($str,"(") == substr_count($str,")")) ? true : false;
    }
}