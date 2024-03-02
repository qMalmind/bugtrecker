<?php 

namespace app\Actions;

use App\Models\Action;

class ActionActions{
    public static function Create(string $name, string $description = null):Action{ 
        $action = new Action();
        $action->action_name = $name;
        $action->action_description = $description;
        $action->save();
        return $action;
    }

    public static function List(array $select = []){
        return $select?Action::all($select):Action::all();
    }

    public static function Delete(int $id_action):bool|null{
        $action = new Action();
        $action = Action::where('id_action', $id_action)->first();
        return $action ? $action->delete(): null;
    }

    public static function Update(int $id_action, Array $data):bool{
        $action = Action::where('id_action', $id_action)->Update($data);
        return $action;
    }

}

?>