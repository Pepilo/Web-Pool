<?php
function whoami() {
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $age = isset($_POST["age"]) ? $_POST["age"] : "";

    if (empty($name)) {
        if (empty($age)) {
            echo("Hi, I have no name.\n");     
        } else {
            echo("Hi, I have no name and I'm $age years old.\n");                
        }
    } else {
        if (empty($age)) {
            echo("Hi, my name is $name.\n");
        } else {
            echo("Hi, my name is $name and I'm $age years old.\n");
        }
    }
}
?>