<?php
class EncodingHelper {
    public static function isotoutf($string) {
        return mb_convert_encoding($string,'iso-8859-9','utf8');
    }
    public static function utftoiso($string) {
        return mb_convert_encoding($string,'utf8','iso-8859-9');
    }
}
