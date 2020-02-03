#!/usr/bin/env bash

set -ev

export PATH=${COMPOSER_BIN}:$PATH

# Set the git configuration
git config --global user.name "Azure-CI"
git config --global user.email "noreply@azure.com"

# Create a MySQL database for drupal to use
mysql -u root -proot -e "CREATE DATABASE drupal; CREATE USER 'drupal'@'localhost' IDENTIFIED BY 'drupal'; GRANT ALL ON drupal.* TO 'drupal'@'localhost';"

set +v
