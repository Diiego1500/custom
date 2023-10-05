<?php

namespace Drupal\Tests\project_suma\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\project_suma\Controller\SumaController;

class SumaControllerTest extends UnitTestCase {

  protected $controller;

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
    // Inicializa el controlador.
    $this->controller = new SumaController();
  }

  public function testSuma() {
    // Ahora puedes utilizar $this->controller en tus pruebas.
    $this->assertTrue($this->controller->suma(2, 3), 'La suma de 2 y 3 es mayor que 0');
    $this->assertTrue($this->controller->suma(-1, 5), 'La suma de -1 y 5 es mayor que 0');
    $this->assertFalse($this->controller->suma(-2, -3), 'La suma de -2 y -3 no es mayor que 0');
    $this->assertFalse($this->controller->suma(0, 0), 'La suma de 0 y 0 no es mayor que 0');
  }
}
