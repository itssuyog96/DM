<?
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
?>