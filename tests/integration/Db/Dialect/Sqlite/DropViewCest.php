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

namespace Phalcon\Test\Integration\Db\Dialect\Sqlite;

use IntegrationTester;

/**
 * Class DropViewCest
 */
class DropViewCest
{
    /**
     * Tests Phalcon\Db\Dialect\Sqlite :: dropView()
     *
     * @param IntegrationTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function dbDialectSqliteDropView(IntegrationTester $I)
    {
        $I->wantToTest('Db\Dialect\Sqlite - dropView()');
        $I->skipTest('Need implementation');
    }
}
