<?php

namespace App\Http\Controllers;

use App\Models\Podcast;

class PodcastController extends Controller
{
    public function index()
    {
      $podcasts = Podcast::get();

      return $podcasts;
    }

    public function show($id)
    {
      $podcast = Podcast::find($id);

      return $podcast;
    }
}
