<?php

namespace App\Controllers;

use App\Models\Podcast;
use Symfony\Component\HttpFoundation\{JsonResponse, Response};

class PodcastController
{
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

    return new JsonResponse($podcast);
  }
}
