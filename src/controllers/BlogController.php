<?php

class BlogController {
    public function blog($id) {
        require_once __DIR__ . '/../models/Blogs.php';
        $blog = Blog::getBlogById($id);
        // View dosyas�n� �a��r ve verileri g�nder
        require_once __DIR__ . '/../views/blog.php';
    }
}

?>
