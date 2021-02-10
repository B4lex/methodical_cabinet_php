<?
    function require_authorization($template_name) {
        if (isset($_SESSION['authorized'])) {
            require $template_name;
        } else {
            header('Location: /login');
        }
    }
?>