<?php

namespace Domain\Task\DTO;

use Spatie\DataTransferObject\DataTransferObject;
use App\Web\Task\Requests\TaskRequest;

class TaskData extends DataTransferObject
{
  /** @var string **/
  public $task;

  /** @var string|null **/
  public $category;

  public static function fromRequest(TaskRequest $taskRequest): TaskData
  {
    return new Self([
      'task' => $taskRequest['task'],
      'category' => $taskRequest['category']
    ]);
  }


}
