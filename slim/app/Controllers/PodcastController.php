<?php

namespace App\Controllers;

use App\Models\Podcast;
use League\Fractal\{Resource\Item};
use App\Transformers\PodcastTransformer;
use App\Controllers\Controller;

class PodcastController extends Controller
{
  public function index($request, $response)
  {
    $podcasts = Podcast::latest()->get();

    return $response->withJson($podcasts);
  }

  public function show($request, $response, $args)
  {
    die($this->c->test);
    $podcast = Podcast::find($args['id']);

    if ($podcast === null) {
      return $response->withStatus(404)->withJson([
        'errors' => [
          'title' => 'Podcast not found'
          ]
      ]);
    }

    $transformer = (new Item($podcast,new PodcastTransformer));


    return $response->withJson($transformer);
  }
}
