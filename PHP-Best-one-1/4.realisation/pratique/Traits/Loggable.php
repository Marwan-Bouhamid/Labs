<?php
declare(strict_types=1);

namespace App\Traits;

use DateTimeImmutable;

/**
 * Adds a small, testable activity log to any class.
 *
 * The trait stores messages instead of echoing them directly. That keeps the
 * model usable in a CLI demo, a test, or a future web controller without
 * changing the class. This is horizontal reuse: User does not inherit from a
 * logger class, it simply composes the trait.
 */
trait Loggable
{
    /** @var list<string> */
    private array $logEntries = [];

    protected function log(string $message, ?DateTimeImmutable $at = null): void
    {
        $timestamp = ($at ?? new DateTimeImmutable())->format('Y-m-d H:i:s');
        $this->logEntries[] = "[{$timestamp}] " . static::class . " : {$message}";
    }

    /** @return list<string> */
    public function logs(): array
    {
        return $this->logEntries;
    }
}
