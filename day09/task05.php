<?php
function form_is_submitted() {
    $submit = $_POST["submit"];
    if (isset($_POST["submit"])) {
        return true;
    } else {
        return false;
    }
}

function whoami() {
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $age = isset($_POST["age"]) ? $_POST["age"] : "";
    $curriculum = isset($_POST["curriculum"]) ? $_POST["curriculum"] : "";

    if (empty($name)) {
        if (empty($age)) {
            if (empty($curriculum)) {
                echo("Hi, I have no name.\n");
            } else {
                echo("Hi, I have no name. I'm a student of $curriculum.\n");
            }     
        } else {
            if (empty($curriculum)) {
                echo("Hi, I have no name and I'm $age years old.\n");
            } else {
                echo("Hi, I have no name and I'm $age years old. I'm a student of $curriculum.\n");
            }                   
        }
    } else {
        if (empty($age)) {
            if (empty($curriculum)) {
                echo("Hi, my name is $name.\n");
            } else {
                echo("Hi, my name is $name. I'm a student of $curriculum.\n");
            }
        } else {
            if (empty($curriculum)) {
                echo("Hi, my name is $name and I'm $age years old.\n");
            } else {
                echo("Hi, my name is $name and I'm $age years old. I'm a student of $curriculum.\n");
            }
        }
    }
}
?>
