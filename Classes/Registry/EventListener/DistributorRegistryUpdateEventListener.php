<?php

namespace DigitalMarketingFramework\Typo3\Distributor\PasswordProvider\Registry\EventListener;

use DigitalMarketingFramework\Distributor\PasswordProvider\DistributorPasswordInitialization;
use DigitalMarketingFramework\Typo3\Distributor\Core\Registry\EventListener\AbstractDistributorRegistryUpdateEventListener;

class DistributorRegistryUpdateEventListener extends AbstractDistributorRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorPasswordInitialization());
    }
}
