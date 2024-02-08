<?php
require_once __DIR__ . '/../controllers/HomeController.php';

require_once __DIR__ . '/../helpers/EncodingHelper.php';

class Route {

    public static function run($path) {


        switch ($path) {
            case '/':
                $controller = new HomeController();
                $controller->index();
                break;
            // Diğer sayfalar için gerektiğinde case'ler ekleyebilirsiniz
            default:
                http_response_code(404);
                echo "404 Sayfa Bulunamadı";
                break;
        }
    }
}
?>
