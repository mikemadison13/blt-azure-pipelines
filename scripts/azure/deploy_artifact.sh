#!/usr/bin/env bash

set -ev

blt artifact:deploy --commit-msg "Automated commit by Azure Pipelines for Build ${Build.BuildId}" --branch "${Build.SourceBranch}-build" --no-interaction --verbose

set +v
