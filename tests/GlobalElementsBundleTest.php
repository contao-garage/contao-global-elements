<?php

declare(strict_types=1);

/*
 * This file is part of contao-garage/contao-global-elements.
 *
 * @author    Martin Schumann <martin.schumann@ontao-garage.de>
 * @license   LGPL-3.0-or-later
 * @copyright Contao Garage 2026
 */

namespace ContaoGarage\GlobalElements\Tests;

use Contao\TestCase\ContaoTestCase;
use ContaoGarage\GlobalElements\GlobalElementsBundle;

class GlobalElementsBundleTest extends ContaoTestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new GlobalElementsBundle();
        $this->assertInstanceOf(GlobalElementsBundle::class, $bundle);
    }
}
