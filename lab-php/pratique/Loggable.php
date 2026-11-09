<?php

namespace App\Traits;

/**
 * Logging trait for tracking actions
 */
trait Loggable {
    public function log(string $message): void {
        $timestamp = date('Y-m-d H:i:s');
        echo "[LOG][$timestamp] " . static::class . " : $message\n";
    }
}
