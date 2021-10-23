<?php

namespace App\Community;

use Community\AddressRepositoryInterface;
use Community\CustomerAddress;
use Community\StateRequestInterface;

interface AvailableStateRepositoryInterface
{
    /**
     * @return StateInterface|null */
    public function getByName(string $name);
}
