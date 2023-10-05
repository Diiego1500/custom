<?php

namespace Drupal\project_suma\Controller;

use Drupal\Core\Controller\ControllerBase;

class SumaController extends ControllerBase
{  public function suma($num1, $num2) {
    // Realiza la suma y verifica si es mayor que 0.
    if ($num1 + $num2 > 0) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
}
