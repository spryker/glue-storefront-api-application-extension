<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueStorefrontApiApplicationExtension\Dependency\Plugin;

use Symfony\Component\Routing\RouterInterface;

/**
 * Interface for a router that proxies routing to other routers.
 */
interface RouterPluginInterface
{
    /**
     * Specification:
     * - Returns a `RouterInterface` which is added to the `ChainRouter` for StorefrontApiApplication.
     *
     * @api
     *
     * @return \Symfony\Component\Routing\RouterInterface
     */
    public function getRouter(): RouterInterface;
}
