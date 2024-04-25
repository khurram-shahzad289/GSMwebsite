<?php

namespace App\Libraries;

class Policy
{

    public function __construct(
        public string $name,
        public string $href,
        public ?string $target="_blank"
    )
    {}
}
