<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueStorefrontApiApplicationExtension\Dependency\Plugin;

use Symfony\Component\Routing\RouteCollection;

/**
 * Use this plugin for adding routes to the GlueBackendApiApplication.
 */
interface RouteProviderPluginInterface
{
    /**
     * Specification:
     * - Adds routes to the `RouteCollection`.
     * - Returns a `RouteCollection`.
     *
     * @api
     *
     * @param \Symfony\Component\Routing\RouteCollection $routeCollection
     *
     * @return \Symfony\Component\Routing\RouteCollection
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection;
}
