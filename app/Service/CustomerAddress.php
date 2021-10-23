<?php

namespace App\Service;


use App\Community\StateRequestInterface;

class CustomerAddress
{
    private $addressRepository;

    public function __construct(AddressRepositoryInterface $addressRepository)
    {
        $this->addressRepository = $addressRepository;
    }

    public function changeState(StateRequestInterface $stateRequest)
    {
        $address = $this->addressRepository->load($stateRequest->getAddressId());
        $address->changeState($stateRequest->getState());
        $this->addressRepository->update($address);
    }
}
