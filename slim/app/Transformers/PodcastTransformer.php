<?php

namespace App\Transformers;

use App\Models\Podcast;
use League\Fractal\TransformerAbstract;

class PodcastTransformer extends TransformerAbstract
{
  public function transform(Podcast $podcast)
  {
    return [
      'id' => $podcast->id
    ];
  }
}
