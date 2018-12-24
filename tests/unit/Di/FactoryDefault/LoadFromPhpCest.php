<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Di\FactoryDefault;

use UnitTester;

/**
 * Class LoadFromPhpCest
 */
class LoadFromPhpCest
{
    /**
     * Tests Phalcon\Di\FactoryDefault :: loadFromPhp()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function diFactorydefaultLoadFromPhp(UnitTester $I)
    {
        $I->wantToTest('Di\FactoryDefault - loadFromPhp()');
        $I->skipTest('Need implementation');
    }
}
