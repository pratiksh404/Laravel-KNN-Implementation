<?php

namespace App\Console\Commands;

use App\Imports\FutsalImport;
use Illuminate\Console\Command;

class FutsalImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:futsal';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to import futsal';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->output->title('Starting import');
        file_exists(public_path('futsal.xlsx'))
            ? (new FutsalImport)->withOutput($this->output)->import(public_path('futsal.xlsx'))
            : $this->output->error('File not found');
        $this->output->success('Import successful');
    }
}
