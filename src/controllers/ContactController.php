<?php

class ContactController {
    public function contact() {
        require_once __DIR__ . '/../models/Contact.php';

        // View dosyas�n� �a��r ve verileri g�nder
        require_once __DIR__ . '/../views/contact.php';
    }
}

?>
