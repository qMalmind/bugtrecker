<?php

namespace App\Console\Commands\Action;

use Illuminate\Console\Command;

use App\Models\Action;
use App\Actions\ActionActions;

class CreateAction extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'action:create {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Создаёт действие';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $action_name = $this->argument("name");
        $description = $this->ask("Укажите описание (необязательно)");
        $action_description = $description ?? $description;
        $action = ActionActions::Create(name:$action_name, description:$action_description);
        if($action->id_action){
            $this->line("<fg=white;bg=green>Действие успешно добавлено</>");
        }else{
            $this->line("<fg=white;bg=red>При создании действия произошла ошибка</>");
        }
        
        $this->line("Action id: {$action->id_action}");
        $this->line("Action name: {$action->action_name}");
        $this->line("Action description: {$action->action_description}");
    }
}
