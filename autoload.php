<?php

spl_autoload_register(

    function (string $namespaceClass): void {
        $path = "/src";
        $directoryClass = str_replace("\\", DIRECTORY_SEPARATOR, $namespaceClass);
        @include_once getcwd() . $path . DIRECTORY_SEPARATOR . "{$directoryClass}.php";
    }
);
