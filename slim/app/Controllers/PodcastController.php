<?php

namespace App\Controllers;

use App\Models\Podcast;

class PodcastController
{
  public function index($request, $response)
  {
    $podcasts = Podcast::latest()->get();

    return $response->withJson($podcasts);
  }

  public function show($request, $response, $args)
  {
    return 'sjhow';
  }
}
