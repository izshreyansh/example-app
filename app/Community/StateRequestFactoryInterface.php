<?php

namespace App\Community;


interface StateRequestFactoryInterface
{
    public function createFromGET(): StateRequestInterface;
}
