<?php

namespace App\Services;

use Illuminate\Support\Str;

class SlugParserService
{
  public function parse($tableName, $fieldName)
  {
    $modelClass = "App\\Models\\" . ucfirst(Str::camel($tableName));

    if (!class_exists($modelClass)) {
      throw new \InvalidArgumentException("Model class '$modelClass' does not exist.");
    }

    $model = new $modelClass();

    if (!$model->getTable()) {
      throw new \InvalidArgumentException("Table '$tableName' does not exist in the database.");
    }

    if (!$model->hasColumn($fieldName)) {
      throw new \InvalidArgumentException("Field '$fieldName' does not exist in the table '$tableName'.");
    }

    $items = $model->all();

    foreach ($items as $item) {
      $value = $item->{$fieldName};

      if (empty($value)) {
        continue;
      }

      $slug = Str::slug($value);
      $item->slug = $slug;
      $item->save();
    }

    return count($items);
  }
}
