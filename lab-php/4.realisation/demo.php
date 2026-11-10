<?php
declare(strict_types=1);

use App\Exceptions\ValidationException;
use App\Models\User;
use PhpLab\Domain\Project;
use PhpLab\Domain\Task;
use PhpLab\Domain\TaskBoard;
use PhpLab\ErrorHandling\WarningToException;
use PhpLab\Exceptions\TaskNotFoundException;
use PhpLab\Reporting\Task as ReportingTask;

require __DIR__ . '/bootstrap.php';

$line = static function (string $label, string $value): void {
    printf("%-22s %s%s", $label, $value, PHP_EOL);
};

echo 'PHP Lab demo — PHP ' . PHP_VERSION . PHP_EOL;
echo str_repeat('=', 64) . PHP_EOL;

echo PHP_EOL . '1. Namespaces: same short name, two full names' . PHP_EOL;
$domainTask = new Task(7, 'Prepare the PHP lab');
$reportingTask = new ReportingTask('Task report: 7');
$line('Domain task:', $domainTask::class . ' #' . $domainTask->id() . ' "' . $domainTask->title() . '"');
$line('Reporting task:', $reportingTask::class . ' "' . $reportingTask->text() . '"');
echo 'Both classes are named Task, but their fully qualified names differ.' . PHP_EOL;

echo PHP_EOL . '2. Traits: shared timestamp behavior' . PHP_EOL;
$initial = new DateTimeImmutable('2026-01-15T10:00:00+00:00');
$later = new DateTimeImmutable('2026-01-16T10:00:00+00:00');
$task = new Task(11, 'Write tests', $initial);
$project = new Project(2, 'PHP lab', $initial);

$task->markUpdated($later);
$line('Task created at:', $task->createdAt()->format('Y-m-d H:i:s'));
$line('Task updated at:', $task->updatedAt()->format('Y-m-d H:i:s'));
$line('Project created at:', $project->createdAt()->format('Y-m-d H:i:s'));
$line('Project updated at:', $project->updatedAt()->format('Y-m-d H:i:s') . ' (unchanged)');
echo 'Task and Project both use HasTimestamps, yet each object keeps its own values.' . PHP_EOL;

echo PHP_EOL . '3. A second trait and a custom exception: the User model' . PHP_EOL;
$user = new User('Alice', 'alice@example.com');
$line('User created:', $user->name() . ' <' . $user->email() . '>');
$line('User log entry:', $user->logs()[0] ?? '(none)');
echo 'User composes Loggable; it does not inherit from a logger class.' . PHP_EOL;

foreach ([
    ['name', static fn () => new User('   ', 'valid@example.com')],
    ['email', static fn () => new User('Bob', 'not-an-email')],
] as [$field, $operation]) {
    try {
        $operation();
    } catch (ValidationException $exception) {
        $line(
            'Caught validation:',
            $exception->getMessage()
            . " [field={$exception->field()}, code={$exception->getCode()}]",
        );
    }
}

echo PHP_EOL . '4. Domain exception: unknown task' . PHP_EOL;
$board = new TaskBoard([$domainTask]);
try {
    $board->find(99);
} catch (TaskNotFoundException $exception) {
    $line('Caught lookup:', $exception->getMessage());
}
$line('Known lookup:', $board->find(7)->title());

echo PHP_EOL . '5. Controlled warning converted to an exception' . PHP_EOL;
WarningToException::register();
try {
    trigger_error('Lab warning', E_USER_WARNING);
} catch (ErrorException $exception) {
    $line('Caught warning:', $exception->getMessage() . ' [severity=E_USER_WARNING]');
} finally {
    WarningToException::restore();
}

echo PHP_EOL . 'Demo completed. Run the checks with: php 4.realisation/tests/run.php' . PHP_EOL;
