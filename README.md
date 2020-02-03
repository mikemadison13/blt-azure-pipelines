Acquia BLT Azure Pipelines integration
====

This is an [Acquia BLT](https://github.com/acquia/blt) plugin providing [Azure Devops Piipelines](https://azure.microsoft.com/en-us/services/devops/pipelines/) integration.

This plugin is **community-created** and **community-supported**. Acquia does not provide any direct support for this software or provide any warranty as to its stability.

## Installation and usage

To use this plugin, you must already have a Drupal project using BLT 10 (or higher).

In your project, require the plugin with Composer:

`composer require mikemadison13/blt-azure-pipelines`

Initialize the Tugboat integration by calling `recipes:ci:tugboat:init`, which is provided by this plugin:

`blt recipes:ci:azure:init`

This will copy a template Makefile to your project root directory. Make sure to commit this as well as your updated composer.json to Git.

# License

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License version 2 as published by the Free Software Foundation.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
