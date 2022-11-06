<?php declare(strict_types=1);
/*
 * This file is part of Aplus Framework.
 *
 * (c) Natan Felles <natanfelles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
require __DIR__ . '/../autoload/src/Preloader.php';

use Framework\Autoload\Preloader;

$files = (new Preloader())->load();
echo 'Preloading Aplus Framework: ' . \PHP_EOL;
foreach ($files as $index => $file) {
    echo ++$index . ') ' . $file . \PHP_EOL;
}
echo 'Total of ' . count($files) . ' preloaded files.' . \PHP_EOL . \PHP_EOL;
