<?php

namespace jnmorse;

class DataUri
{
    public static function make ($file)
    {
        $img = new DataUri\DataUriRepository(new DataUri\Image($file));
        return $img;
    }
}