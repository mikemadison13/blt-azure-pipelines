<?php

namespace Acquia\AzurePipelines\Blt\Plugin\Commands;

use Acquia\Blt\Robo\BltTasks;
use Acquia\Blt\Robo\Exceptions\BltException;
use Robo\Contract\VerbosityThresholdInterface;

/**
 * Defines commands related to Tugboat.
 */
class AzureCommands extends BltTasks {

  /**
   * Initializes default Azure Pipelines configuration for this project.
   *
   * @command recipes:ci:azure:init
   * @throws \Acquia\Blt\Robo\Exceptions\BltException
   */
  public function azureInit() {
    $result = $this->taskFilesystemStack()
      ->copy($this->getConfigValue('repo.root') . '/vendor/mikemadison13/blt-azure-pipelines/azure-pipelines.yml', $this->getConfigValue('repo.root') . '/azure-pipelines.yml', TRUE)
      ->stopOnFail()
      ->setVerbosityThreshold(VerbosityThresholdInterface::VERBOSITY_VERBOSE)
      ->run();

    if (!$result->wasSuccessful()) {
      throw new BltException("Could not initialize Azure configuration.");
    }

    $this->say("<info>A pre-configured Azure Pipelines file was copied to your repository root.</info>");
  }

}
