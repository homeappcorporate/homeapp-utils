<?php

namespace ApiResponseBundle;

use ApiResponseBundle\DependencyInjection\ApiResponseExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApiResponseBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new ApiResponseExtension();
    }
}
