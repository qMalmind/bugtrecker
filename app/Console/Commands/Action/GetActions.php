<?php

namespace App\Console\Commands\Action;

use App\Models\Action;
use Illuminate\Console\Command;
use App\Actions\ActionActions;

class GetActions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'action:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Получить действия';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->table(
            ['ID', 'Action name', 'Action description'],
            ActionActions::List(["id_action", "action_name", "action_description"])->toArray()
        );
    }
}
