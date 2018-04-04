<?php

namespace App\Controllers;

use App\Models\Podcast;
use League\Fractal\{Resource\Item,Resource\Collection};
use App\Transformers\PodcastTransformer;
use App\Controllers\Controller;

class PodcastController extends Controller
{
  public function index($request, $response)
  {
    $podcasts = Podcast::latest()->get();

    $transformer = new Collection($podcasts, new PodcastTransformer);

    return $response->withJson($this->c->fractal->createData($transformer)->toArray());
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

    $transformer = (new Item($podcast,new PodcastTransformer));


    return $response->withJson($this->c->fractal->createData($transformer)->toArray());
  }
}
