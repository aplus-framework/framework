<?php declare(strict_types=1);
/*
 * This file is part of Aplus Framework.
 *
 * (c) Natan Felles <natanfelles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
require __DIR__ . '/../autoload/src/Autoloader.php';

use Framework\Autoload\Autoloader;

$aplusDir = dirname(__DIR__) . \DIRECTORY_SEPARATOR;

return (new Autoloader())->setClasses([
    'Aplus' => __DIR__ . '/src/Aplus.php',
])->setNamespaces([
    'Framework\Autoload' => $aplusDir . 'autoload/src',
    'Framework\Cache' => $aplusDir . 'cache/src',
    'Framework\CLI' => $aplusDir . 'cli/src',
    'Framework\CLI\Commands' => $aplusDir . 'dev-commands/src',
    'Framework\Config' => $aplusDir . 'config/src',
    'Framework\Crypto' => $aplusDir . 'crypto/src',
    'Framework\Database' => $aplusDir . 'database/src',
    'Framework\Database\Extra' => $aplusDir . 'database-extra/src',
    'Framework\Date' => $aplusDir . 'date/src',
    'Framework\Debug' => $aplusDir . 'debug/src',
    'Framework\Email' => $aplusDir . 'email/src',
    'Framework\Events' => $aplusDir . 'events/src',
    'Framework\Factories' => $aplusDir . 'factories/src',
    'Framework\Helpers' => $aplusDir . 'helpers/src',
    'Framework\HTTP' => $aplusDir . 'http/src',
    'Framework\HTTP\Client' => $aplusDir . 'http-client/src',
    'Framework\Image' => $aplusDir . 'image/src',
    'Framework\Language' => $aplusDir . 'language/src',
    'Framework\Log' => $aplusDir . 'log/src',
    'Framework\MVC' => $aplusDir . 'mvc/src',
    'Framework\Pagination' => $aplusDir . 'pagination/src',
    'Framework\Routing' => $aplusDir . 'routing/src',
    'Framework\Session' => $aplusDir . 'session/src',
    'Framework\Validation' => $aplusDir . 'validation/src',
]);
