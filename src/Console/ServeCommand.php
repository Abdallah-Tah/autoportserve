<?php

namespace Amohamed\AutoportServe\Console;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

/**
 * Class ServeCommand
 * @package Amohamed\AutoportServe\Console
 * @author Abdallah Mohamed
 */
class ServeCommand extends Command
{
    protected $signature = 'serve:dynamic';

    protected $description = 'Serve the application on an available port';

    /**
     * @throws \Exception
     */
    public function handle()
    {
        $port = 8000;

        while ($this->isPortInUse($port)) {
            $port++;
        }

        $this->info("Laravel development server started: <http://127.0.0.1:{$port}>");

        $process = new Process(['php', 'artisan', 'serve', '--port', $port]);
        $process->setWorkingDirectory(base_path());
        $process->run(function ($type, $buffer) {
            $this->output->write($buffer);
        });
    }

    /**
     * @param int $port
     * @return bool
     */
    protected function isPortInUse(int $port): bool
    {
        $connection = @fsockopen('127.0.0.1', $port);

        if (is_resource($connection))
        {
            fclose($connection);
            return true;
        }

        return false;
    }
}