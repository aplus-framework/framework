<?php declare(strict_types=1);
/*
 * This file is part of Aplus Framework.
 *
 * (c) Natan Felles <natanfelles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
// NOTE: This file is designed to work in a global installation with Composer or similar.
require __DIR__ . '/../autoload/src/Autoloader.php';

use Aplus\Autoload\Autoloader;

$aplusDir = dirname(__DIR__) . \DIRECTORY_SEPARATOR;

return new Autoloader()->setClasses([
    'Aplus' => __DIR__ . '/src/Aplus.php',
])->setNamespaces([
    'Aplus\Autoload' => $aplusDir . 'autoload/src',
    'Aplus\Cache' => $aplusDir . 'cache/src',
    'Aplus\Cli' => $aplusDir . 'cli/src',
    'Aplus\Cli\Commands' => $aplusDir . 'dev-commands/src',
    'Aplus\Config' => $aplusDir . 'config/src',
    'Aplus\Crypto' => $aplusDir . 'crypto/src',
    'Aplus\Database' => $aplusDir . 'database/src',
    'Aplus\Database\Extra' => $aplusDir . 'database-extra/src',
    'Aplus\Date' => $aplusDir . 'date/src',
    'Aplus\Debug' => $aplusDir . 'debug/src',
    'Aplus\Email' => $aplusDir . 'email/src',
    'Aplus\Events' => $aplusDir . 'events/src',
    'Aplus\Factories' => $aplusDir . 'factories/src',
    'Aplus\Helpers' => $aplusDir . 'helpers/src',
    'Aplus\Http' => $aplusDir . 'http/src',
    'Aplus\Http\Client' => $aplusDir . 'http-client/src',
    'Aplus\Image' => $aplusDir . 'image/src',
    'Aplus\Language' => $aplusDir . 'language/src',
    'Aplus\Log' => $aplusDir . 'log/src',
    'Aplus\Mvc' => $aplusDir . 'mvc/src',
    'Aplus\Pagination' => $aplusDir . 'pagination/src',
    'Aplus\Routing' => $aplusDir . 'routing/src',
    'Aplus\Session' => $aplusDir . 'session/src',
    'Aplus\Validation' => $aplusDir . 'validation/src',
]);
