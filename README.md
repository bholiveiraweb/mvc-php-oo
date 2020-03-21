# MVC Pattern using PHP 7
A simple MVC Pattern development with modern PHP 7 and it's prepared for Rest API's.

## Configuration
### .env
Rename .env.example file to .env and configure database connection variables.
Example:
```sh
DB_DRIVER="mysql"
DB_HOST="localhost"
DB_PORT="3306"
DB_NAME="YOUR_DATABASE_NAME"
DB_USER="YOUR_DATABASE_USER"
DB_PASSWD="YOUR_DATABASE_PASSWORD"
 ```
 
 ### Constants.php
Set constants with your environment configurations in App/Constants.php file.
Example:
```php
<?php
define('BASE_URL', 'http://localhost:8080');
define('ROOT_PATH', '/var/www');
define('CACHE_PATH', ROOT_PATH . '/cache');
define('VIEW_PATH', ROOT_PATH . '/App/Views');
```

## Usage
### Routes.php
You can set BASE URL, namespaces and routes in App/Routes.php file. In routes declaration you can set Controller::action or a Function. It's possible too declare params using {param} style in route.
Example:
```php
<?php
use App\Core\Router;

Router::base(BASE_URL);

/**
 *  ---------------------------------------------
 *  Public Routes
 *  ---------------------------------------------
 */
Router::namespace('App\\Resources\\');
Router::get('/', 'Welcome::index');
Router::get('/dashboard', 'Welcome::dashboard');
Router::post('/dashboard', 'Welcome::dashboard');
Router::get('/product/{id}', function() {
    '... Your function here'
});

 *  ---------------------------------------------
 *  Admin Routes
 *  ---------------------------------------------
 */
Router::namespace('App\\Resources\\Admin');
Router::get('/admin/dashboard', 'Dashboard::index');
Router::post('/admin/dashboard', 'Dashboard::index');

/**
 *  ---------------------------------------------
 *  404 Error Handler
 * ----------------------------------------------
 */
Router::namespace('App\\Resources\\Errors\\');
Router::get('/error/404', 'Error404::index');

if (Router::error()['404']) {
    Router::redirect('/error/404');
}

```

### Controllers/Resources
Controllers/Resources should be declared in App/Resources path. the namespace should be declare like "namespace App\Resources". To declare a model in the controller, you must enter the namespace of the class model that you will use line "use App\Models\Product". In the same way to insert a view, you must declare to insert the namespace of the view class like "use App\Core\View", which will be responsible for rendering the html. By default, the view class uses the twig template engine as the html rendering engine.
Example:
```php
<?php
namespace App\Resources;

use App\Core\View;
use App\Models\Product;

class Welcome
{
    public function index()
    {
        $data = [
            'title' => 'Bem vindo(a)! Faça login'
        ];

        View::render('login.html', $data);
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Listagem de produtos',
            'products' => Product::getProducts()
        ];

        View::render('index.html', $data);
    }
}
```

### Models
Models should be declared in App/Models path. the namespace should be declare like "namespace App\Models" and in case the use database transactions, you should be insert namespace of database like "use App\Core\Database".
Example:
```php
<?php
namespace App\Models;

use App\Core\Database;

class Product
{
    public static function getProducts()
    {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM products");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
```
### Views
Views should be insert in App\Views path like .html file or .twig file to use twig resources and sintaxe.
Example:
```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    {{ your_content }}
</body>

</html>
```
See more in [TWIG TEMPLATE ENGINE](https://twig.symfony.com/)

## License
[MIT](https://choosealicense.com/licenses/mit/)
