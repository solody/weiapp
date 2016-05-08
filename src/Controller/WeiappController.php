<?php
namespace Drupal\weiapp\Controller;

use Drupal\Core\Controller\ControllerBase;

class WeiappController extends ControllerBase 
{
    public function content() {
        return array(
            '#type' => 'markup',
            '#markup' => $this->t('Hello, World!'),
        );
    }
}

?>