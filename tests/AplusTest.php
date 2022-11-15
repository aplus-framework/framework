<?php
/*
 * This file is part of Aplus Framework.
 *
 * (c) Natan Felles <natanfelles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests;

use Aplus;
use PHPUnit\Framework\TestCase;

/**
 * Class AplusTest.
 */
final class AplusTest extends TestCase
{
    public function testVersion() : void
    {
        self::assertMatchesRegularExpression(
            '#^[0-9]{2}\.\d\.\d$#',
            Aplus::VERSION
        );
    }
}
