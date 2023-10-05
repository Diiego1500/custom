<?php

namespace Drupal\project_suma\Services;

class SumaService {
  public function suma($a, $b) {
    $suma = ($a + $b);
    if ($suma > 0) {
      return true;
    }
    return false;
  }
}
