<?php

namespace App\Controllers;

use App\Models\Podcast;
use App\Transformers\PodcastTransformer;
use Symfony\Component\HttpFoundation\{JsonResponse, Response};
use League\Fractal\{
  Manager as Fractal,
  Resource\Item,
  Resource\Collection
};

class PodcastController
{
  protected $fractal;

  public function __construct(Fractal $fractal)
  {
    $this->fractal = $fractal;
  }

  public function index()
  {
    $podcasts = Podcast::get();

    return new JsonResponse($podcasts);
  }

  public function show($id)
  {
    $podcast = Podcast::find($id);

    // if ($podcast === null) {
    //   return new JsonResponse([
    //     'error' => [
    //       'title' => 'Podcast not found.'
    //     ]
    //   ], 404);
    // }

    if ($podcast === null) {
      return new Response(null, 404);
    }

    $transformer = new Item($podcast, new PodcastTransformer);

    return new JsonResponse($this->fractal->createData($transformer)->toArray());
  }
}
