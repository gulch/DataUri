<?php

namespace jnmorse\DataUri;

class DataUriRepository
{
    private $image;

    public function __construct (Image $img)
    {
        $this->image = $img;
    }

    public function __toString ()
    {
        return (String) $this->image;
    }
}