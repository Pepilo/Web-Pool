<?php
function render_body($parametre) {
    switch($parametre) {
        case "home":
            return file_get_contents('./home.html');
            break;
        case "php":
            return file_get_contents('./php.html');
            break;
        case "sql":
            return file_get_contents('./sql.html');
            break;
        default:
            return "<p>Unknown page</p>";
    }
}
?>