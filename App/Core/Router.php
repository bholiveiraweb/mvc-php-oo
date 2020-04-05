<?php

namespace App\Core;

class Router
{
   private static $base_url;

   public function __construct()
   {
      header('Access-Control-Allow-Origin: *');
      header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
   }

   public static function base($base_url)
   {
      self::$base_url = $base_url;
   }

   public static function namespace($namespace)
   {
      Dispatcher::setNamespace($namespace);
   }

   public static function get($route, $callback)
   {

      if ($_SERVER['REQUEST_METHOD'] == 'GET')
         return Dispatcher::dispatch($route, $callback);
   }

   public function post($route, $callback)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST')
         return Dispatcher::dispatch($route, $callback);
   }

   public function put($route, $callback)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'PUT')
         return Dispatcher::dispatch($route, $callback);
   }

   public function delete($route, $callback)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'DELETE')
         return Dispatcher::dispatch($route, $callback);
   }

   public static function redirect($path)
   {
      header("Location: " . self::$base_url . $path);
   }

   public static function error()
   {
      return Dispatcher::getError();
   }
}
