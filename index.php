<?php
require __DIR__ . '/vendor/autoload.php';

use Boldizsar\RabIT\Controller\{
    HomeController,
    UserController,
    AdvertismentController,
    NotFoundController
};

/**
 * Get informations from the request
 */
if (isset($_GET['url']) && !empty($_GET['url'])) {
    $param = $_GET['url'];
    $template = __DIR__.'/assets/view/list.php';
    switch($param) {
        case "users":
            $user = new UserController($template);
            $user->render();
            break;

        case "advertisments":
            $advertisment = new AdvertismentController($template);
            $advertisment->render();
            break;

        default:
            // Return the page not found template
            include __DIR__.'/assets/view/404.php';
            break;
    }
    return;

} else {
    // Return the home page template
    $title = 'Home';
    $routes = [
        'Users' => '/users',
        'Advertisments' => '/advertisments'
    ];
    include __DIR__.'/assets/view/home.php';    
    return;

}
