<?php
declare(strict_types=1);

/**
 * Tiny PSR-4-style autoloader for the two namespace roots used by the lab.
 *
 * - PhpLab\  -> 4.realisation/src/
 * - App\     -> 4.realisation/pratique/
 *
 * No Composer is required. The mapping is explicit so learners can see how a
 * namespace prefix becomes a directory path.
 */
spl_autoload_register(static function (string $class): void {
    $roots = [
        'PhpLab\\' => __DIR__ . '/src/',
        'App\\' => __DIR__ . '/pratique/',
    ];

    foreach ($roots as $prefix => $directory) {
        if (!str_starts_with($class, $prefix)) {
            continue;
        }

        $relativeClass = substr($class, strlen($prefix));
        $file = $directory . str_replace('\\', DIRECTORY_SEPARATOR, $relativeClass) . '.php';

        if (is_file($file)) {
            require $file;
        }

        return;
    }
});
