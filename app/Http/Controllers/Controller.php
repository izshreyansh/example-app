<?php

namespace App\Http\Controllers;

use App\Community\StateRequestFactoryInterface;
use App\Service\CustomerAddress;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $factory;
    private $service;

    public function __construct(StateRequestFactoryInterface $factory, CustomerAddress $service)
    {
        $this->service = $service;
    }

    public function changeStateAction()
    {
        $this->service->changeState(
            $this->factory->createFromGET()
        );
    }
}
