# MVC Pattern using PHP 7
A simple MVC Pattern development with modern PHP 7 and it's prepared for Rest API's.

## Configuration
 
 ### config.php
Set configs constants with your environment configurations in app/constants.php file.
Example:
```php

// APP CONFIG
define('APP_BASE_URL', 'http://mvc.local');
define('APP_ROOT_PATH', 'c:\xampp\htdocs\mvc');
define('APP_CACHE_PATH', APP_ROOT_PATH . '/storage/cache');
define('APP_VIEW_PATH', APP_ROOT_PATH . '/app/views');

// DATABASE CONFIG
define('DATABASE_DRIVER', 'mysql');
define('DATABASE_HOST', 'localhost');
define('DATABASE_PORT', '3306');
define('DATABASE_NAME', 'mvc');
define('DATABASE_USER', 'root');
define('DATABASE_PASSWD', '');
```

## Usage
### Routes.php
You can set namespaces and routes in app/routes.php file. In routes declaration you can set YourController@action or a Function. It's possible too declare params using {param} style in route.
Example:
```php
use Core\Router;

$router = new Router;

//-- Public Routes
$router->namespace('App\Controllers');

$router->get('/', 'WelcomeController@index');
$router->get('/dashboard', 'WelcomeController@dashboard');
$router->get('/product', 'ProductController@index');

//-- 404 Error Handler
$router->namespace('App\Controllers\Errors');
$router->get('/error/404', 'Error404Controller@index');

if ($router->error()['404']) {
    $router->redirect('/error/404');
}
```

### Controllers
Controllers should be declared in app/controllers path. the namespace should be declare like "namespace App\Controllers". To declare a model into the controller, you must enter the namespace of the class model that you will use line "use Core\Models\Product". In the same way to insert a view, you must declare to insert the namespace of the view class like "use Core\View", which will be responsible for rendering the html. By default, the view class uses the twig template engine as the html rendering engine.
Example:
```php
namespace App\Controllers;

use Core\View;
use App\Models\Product;

class ProductController
{
    public function index()
    {
        $data = [
            'title' => 'Product List',
            'products' => (new Product)->all()
        ];

        View::render('index.html', $data);
    }
}
```

### Models
Models should be declared in app/models path. the namespace should be declare like "namespace App\Models" and in case the use database transactions, you should be insert namespace of database like "use Core\Database".
Example:
```php
namespace App\Models;

use Core\Database;

class Product
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function all()
    {
        $stmt = $this->db->query("SELECT * FROM products");
        return $stmt->fetchAll();
    }
}
```
### Views
Views should be insert in app\views path like .html file or .twig file to use twig resources and sintaxe.
Example:
```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ title }}</title>
</head>

<body>
    {{ your_content }}
</body>

</html>
```
See more in [TWIG TEMPLATE ENGINE](https://twig.symfony.com/)

## License
[MIT](https://choosealicense.com/licenses/mit/)
