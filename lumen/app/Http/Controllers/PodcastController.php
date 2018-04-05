<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Transformers\PodcastTransformer;

class PodcastController extends Controller
{
    public function index()
    {
      $podcasts = Podcast::paginate(2);

      return fractal($podcasts, new PodcastTransformer)->toArray();
    }

    public function show($id)
    {
      $podcast = Podcast::find($id);

      if ($podcast === null) {
        return response(null, 404);
      }

      return fractal($podcast, new PodcastTransformer)->toArray();
    }
}
