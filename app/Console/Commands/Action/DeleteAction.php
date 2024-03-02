<?php

namespace App\Console\Commands\Action;

use Illuminate\Console\Command;

use App\Models\Action;
use App\Actions\ActionActions;

class DeleteAction extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'action:delete {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Удаляет действие по id';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        if(
            $this->confirm("Удалить действие?0_О")
        ){
            $delete_status = ActionActions::Delete($this->argument("id"));
            if($delete_status){
                $this->line("<fg=white;bg=green>Действие успешно удалёно</>");
            }
        }else{
            $this->line("<fg=white;bg=red>При удалении действия произошла ошибка.</>");
        }
    }
}
