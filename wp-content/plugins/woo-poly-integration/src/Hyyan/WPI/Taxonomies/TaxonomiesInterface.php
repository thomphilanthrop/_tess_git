<?php

/**
 * This file is part of the hyyan/woo-poly-integration plugin.
 * (c) Hyyan Abo Fakher <tiribthea4hyyan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hyyan\WPI\Taxonomies;

/**
 * TaxonomiesInterface
 *
 * @author Hyyan
 */
interface TaxonomiesInterface
{

    /**
     * Get array of taxonomies names
     *
     * @return array array of taxonmies names to manage by polylang
     */
    public static function getNames();
}
