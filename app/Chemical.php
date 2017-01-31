<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chemical extends Model
{
    protected $fillable = ['title', 'description', 'price', 'volume', 'imagePath', 'weight'];

    public function resolveAbbrev($id)
    {
      $product = Chemical::find($id);
      switch ($product->weight)
      {
        case null:
          switch ($product->volume){
            case 'G':
              return 'GL';
            case 'Q':
              return 'Quart';
          }
        case 'P':
          return 'LB';
        case 'G':
          return 'g';
      }
    }
}
