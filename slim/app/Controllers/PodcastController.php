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
    $podcast = Podcast::find($args['id']);

    if ($podcast === null) {
      return $response->withStatus(404)->withJson([
        'errors' => [
          'title' => 'Podcast not found'
          ]
      ]);
    }

    return $response->withJson($podcast);
  }
}
