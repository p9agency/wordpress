<?php

$files = array_merge (
        glob (__DIR__.'/functions/*/*.php'),
        glob (__DIR__.'/functions/*.php')
);

if(!empty($files)) {
    array_walk ($files, function ($file) {
            require_once $file;
    });
}

