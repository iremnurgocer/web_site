<?php

class Home
{
    public static function getBlog()
    {
        $blogs = array(
            0 => array("title" => "ilk blog", "abstract" => "blog içeriði özeti", "contents" => "blog metni burada"),
            1 => array("title" => "ikinci blog", "abstract" => "blog içeriði özeti", "contents" => "blog metni burada"),
            2 => array("title" => "üçüncü blog", "abstract" => "blog içeriði özeti", "contents" => "blog metni burada")
        );
        $blogs = EncodingHelper::utftoiso($blogs);
        return isset($blogs) ? $blogs : null;
    }
}
