<?php
        function url_generate($url)
        {
            $url = strtolower($url);
            $url = strip_tags($url);
            $url = stripslashes($url);
            $url = html_entity_decode($url);
           
            $url = str_replace('\'', '', $url);
           
            $match = '/[^a-z0-9]+/';
            $replace = '-';
            $url = preg_replace($match, $replace, $url);

            $url = trim($url, '-');

            return $url;
        }

        function get_proj_id($length=5) 
        {
            $char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            $char = str_shuffle($char);
            for($i = 0, $rand = '', $l = strlen($char) - 1; $i < $length; $i ++) 
            {
                $rand .= $char{mt_rand(0, $l)};
            }
            return $rand;
        }
?>