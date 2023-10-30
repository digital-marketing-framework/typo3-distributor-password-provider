<?php

namespace DigitalMarketingFramework\Typo3\Distributor\PasswordProvider\Registry\EventListener;

use DigitalMarketingFramework\Distributor\PasswordProvider\DistributorPasswordInitialization;
use DigitalMarketingFramework\Typo3\Core\Registry\EventListener\AbstractCoreRegistryUpdateEventListener;

class CoreRegistryUpdateEventListener extends AbstractCoreRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorPasswordInitialization('dmf_distributor_password'));
    }
}
