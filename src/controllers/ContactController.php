<?php

class ContactController {
    public function contact() {
        require_once __DIR__ . '/../models/Contact.php';

        // View dosyasýný çaðýr ve verileri gönder
        require_once __DIR__ . '/../views/contact.php';
    }
}

?>
