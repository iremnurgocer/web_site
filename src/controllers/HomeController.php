<?php

class HomeController {
    public function index() {
        // Burada gerekirse veritabanından veya dosyadan veri çekilir
        require_once __DIR__ . '/../models/Profile.php';
        $blogs = Home::getBlog();
        // View dosyasını çağır ve verileri gönder
        require_once __DIR__ . '/../views/home.php';
    }
}

?>
