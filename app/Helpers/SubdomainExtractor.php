<?php

namespace App\Helpers;

class SubdomainExtractor
{
  public static function extract($url)
  {
    $host = parse_url($url, PHP_URL_HOST);
    $hostParts = explode('.', $host);
    $subdomain = array_shift($hostParts);

    return $subdomain;
  }
}
