<?php

namespace App\Console\Commands\Action;

use App\Models\Action;
use Illuminate\Console\Command;

class UpdateAction extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'action:update {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Обновление действия';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $action = new Action();
        $action = $action->where("id_action", $this->argument('id'))->first();

        $this->line("id: " . $action->id_action);
        $this->line("action_name: " . $action->action_name);
        $this->line("action_description: " . $action->action_description);

        if($action_name = $this->ask("Новое название действия")){
            $action->action_name = $action_name;
        }

        if($action_description = $this->ask("Новое описание действия")){
            $action->action_description = $action_description;
        }
        if($action->save()){
            $this->info("id: " . $action->id_action);
            $this->info("action_name: " . $action->action_name);
            $this->info("action_description: " . $action->action_description);
        }else{
            $this->error("При обновлении действия возникла ошибка");
        }
    }
}
