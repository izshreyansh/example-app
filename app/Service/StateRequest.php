<?php

namespace App\Service;

use App\Community\{StateRequestFactoryInterface, StateRequestInterface};

class StateRequest implements StateRequestFactoryInterface, StateRequestInterface
{
    public function createFromGET(): StateRequestInterface
    {
        $request = new StateRequest();
        $request->addressId = (string)($_GET['address_id'] ?? '');
        $request->state = (string)($_GET['state'] ?? '');

        return $request;
    }

    public function getAddressId(): string
    {
        return $this->addressId;
    }

    public function getState(): string
    {
        return $this->state;
    }
}
