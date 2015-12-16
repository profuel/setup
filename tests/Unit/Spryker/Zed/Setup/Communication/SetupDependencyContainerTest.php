<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Unit\Spryker\Zed\Setup\Communication;

use Spryker\Zed\Kernel\AbstractUnitTest;
use Spryker\Zed\Setup\Communication\SetupDependencyContainer;

/**
 * @method SetupDependencyContainer getCommunicationFactory()
 */
class SetupDependencyContainerTest extends AbstractUnitTest
{

    /**
     * @return void
     */
    public function testCreateSetupInstallCommandNamesMustReturnArray()
    {
        $communicationFactory = $this->getCommunicationFactory();

        $this->assertInternalType('array', $communicationFactory->createSetupInstallCommandNames());
    }

}
