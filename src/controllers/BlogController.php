<?php

class BlogController {
    public function blog($id) {
        require_once __DIR__ . '/../models/Blogs.php';
        $blog = Blog::getBlogById($id);
        // View dosyasýný çaðýr ve verileri gönder
        require_once __DIR__ . '/../views/blog.php';
    }
}

?>
