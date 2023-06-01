<?php

namespace App\Helpers;

class SubdomainExtractor
{
  public static function extract($url)
  {
    $host = parse_url($url, PHP_URL_HOST);
    $hostParts = explode('.', $host);
    // Извлечение первого поддомена
    $firstSubdomain = $hostParts[0];

    return $firstSubdomain;
  }
}
