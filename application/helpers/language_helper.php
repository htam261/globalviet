<?php
/**
 * Created by PhpStorm.
 * User: trong_000
 * Date: 7/30/2015
 * Time: 10:24 AM
 */
if (!function_exists('_T')) {
    function _T($line, $id = '')
    {
        $CI =& get_instance();
        $_line = $CI->lang->line($line);

        if ($id != '') {
            $line = '<label for="' . $id . '">' . $line . "</label>";
        }

        echo empty($_line) ? $line : $_line;
    }
}