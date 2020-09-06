<?php

namespace Domain\Task\Enums;

use MyCLabs\Enum\Enum;

class TaskStatus extends Enum
{
  private const COMPLETE = 'complete';
  private const INCOMPLETE = 'incomplete';

  public static function status($value): string
  {
    switch ($value)
    {
      case self::COMPLETE:
        return 'line-through';
        break;
      case self::INCOMPLETE:
        return 'none';
        break;
      default:
        return 'none';
    }
  }
}
