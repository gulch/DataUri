<?php

namespace jnmorse\DataUri;

class Image
{
    private $file;
    private $type;

    public function __construct ($file)
    {
        if (file_exists($file)) {
            $this->type = mime_content_type($file);
            $this->file = base64_encode(file_get_contents($file));
        } else {
            throw new \Exception("image: {$file}, is not found!");            
        }
    }

    public function __toString ()
    {
        $uri  = "data: {$this->type};base64,{$this->file}";

        return $uri;
    }
}