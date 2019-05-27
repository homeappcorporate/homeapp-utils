<?php

namespace Homeapp\UtilsBundle;

use Homeapp\UtilsBundle\DependencyInjection\ApiResponseExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class UtilsBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new ApiResponseExtension();
    }
}
