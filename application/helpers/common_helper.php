<?php


if (!function_exists('changealias')) {

    function changealias($alias)

    {

        $alias = EncString($alias);


        //th�m tr??ng h?p c�c k� t? ??c bi?t

        $alias = preg_replace("/(!|\"|#|$|%|'|?)/", '', $alias);

        $alias = preg_replace("/(?|?|?|$|>)/", '', $alias);

        $alias = preg_replace("'<[\/\!]*?[^<>]*?>'si", "", $alias);


        $alias = str_replace("----", " ", $alias);

        $alias = str_replace("---", " ", $alias);

        $alias = str_replace("--", " ", $alias);


        $alias = preg_replace('/(\W+)/i', '-', $alias);

        $alias = str_replace(array(

            '-8220-', '-8221-', '-7776-'

        ), '-', $alias);

        $alias = preg_replace('/[^a-zA-Z0-9\-]+/e', '', $alias);

        $alias = str_replace(array(

            'dAg', 'DAg', 'uA', 'iA', 'yA', 'dA', '--', '-8230'

        ), array(

            'dong', 'Dong', 'uon', 'ien', 'yen', 'don', '-', ''

        ), $alias);

        $alias = preg_replace('/(\-)$/', '', $alias);

        $alias = preg_replace('/^(\-)/', '', $alias);

        return $alias;

    }

}


/**
 * EncString()
 *
 * @param mixed $text
 * @return
 */

if (!function_exists('EncString')) {

    function EncString($text)

    {

        $text = html_entity_decode($text);

        //thay th? ch? thuong

        $text = preg_replace("/(�|�|?|�|�|?|?|�|�|?|?|?|?|?|?|?|?|?|?|?|�|?)/", 'a', $text);

        $text = preg_replace("/(�|?)/", "b", $text);

        $text = preg_replace("/(�|?|?|?|?|�|�)/", 'c', $text);

        $text = preg_replace("/(?|?|?|?)/", 'd', $text);

        $text = preg_replace("/(�|�|?|?|?|�|?|?|?|?|?|?|�|?|?)/", 'e', $text);

        $text = preg_replace("/(?|�)/", "f", $text);

        $text = str_replace("?", "k", $text);

        $text = preg_replace("/(?|?)/", "h", $text);

        $text = preg_replace("/(�|�|�|?|?|?|�|�|?|�|?)/", 'i', $text);

        $text = str_replace("?", "j", $text);

        $text = str_replace("?", "m", $text);


        $text = preg_replace("/(�|�|�|?|?|�|�|?|?|?|?|?|?|?|?|?|?|?|�|�|?)/", 'o', $text);

        $text = str_replace("?", "p", $text);

        $text = preg_replace("/(?|?|?|?)/", "g", $text);

        $text = preg_replace("/(�|�|�|?|?|?|?|?|?|?|?|?|?|�|?|?)/", 'u', $text);

        $text = preg_replace("/(?|�|?|?|?|�)/", 'y', $text);

        $text = preg_replace("/(?|�|?|?)/", 'n', $text);

        $text = preg_replace("/(?|�|?|?|?|?|�)/", 's', $text);

        $text = preg_replace("/(?|?|?)/", "r", $text);

        $text = preg_replace("/(?|?|?|?|?)/", 't', $text);


        $text = preg_replace("/(?|?|�)/", 'z', $text);

        $text = preg_replace("/(?|?|?|?)/", "l", $text);


        $text = preg_replace("/(?|?)/", "w", $text);


        $text = str_replace("�", "ae", $text);

        $text = str_replace("�", "th", $text);

        $text = str_replace("�", "dh", $text);

        $text = str_replace("�", "pound", $text);

        $text = str_replace("�", "yen", $text);


        $text = str_replace("�", "2", $text);

        $text = str_replace("�", "0", $text);

        $text = str_replace("�", "?", $text);


        $text = str_replace("�", "mu", $text);

        $text = str_replace("�", "r", $text);


        //thay th? ch? hoa

        $text = preg_replace("/(�|�|�|?|?|�|�|?|?|?|?|?|?|?|?|?|?|?|?|�|?)/", 'A', $text);

        $text = preg_replace("/(?|B)/", 'B', $text);

        $text = preg_replace("/(�|?|?|?|?)/", 'C', $text);

        $text = preg_replace("/(?|?|?)/", 'D', $text);

        $text = preg_replace("/(�|�|?|?|?|�|?|?|?|?|?|?|�|?|?|?)/", 'E', $text);

        $text = preg_replace("/(?|?)/", "F", $text);

        $text = preg_replace("/(�|�|?|?|?|�|?)/", 'I', $text);

        $text = preg_replace("/(?|J)/", "J", $text);


        $text = preg_replace("/(�|�|�|?|?|�|�|?|?|?|?|?|?|?|?|?|?|?|�)/", 'O', $text);

        $text = preg_replace("/(�|�|�|?|?|?|?|?|?|?|?|?|?|?|?)/", 'U', $text);

        $text = preg_replace("/(?|�|?|?|?|�)/", 'Y', $text);

        $text = str_replace("?", "L", $text);

        $text = str_replace("�", "Th", $text);

        $text = str_replace("?", "M", $text);


        $text = preg_replace("/(?|�|?|?)/", "N", $text);

        $text = preg_replace("/(?|�|?|?|?|?)/", "S", $text);

        $text = str_replace("�", "AE", $text);

        $text = preg_replace("/(?|?|�)/", 'Z', $text);


        $text = preg_replace("/(?|R|?)/", 'R', $text);

        $text = preg_replace("/(?|?|T|?)/", 'T', $text);

        $text = preg_replace("/(?|K)/", 'K', $text);

        $text = preg_replace("/(?|?|?|?)/", 'L', $text);


        $text = preg_replace("/(?|?)/", 'H', $text);

        $text = preg_replace("/(?|P)/", 'P', $text);

        $text = preg_replace("/(?|?|?|?)/", 'W', $text);

        $text = preg_replace("/(?|G|?|?|?)/", 'G', $text);

        $text = preg_replace("/(?|?)/", 'T', $text);


        return $text;

    }

}


