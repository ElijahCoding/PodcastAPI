<?php

namespace App\Transformers;

use App\Models\Podcast;
use League\Fractal\TransformerAbstract;

class PodcastTransformer extends TransformerAbstract
{
  public function transform(Podcast $podcast)
  {
    return [
      'id' => $podcast->id,
      'title' => $podcast->title,
      'description' => $podcast->description,
      'files' => [
        'mp3' => $podcast->file_mp3,
        'ogg' => $podcast->file_ogg
      ],

      'created_at' => $podcast->created_at->toDateTimeString(),
      'created_at_human' => $podcast->created_at->diffForHumans()
    ];
  }
}
