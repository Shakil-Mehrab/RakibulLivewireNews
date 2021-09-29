<?php

namespace App\Actions\Future\Contracts\Task;

interface UpdateTasks
{
    public function update($task, array $input);
}
