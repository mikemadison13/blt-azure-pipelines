<?php

namespace Acquia\Blt\Plugin\EnvironmentDetector;

use Acquia\Blt\Robo\Common\EnvironmentDetector;

class AzureDetector extends EnvironmentDetector {
  public static function getCiEnv() {
    if (isset($_SERVER['PIPELINE_WORKSPACE'])) {
      return 'AZURE_PIPELINES';
    }
  }
}
