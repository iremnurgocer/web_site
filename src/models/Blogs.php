<?php

class Blog
{
    public static function getBlogById($id)
    {
        $blogs = array(
            0 => array("title"=>"blog ba�l�k","abstract"=>"blog i�eri�i �zeti","contents"=>"blog metni burada"),
            1 => array("title"=>"blog ba�l�k","abstract"=>"blog i�eri�i �zeti","contents"=>"blog metni burada"),
            2 => array("title"=>"blog ba�l�k","abstract"=>"blog i�eri�i �zeti","contents"=>"blog metni burada")
        );
        $blogs[$id]=EncodingHelper::utftoiso($blogs[$id]);
        return isset($blogs[$id]) ? $blogs[$id] : null;
    }
}
