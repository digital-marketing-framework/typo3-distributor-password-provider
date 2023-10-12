<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Password\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Password\DistributorPasswordInitialization;
use DigitalMarketingFramework\Typo3\Core\Registry\EventListener\AbstractCoreRegistryUpdateEventListener;

class CoreRegistryUpdateEventListener extends AbstractCoreRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorPasswordInitialization());
    }
}
