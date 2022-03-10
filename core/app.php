<?php
require_once "config.php";
ob_start();
$uri = $_SERVER["REQUEST_URI"];
$cleaned = explode("?", $uri)[0];

route('/', 'homeController');

route('/login', 'LoginFormController');
route('/logout', 'LogoutSubmitController');
route('/login', 'LoginSubmitController', "POST");

route('/shop', 'shopController');
route('/shop/(?<shop>[\w]+)', 'shopParamsController'); // write in url
route('/shop/session/kaposvartesco', 'shopSessionController', "POST");
route('/shop/session/kaposvarplaza', 'shopSessionController', "POST");
route('/shop/session/keszthely', 'shopSessionController', "POST");
route('/shop/session/tapolca', 'shopSessionController', "POST");
route('/shop/session/zalaegerszeg', 'shopSessionController', "POST");
route('/shop/session/balatonboglar', 'shopSessionController', "POST");

route('/mobilcsereprogram', 'mobileChangeController');
route('/csereprogram', 'mobileChangeChoiceController');


list($view, $data) = dispatch($cleaned, 'notFoundController');
if (preg_match("%^redirect\:%", $view)) {
    $redirectTarget = substr($view, 9);
    header("Location:" . $redirectTarget);
    die;
}
extract($data);
$user = createUser();
ob_clean();
require_once "tamplates/layout.php";