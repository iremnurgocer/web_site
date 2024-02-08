<?php
require_once __DIR__ . '/../controllers/HomeController.php';
require_once __DIR__ . '/../controllers/BlogController.php';
require_once __DIR__ . '/../controllers/ContactController.php';
require_once __DIR__ . '/../helpers/EncodingHelper.php';

class Route {

    public static function run($path) {

        switch ($path) {
            case '/':
                $controller = new HomeController();
                $controller->index();
                break;
            case '/blog':
                // URL'den id parametresini al
                $id = isset($_GET['id']) ? $_GET['id'] : null;

                // Eğer id parametresi boş değilse, BlogController'ı çağır ve id parametresiyle birlikte blog metodu çalıştır
                if ($id !== null) {
                    $controller = new BlogController();
                    $controller->blog($id);
                } else {
                    http_response_code(404);
                    echo "404 Sayfa Bulunamadı";
                }
                break;
            case '/contact':
                $controller = new ContactController();
                $controller->contact();
                break;
            default:
                http_response_code(404);
                echo "404 Sayfa Bulunamadı";
                break;
        }
    }
}
?>
