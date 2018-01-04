<?php
class Utils{
    public static function cleanString($string){
        return filter_var($string,FILTER_SANITIZE_STRING);
    }
}