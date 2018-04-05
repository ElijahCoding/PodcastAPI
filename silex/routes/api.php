<?php

use App\Models\Podcast;
use Symfony\Component\HttpFoundation\JsonResponse;

$app->get('/podcasts', function () {
  $podcasts = Podcast::get();

  return new JsonResponse($podcasts);
});
