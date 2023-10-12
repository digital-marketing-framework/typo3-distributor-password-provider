<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Password\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Password\DistributorPasswordInitialization;
use DigitalMarketingFramework\Typo3\Distributor\Core\Registry\EventListener\AbstractDistributorRegistryUpdateEventListener;

class DistributorRegistryUpdateEventListener extends AbstractDistributorRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorPasswordInitialization());
    }
}
