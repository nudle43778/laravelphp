<?php
    namespace ModernWays\Mvc;
    class Controller
    {
        protected function view() {
            $trace = debug_backtrace();
            echo '<pre>' . var_dump($trace) . '</pre>';
            $method =  ucfirst($trace[1]["function"]);
            $class = $trace[1]["class"];
            $class = substr($class, strrpos($class, '\\') +1);
            $class = str_replace('Controller', '', $class);
            $path = "vendor/redmind/dialog/src/View/$class/{$method}.php";
            $view = function () use ($path) {
                include($path);
            };
            echo $path;
            return $view;
        }
    }