if (!function_exists('truncateString_')) {

    function truncateString_($str, $len, $charset = "UTF-8")

    {

        $str = html_entity_decode($str, ENT_QUOTES, $charset);

        if (mb_strlen($str, $charset) > $len) {

            $arr = explode(' ', $str);

            $str = mb_substr($str, 0, $len, $charset);

            $arrRes = explode(' ', $str);

            $last = $arr[count($arrRes) - 1];

            unset($arr);

            if (strcasecmp($arrRes[count($arrRes) - 1], $last))

                unset($arrRes[count($arrRes) - 1]);

            return implode(' ', $arrRes) . "...";

        }

        return $str;

    }

}


function v2e_special($value)

{

    $value = str_replace("�", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    #---------------------------------A^


    $value = str_replace("�", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    #---------------------------------a


    $value = str_replace("�", "a", $value);

    $value = str_replace("�", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("�", "a", $value);

    $value = str_replace("?", "a", $value);

    #---------------------------------A


    $value = str_replace("�", "a", $value);

    $value = str_replace("�", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("�", "a", $value);

    $value = str_replace("?", "a", $value);

    #---------------------------------a(


    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    #---------------------------------A(


    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    #---------------------------------e^


    $value = str_replace("�", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    #---------------------------------E^


    $value = str_replace("�", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    #---------------------------------e


    $value = str_replace("�", "e", $value);

    $value = str_replace("�", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    #---------------------------------E


    $value = str_replace("�", "e", $value);

    $value = str_replace("�", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    #---------------------------------i


    $value = str_replace("�", "i", $value);

    $value = str_replace("�", "i", $value);

    $value = str_replace("?", "i", $value);

    $value = str_replace("?", "i", $value);

    $value = str_replace("?", "i", $value);

    #---------------------------------I


    $value = str_replace("�", "i", $value);

    $value = str_replace("�", "i", $value);

    $value = str_replace("?", "i", $value);

    $value = str_replace("?", "i", $value);

    $value = str_replace("?", "i", $value);

    #---------------------------------o^


    $value = str_replace("�", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    #---------------------------------O^


    $value = str_replace("�", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    #---------------------------------o*


    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    #---------------------------------O*


    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    #---------------------------------u*


    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    #---------------------------------U*


    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    #---------------------------------y


    $value = str_replace("�", "y", $value);

    $value = str_replace("?", "y", $value);

    $value = str_replace("?", "y", $value);

    $value = str_replace("?", "y", $value);

    $value = str_replace("?", "y", $value);

    #---------------------------------Y


    $value = str_replace("�", "y", $value);

    $value = str_replace("?", "y", $value);

    $value = str_replace("?", "y", $value);

    $value = str_replace("?", "y", $value);

    $value = str_replace("?", "y", $value);

    #---------------------------------DD


    $value = str_replace("?", "d", $value);

    $value = str_replace("?", "d", $value);

    #---------------------------------o


    $value = str_replace("�", "o", $value);

    $value = str_replace("�", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("�", "o", $value);

    $value = str_replace("?", "o", $value);

    #---------------------------------O


    $value = str_replace("�", "o", $value);

    $value = str_replace("�", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("�", "o", $value);

    $value = str_replace("?", "o", $value);

    #---------------------------------u


    $value = str_replace("�", "u", $value);

    $value = str_replace("�", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    #---------------------------------U


    $value = str_replace("�", "u", $value);

    $value = str_replace("�", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    #---------------------------------


    return $value;

}


function v2e($value)

{

    #---------------------------------SPECIAL

    $value = str_replace("&quot;", "", $value);

    $value = str_replace(".", "", $value);

    $value = str_replace("=", "", $value);

    $value = str_replace("+", "", $value);

    $value = str_replace("!", "", $value);

    $value = str_replace("@", "", $value);

    $value = str_replace("#", "", $value);

    $value = str_replace("$", "", $value);

    $value = str_replace("%", "", $value);

    $value = str_replace("^", "", $value);

    $value = str_replace("&", "", $value);

    $value = str_replace("*", "", $value);

    $value = str_replace("(", "", $value);

    $value = str_replace(")", "", $value);

    $value = str_replace("`", "", $value);

    $value = str_replace("~", "", $value);

    $value = str_replace(",", "", $value);

    $value = str_replace("/", "", $value);

    $value = str_replace("\\", "", $value);

    $value = str_replace('"', "", $value);

    $value = str_replace("'", "", $value);

    $value = str_replace(":", "", $value);

    $value = str_replace(";", "", $value);

    $value = str_replace("|", "", $value);

    $value = str_replace("[", "", $value);

    $value = str_replace("]", "", $value);

    $value = str_replace("{", "", $value);

    $value = str_replace("}", "", $value);

    $value = str_replace("(", "", $value);

    $value = str_replace(")", "", $value);

    $value = str_replace("?", "", $value);

    #---------------------------------a^


    $value = str_replace("�", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    #---------------------------------A^


    $value = str_replace("�", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    #---------------------------------a


    $value = str_replace("�", "a", $value);

    $value = str_replace("�", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("�", "a", $value);

    $value = str_replace("?", "a", $value);

    #---------------------------------A


    $value = str_replace("�", "a", $value);

    $value = str_replace("�", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("�", "a", $value);

    $value = str_replace("?", "a", $value);

    #---------------------------------a(


    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    #---------------------------------A(


    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    $value = str_replace("?", "a", $value);

    #---------------------------------e^


    $value = str_replace("�", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    #---------------------------------E^


    $value = str_replace("�", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    #---------------------------------e


    $value = str_replace("�", "e", $value);

    $value = str_replace("�", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    #---------------------------------E


    $value = str_replace("�", "e", $value);

    $value = str_replace("�", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    $value = str_replace("?", "e", $value);

    #---------------------------------i


    $value = str_replace("�", "i", $value);

    $value = str_replace("�", "i", $value);

    $value = str_replace("?", "i", $value);

    $value = str_replace("?", "i", $value);

    $value = str_replace("?", "i", $value);

    #---------------------------------I


    $value = str_replace("�", "i", $value);

    $value = str_replace("�", "i", $value);

    $value = str_replace("?", "i", $value);

    $value = str_replace("?", "i", $value);

    $value = str_replace("?", "i", $value);

    #---------------------------------o^


    $value = str_replace("�", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    #---------------------------------O^


    $value = str_replace("�", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    #---------------------------------o*


    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    #---------------------------------O*


    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("?", "o", $value);

    #---------------------------------u*


    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    #---------------------------------U*


    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    #---------------------------------y


    $value = str_replace("�", "y", $value);

    $value = str_replace("?", "y", $value);

    $value = str_replace("?", "y", $value);

    $value = str_replace("?", "y", $value);

    $value = str_replace("?", "y", $value);

    #---------------------------------Y


    $value = str_replace("�", "y", $value);

    $value = str_replace("?", "y", $value);

    $value = str_replace("?", "y", $value);

    $value = str_replace("?", "y", $value);

    $value = str_replace("?", "y", $value);

    #---------------------------------DD


    $value = str_replace("?", "d", $value);

    $value = str_replace("?", "d", $value);

    #---------------------------------o


    $value = str_replace("�", "o", $value);

    $value = str_replace("�", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("�", "o", $value);

    $value = str_replace("?", "o", $value);

    #---------------------------------O


    $value = str_replace("�", "o", $value);

    $value = str_replace("�", "o", $value);

    $value = str_replace("?", "o", $value);

    $value = str_replace("�", "o", $value);

    $value = str_replace("?", "o", $value);

    #---------------------------------u


    $value = str_replace("�", "u", $value);

    $value = str_replace("�", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    #---------------------------------U


    $value = str_replace("�", "u", $value);

    $value = str_replace("�", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    $value = str_replace("?", "u", $value);

    #---------------------------------


    return $value;

}


if (!function_exists('SEO')) {

    function SEO($name = '')

    {

        $name = v2e($name);

        $name = preg_replace("/[^a-z,A-Z,0-9,_,-]/", "-", $name);

        $name = str_replace("---", "-", $name);

        $name = str_replace("--", "-", $name);

        return strtolower($name);

    }

}


if (!function_exists('random_string')) {

    function random_string($length = 4)

    {

        $sWord = '';

        $sChars = 'abcdefghjklmnprtwyzABCDEFGHJKLMNPRTWXYZ1234567890';

        for ($i = 1; $i <= $length; $i++) {

            $nNumber = rand(1, strlen($sChars));

            $sWord .= substr($sChars, $nNumber - 1, 1);

        }

        return $sWord;

    }

}


if (!function_exists('pr')) {

    function pr($data, $type = 0)

    {

        $ip = getIP();

        //if ($ip == '183.91.30.105' || $ip == '127.0.0.1') {

        if (1) {

            print '<pre>';

            print_r($data);

            print '</pre>';

            if ($type != 0) {

                exit();

            }

        }

    }

}


if (!function_exists('CutText')) {

    function CutText($text, $n = 80)

    {

        // string is shorter than n, return as is

        if (strlen($text) <= $n) {

            return $text;

        }

        $text = substr($text, 0, $n);

        if ($text[$n - 1] == ' ') {

            return trim($text) . "...";

        }

        $x = explode(" ", $text);

        $sz = sizeof($x);

        if ($sz <= 1) {

            return $text . "...";

        }

        $x[$sz - 1] = '';

        return trim(implode(" ", $x)) . "...";

    }

}


function getIP()

{

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) //check ip from share internet

    {

        $ip = $_SERVER['HTTP_CLIENT_IP'];

    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) //to check ip is pass from proxy

    {

        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

    } else {

        $ip = $_SERVER['REMOTE_ADDR'];

    }

    return $ip;

}


function resizeImage($src, $w = 0, $h = 0)

{

    if ($w != 0 && $h != 0) {

        return PATH_URL . 'imgresize.php?width=' . $w . '&height=' . $h . '&cropratio=1:1&image=' . $src;

    } elseif ($w != 0) {

        return PATH_URL . 'imgresize.php?width=' . $w . '&image=' . $src;

    } elseif ($h != 0) {

        return PATH_URL . 'imgresize.php?height=' . $h . '&image=' . $src;

    }

}


if (!function_exists('img')) {

    function img($image_path, $width = 0, $height = 0)

    {

        //Get the Codeigniter object by reference

        $CI = &get_instance();

        //Alternative image if file was not found

        if (!file_exists($image_path) || !is_file($image_path)) {

            $image_path = 'static/images/img/no-image.jpg';

        }


        //The new generated filename we want

        $fileinfo = pathinfo($image_path);


        //MAKE A FOLDER

        if (!empty($width) && !empty($height)) {

            $uploadDir_Thumb = 'static/cache/' . $width . 'x' . $height . '/';

        } else {

            $uploadDir_Thumb = 'static/cache/thumb/';

        }

        Newfolder($uploadDir_Thumb);

        $new_image_path = $uploadDir_Thumb . $fileinfo['filename'] . '.' . $fileinfo['extension'];


        //The first time the image is requested

        //Or the original image is newer than our cache image

        if ((!file_exists($new_image_path)) || filemtime($new_image_path) < filemtime($image_path)) {

            $CI->load->library('image_lib');

            //The original sizes

            $original_size = getimagesize($image_path);

            $original_width = $original_size[0];

            $original_height = $original_size[1];

            $ratio = $original_width / $original_height;


            //The requested sizes

            $requested_width = $width;

            $requested_height = $height;


            //if smaller then return

            if (($requested_width > $original_width) && $requested_height == 0)

                return PATH_URL . $image_path;

            elseif (($requested_height > $original_height) && $requested_width == 0)

                return PATH_URL . $image_path;

            //Initialising

            $new_width = 0;

            $new_height = 0;


            //Calculations

            if ($requested_width > $requested_height) {

                $new_width = $requested_width;

                $new_height = $new_width / $ratio;

                if ($requested_height == 0)

                    $requested_height = $new_height;


                if ($new_height < $requested_height) {

                    $new_height = $requested_height;

                    $new_width = $new_height * $ratio;

                }

            } else {

                $new_height = $requested_height;

                $new_width = $new_height * $ratio;

                if ($requested_width == 0)

                    $requested_width = $new_width;


                if ($new_width < $requested_width) {

                    $new_width = $requested_width;

                    $new_height = $new_width / $ratio;

                }

            }


            $new_width = ceil($new_width);

            $new_height = ceil($new_height);


            //Resizing

            $config = array();

            $config['image_library'] = 'gd2';

            $config['source_image'] = $image_path;

            $config['new_image'] = $new_image_path;

            $config['maintain_ratio'] = FALSE;

            $config['height'] = $new_height;

            $config['width'] = $new_width;

            $CI->image_lib->initialize($config);

            $CI->image_lib->resize();

            $CI->image_lib->clear();

            //Crop if both width and height are not zero

            if (($width != 0) && ($height != 0)) {

                $x_axis = floor(($new_width - $width) / 2);

                $y_axis = floor(($new_height - $height) / 2);


                //Cropping

                $config = array();

                $config['source_image'] = $new_image_path;

                $config['maintain_ratio'] = FALSE;

                $config['new_image'] = $new_image_path;

                $config['width'] = $width;

                $config['height'] = $height;

                $config['x_axis'] = $x_axis;

                $config['y_axis'] = $y_axis;

                $config['quality'] = '100%';

                $CI->image_lib->initialize($config);

                $CI->image_lib->crop();

                $CI->image_lib->clear();

            }

        }

        return PATH_URL . $new_image_path;

    }

}

function check_dir_upload($targetDir)

{

    if (!is_dir($targetDir . date('Y'))) {

        @mkdir($targetDir . date('Y'), 0777);

    }

    if (!is_dir($targetDir . date('Y') . '/' . date('m'))) {

        @mkdir($targetDir . date('Y') . '/' . date('m'), 0777);

    }

    if (!is_dir($targetDir . date('Y') . '/' . date('m') . '/' . date('d'))) {

        @mkdir($targetDir . date('Y') . '/' . date('m') . '/' . date('d'), 0777);

    }

}


function parserEditorHTML($str)

{

    $str = str_replace('/static/uploads/editor/', PATH_URL . 'static/uploads/editor/', $str);

    $str = preg_replace('/http:\/\/www.youtube.com\/watch\?v=([A-Za-z0-9\-\_]+)&amp;feature=([A-Za-z0-9]+)/is', '<iframe width="500" height="289" src="http://www.youtube.com/embed/$1" frameborder="0" allowfullscreen></iframe>', $str);

    $str = preg_replace('/http:\/\/www.youtube.com\/watch\?v=([A-Za-z0-9\-\_]+)/is', '<iframe width="500" height="289" src="http://www.youtube.com/embed/$1" frameborder="0" allowfullscreen></iframe>', $str);

//    $str = preg_replace_callback('/(<\\s*img[^>]+)(src\\s*=\\s*"[^"]+")([^>]+>)/i', "preg_replace_callback_img", $str);

    return $str;

}

if (!function_exists('preg_replace_callback_img')) {

    function preg_replace_callback_img($matches)
    {

        // alter original img tag:

        //   - add empty class attribute if no existing class attribute

        //   - set src to placeholder image

        //   - add back original src attribute, but rename it to "data-original"

        if (!preg_match('/class\s*=\s*"/i', $matches[0])) {

            $class_attr = 'class="" ';

        }


        $replacement = $matches[1] . (isset($class_attr) ? $class_attr : '') . 'src="' . base_url() . 'static/images/grey.jpg" data-original' . substr($matches[2], 3) . $matches[3];


        // add "lazy" class to existing class attribute

        $replacement = preg_replace('/class\s*=\s*"/i', 'class="lazy ', $replacement);


        // add noscript fallback with original img tag inside

        //$replacement .= '<noscript>' . $matches[0] . '</noscript>';

        return $replacement;

    }

}


function url_login_openid($type = 'google')

{

    if ($type == 'google') {

        $params = array(

            'response_type' => 'token',

            'client_id' => G_CLIENT_ID,

            'redirect_uri' => REDIRECT_URL,

            'state' => 'profile',

            'scope' => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile https://www.google.com/m8/feeds'

        );


        $url = 'https://accounts.google.com/o/oauth2/auth?';

        foreach ($params as $key => $param) {

            $url .= $key . '=' . urlencode($param) . '&';

        }

    }

    if ($type == 'yahoo') {

        $params = array(

            'openid.claimed_id' => 'http://specs.openid.net/auth/2.0/identifier_select',

            'openid.identity' => 'http://specs.openid.net/auth/2.0/identifier_select',

            'openid.mode' => 'checkid_setup',

            'openid.ns' => 'http://specs.openid.net/auth/2.0',

            'openid.realm' => PATH_URL,

            'openid.return_to' => REDIRECT_URL . '/login/yahoo',

            'openid.ns.oauth' => 'http://specs.openid.net/extensions/oauth/1.0',

            'openid.oauth.consumer' => YH_CLIENT_KEY,

            'openid.ns.ax' => 'http://openid.net/srv/ax/1.0',

            'openid.ax.mode' => 'fetch_request',

            'openid.ax.required' => 'email,fullname,nickname,gender,language,timezone,image',

            'openid.ax.type.email' => 'http://axschema.org/contact/email',

            'openid.ax.type.fullname' => 'http://axschema.org/namePerson',

            'openid.ax.type.nickname' => 'http://axschema.org/namePerson/friendly',

            'openid.ax.type.gender' => 'http://axschema.org/person/gender',

            'openid.ax.type.image' => 'http://axschema.org/media/image/default',

        );


        $url = 'https://open.login.yahooapis.com/openid/op/auth?';

        foreach ($params as $key => $param) {

            $url .= $key . '=' . urlencode($param) . '&';

        }

    }

    if ($type == 'fb') {

        $url = 'https://www.facebook.com/dialog/oauth/?client_id=' . FB_CLIENT_ID . '&redirect_uri=' . REDIRECT_URL . '&state=' . FB_CLIENT_SECRET . '&display=popup&scope=email,publish_stream';

    }

    return $url;

}


function get_attr_profile_openid($type)

{

    if ($type == 'google') {

        include_once('application/libraries/eac_curl.class.php');

        $options = array();

        $options['CURLOPT_AUTOREFERER'] = 1;

        $options['CURLOPT_CRLF'] = 1;

        $options['CURLOPT_NOPROGRESS'] = 1;

        $http = new cURL($options);

        $http->setOptions($options);

        $src = $http->get("https://www.googleapis.com/oauth2/v1/userinfo?access_token=" . $_GET['access_token']);

        $contact = $http->get("https://www.google.com/m8/feeds/contacts/default/full?max-results=5000&oauth_token=" . $_GET['access_token']);

        $xml = new SimpleXMLElement($contact);

        $xml->registerXPathNamespace('gd', 'http://schemas.google.com/g/2005');

        $result = $xml->xpath('//gd:email');


        $profile = json_decode($src);

        $info['type'] = 'google';

        if (isset($profile->id)) {

            $info['id'] = $profile->id;

        } else {

            $info['id'] = '';

        }

        if ($profile->email) {

            $info['email'] = $profile->email;

        } else {

            $info['email'] = '';

        }

        if ($profile->verified_email) {

            $info['verified_email'] = $profile->verified_email;

        } else {

            $info['verified_email'] = '';

        }

        if ($profile->name) {

            $info['full_name'] = $profile->name;

        } else {

            $info['full_name'] = '';

        }

        if ($profile->given_name) {

            $info['f_name'] = $profile->given_name;

        } else {

            $info['f_name'] = '';

        }

        if ($profile->family_name) {

            $info['l_name'] = $profile->family_name;

        } else {

            $info['l_name'] = '';

        }

        if (isset($profile->picture)) {

            $info['avatar'] = $profile->picture;

        } else {

            $info['avatar'] = '';

        }

        if (isset($profile->locale)) {

            $info['locale'] = $profile->locale;

        } else {

            $info['locale'] = '';

        }

        if (isset($profile->timezone)) {

            $info['timezone'] = $profile->timezone;

        } else {

            $info['timezone'] = '';

        }

        if (isset($profile->gender)) {

            $info['gender'] = $profile->gender;

        } else {

            $info['gender'] = '';

        }

        foreach ($result as $title) {

            $info['contact'][] = $title->attributes()->address;

        }

    } elseif ($type == 'yahoo') {

        $info['type'] = 'yahoo';

        if (isset($_REQUEST['openid_ax_value_email'])) {

            $info['email'] = $_REQUEST['openid_ax_value_email'];

        } else {

            $info['email'] = '';

        }


        if (isset($_REQUEST['openid_ax_value_fullname'])) {

            $info['full_name'] = $_REQUEST['openid_ax_value_fullname'];

        } else {

            $info['full_name'] = '';

        }


        if (isset($_REQUEST['openid_ax_value_nickname'])) {

            $info['nick_name'] = $_REQUEST['openid_ax_value_nickname'];

        } else {

            $info['nick_name'] = '';

        }


        if (isset($_REQUEST['openid_ax_value_gender'])) {

            $info['gender'] = $_REQUEST['openid_ax_value_gender'];

        } else {

            $info['gender'] = '';

        }


        if (isset($_REQUEST['openid_ax_value_image'])) {

            $info['avatar'] = $_REQUEST['openid_ax_value_image'];

        } else {

            $info['avatar'] = '';

        }

    } else {

        $facebook = new Facebook(array(

            'appId' => FB_CLIENT_ID,

            'secret' => FB_CLIENT_SECRET,

        ));

        $user_id = $facebook->getUser();

        if ($user_id) {

            $user_info = $facebook->api('/me');

            $list_firend = $facebook->api('/me/friends');

            $info['type'] = 'facebook';

            $info['uid'] = $user_info['id'];

            $info['email'] = $user_info['email'];

            $info['full_name'] = $user_info['name'];

            $info['list_firend'] = $list_firend;

        }

    }

    return $info;

}


function getRSSFeed($feed_url)

{

    $content = file_get_contents($feed_url);

    $x = new SimpleXmlElement($content);

    $data = $x->channel->item;

    return $data;

}


if (!function_exists('Newfolder')) {


    function Newfolder($folder)

    {

        $arr_folder = explode('/', $folder);

        $fol = '';

        foreach ($arr_folder as $row) {

            if (!empty($row)) {

                $fol .= $row . '/';

                if (!file_exists($fol)) {

                    @mkdir($fol, 0777);

                } else {

                    if ($row != 'static') {

                        $mod = substr(sprintf('%o', fileperms($fol)), -4);

                        if ($mod != 0777) {

                            @chmod($fol, 0777);

                        }

                    }

                }

            }

        }

    }


}

/**
 * getSiteName()
 *
 * @return
 */

if (!function_exists('getSiteName')) {

    function getSiteName()

    {

        $retval = '';

        $CI = &get_instance();

        $CI->db->where('slug', 'title-admincp');

        $row = $CI->db->get('admin_nqt_settings')->row();

        if (!empty($row))

            $retval = $row->content;

        return $retval;

    }

}

if (!function_exists('pagination_ajax')) {


    function pagination_ajax($totalRows, $pageNum = 1, $pageSize, $limit = 3, $link_url = "", $class = "")

    {

        settype($totalRows, "int");

        settype($pageSize, "int");

        if ($totalRows <= 0)

            return "";

        $totalPages = ceil($totalRows / $pageSize);

        if ($totalPages <= 1)

            return "";

        $currentPage = $pageNum;

        if ($currentPage <= 0 || $currentPage > $totalPages)

            $currentPage = 1;


        //From to

        $form = $currentPage - $limit;

        $to = $currentPage + $limit;


        //Tinh toan From to

        if ($form <= 0) {

            $form = 1;

            $to = $limit * 2;

        };

        if ($to > $totalPages)

            $to = $totalPages;


        //Tinh toan nut first prev next last

        $first = '';

        $prev = '';

        $next = '';

        $last = '';

        $link = '';


        //Link URL

        $linkUrl = current_url();


        $get = '';

        $querystring = '';

        if ($_GET) {

            foreach ($_GET as $k => $v) {

                if ($k != 'p')

                    $querystring = $querystring . "&{$k}={$v}";

            }

            $querystring = substr($querystring, 1);

            $get .= '?' . $querystring;

        }

        $sep = (!empty($querystring)) ? '&' : '';

        $linkUrl = $linkUrl . '?' . $querystring . $sep . 'p=';


        if ($currentPage > $limit + 2) {

            /** first */

            //$first= "<a href='$linkUrl' class='first'>...</a>&nbsp;";

        }


        /*         * **** prev ** */

        if ($currentPage > 1) {

            $prevPage = $currentPage - 1;

            $prev = "<a href=\"Javascript:void(0);\" class=\"prev ajax_a\" rel=\"$link_url\" data-page=\"$prevPage\"><</a>";

        }


        /*         * *Next** */

        if ($currentPage < $totalPages) {

            $nextPage = $currentPage + 1;

            $next = "<a href=\"Javascript:void(0);\" class=\"next ajax_a\" rel=\"$link_url\" data-page=\"$nextPage\">></a>";

        }


        /*         * *Last** */

        if ($currentPage < $totalPages - 4) {

            $lastPage = $totalPages;

            //$last= "<a href='$linkUrl$lastPage' class='last'>...</a>";

        }


        /*         * *Link** */

        for ($i = $form; $i <= $to; $i++) {

            if ($currentPage == $i)

                $link .= "<span>$i</span>";

            else

                $link .= "<a class=\"ajax_a\" href=\"Javascript:void(0);\" rel=\"$link_url\" data-page=\"$i\" >$i</a>";

        }


        $pagination = '<div class="pagination">' . $first . $prev . $link . $next . $last . '</div>';


        return $pagination;

    }


}


if (!function_exists('post')) {

    function post($link = '', $field = array())

    {

        include_once('application/libraries/eac_curl.class.php');

        $options = array();

        $fields = array();

        $options['CURLOPT_AUTOREFERER'] = 1;

        $options['CURLOPT_CRLF'] = 1;

        $options['CURLOPT_NOPROGRESS'] = 1;

        $options['CURLOPT_RETURNTRANSFER'] = 1;

        $http = new cURL($options);

        $http->setOptions($options);

        $result = $http->post($link, $field);

        return $result;

    }

}


if (!function_exists('EDITOR')) {

    function EDITOR($str, $width = '')

    {

        $str = str_replace('../../../static/uploads/editor/', PATH_URL . 'static/uploads/editor/', $str);

        $str = preg_replace('/http:\/\/www.youtube.com\/watch\?v=([A-Za-z0-9\-\_]+)&amp;feature=([A-Za-z0-9]+)/is', '<iframe width="500" height="289" src="http://www.youtube.com/embed/$1" frameborder="0" allowfullscreen></iframe>', $str);

        $str = preg_replace('/http:\/\/www.youtube.com\/watch\?v=([A-Za-z0-9\-\_]+)/is', '<iframe width="500" height="289" src="http://www.youtube.com/embed/$1" frameborder="0" allowfullscreen></iframe>', $str);

        if ($width != '') {

            preg_match_all('/src="(.*)"/msU', $str, $match);

            if (is_array($match[1])) {

                foreach ($match[1] as $item) {

                    if ($item != '') {

                        if (strstr(PATH_URL, $item)) {

                            $item_tmp = str_replace(PATH_URL, '', $item);

                            $str = str_replace($item, img($item_tmp, $width), $str);

                        }

                    }

                }

            }

        }

        return $str;

    }

}


if (!function_exists('truncateString_')) {

    function truncateString_($str, $len, $charset = "UTF-8")

    {

        $str = html_entity_decode($str, ENT_QUOTES, $charset);

        if (mb_strlen($str, $charset) > $len) {

            $arr = explode(' ', $str);

            $str = mb_substr($str, 0, $len, $charset);

            $arrRes = explode(' ', $str);

            $last = $arr[count($arrRes) - 1];

            unset($arr);

            if (strcasecmp($arrRes[count($arrRes) - 1], $last))

                unset($arrRes[count($arrRes) - 1]);

            return implode(' ', $arrRes) . "...";

        }

        return $str;

    }

}


if (!function_exists('last_query')) {


    function last_query($exit = false)
    {

        $CI = &get_instance();

        echo $CI->db->last_query();

        if ($exit) {

            exit();

        }

    }


}
