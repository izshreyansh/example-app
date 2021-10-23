<?php

namespace App\Community;


interface StateRequestInterface
{
    public function getAddressId(): string;
    public function getState(): string;
}
