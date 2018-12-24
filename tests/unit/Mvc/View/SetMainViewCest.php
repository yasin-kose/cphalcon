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

namespace Phalcon\Test\Unit\Mvc\View;

use UnitTester;

/**
 * Class SetMainViewCest
 */
class SetMainViewCest
{
    /**
     * Tests Phalcon\Mvc\View :: setMainView()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function mvcViewSetMainView(UnitTester $I)
    {
        $I->wantToTest('Mvc\View - setMainView()');
        $I->skipTest('Need implementation');
    }
}
