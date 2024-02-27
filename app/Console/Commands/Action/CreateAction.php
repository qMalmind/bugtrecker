<?php

namespace App\Console\Commands\Action;

use Illuminate\Console\Command;

use App\Models\Action;

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
        $action = new Action();
        $action->action_name = $this->argument("name");
        $description = $this->ask("Укажите описание (необязательно)");
        if($description){
            $action->action_description = $description;
        }
        $status_save = $action->save();

        if($status_save){
            $this->line("<fg=white;bg=green>Действие успешно добавлено</>");
        }else{
            $this->line("<fg=white;bg=red>При создании действия произошла ошибка</>");
        }
        $this->line("Action name: {$action->action_name}");
        $this->line("Action description: {$action->action_description}");
    }
}
