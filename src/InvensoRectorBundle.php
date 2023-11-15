<?php

namespace Invenso\Rector;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class InvensoRectorBundle extends Bundle
{
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);
    }
}
