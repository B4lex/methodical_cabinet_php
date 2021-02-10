<?php 
    class Router {
        private $routes = array();
        private $not_found_template;
        private $method_not_allowed_template;

        public function __construct($not_found_tmplt='', $method_not_allowed_tmplt='') 
        {
            $this->not_found_template = $not_found_tmplt;
            $this->method_not_allowed_template = $method_not_allowed_tmplt;
        }

        public function add(string $route_pattern, callable $handler, string $allowed_method=null)
        {
            $this->routes[] = array(
                'pattern' => $route_pattern, 
                'handler' => $handler, 
                'method' => $allowed_method
            );
        }

        public function start() 
        {
            $requested_resource = parse_url($_SERVER['REQUEST_URI'])['path'];
            $method = $_SERVER['REQUEST_METHOD'];
            $pattern_matched = false;
            foreach($this->routes as $route) {
                if (preg_match('~'.$route['pattern'].'~', $requested_resource)) {
                    $pattern_matched = true;
                    if (!isset($route['method']) || (strtolower($route['method']) != strtolower($method))) {
                        $route['handler']();
                    } else {
                        $this->handle_method_not_allowed();
                    }
                    break;
                }
            }
            if (!$pattern_matched) {
                $this->handle_not_found();
            }
        }

        private function handle_method_not_allowed() 
        {
            header('HTTP/1.1 405 Not Allowed');
            if (file_exists($this->method_not_allowed_template)) {
                require $this->method_not_allowed_template;
            }
        }

        private function handle_not_found() 
        {
            header('HTTP/1.1 404 Not Found');
            if (file_exists($this->not_found_template)) {
                require $this->not_found_template;
            }
        }
    }
?>