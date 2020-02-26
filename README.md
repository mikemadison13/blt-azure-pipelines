Acquia BLT Azure Pipelines integration
====

This is an [Acquia BLT](https://github.com/acquia/blt) plugin providing [Azure Devops Pipelines](https://azure.microsoft.com/en-us/services/devops/pipelines/) integration.

This plugin is **community-created** and **community-supported**. Acquia does not provide any direct support for this software or provide any warranty as to its stability.

## Installation and usage

To use this plugin, you must already have a Drupal project using BLT 10 (or higher).

In your project, require the plugin with Composer:

`composer require mikemadison13/blt-azure-pipelines`

Initialize the Azure integration by calling `recipes:ci:azure:init`, which is provided by this plugin:

`blt recipes:ci:azure:init`

This will copy a template Makefile to your project root directory. Make sure to commit this as well as your updated composer.json to Git.

### SSH / Deploy Configuration

By default, this plugin uses the `InstallSSHKey@0` at the front of the build to prep for the eventual deployment (on merges into the upstream repository).

We have provided sensible default variables (for the known_hosts entry and public key) and secure file name (for the private key).

In order to set the variables, see the [docs](https://docs.microsoft.com/en-us/azure/devops/pipelines/process/variables?view=azure-devops&tabs=classic%2Cbatch) for Azure Pipelines. However, we strongly urge setting the variables via the UI (classic) as opposed to placing the public key directly in your YAML file.

The private key should be uploaded via secure files (in the Pipelines library, see the [docs](https://docs.microsoft.com/en-us/azure/devops/pipelines/library/secure-files?view=azure-devops) for Azure Pipelines.

#### Variable / File Names

* Create a variable called "host" and paste the complete known_hosts entry for your server into this variable. 
* Create a variable called "public" and paste the complete public key into this variable
* Create a secure file called "private" and paste the complete private key into this variable

Note for variables: we advise setting the "Keep this value secret" option on creation of variables.

Note for secure files: you will have to either authorize the use of the secure file for the appropriate pipeline(s) before the build(s) will have acccess to the file.    

# License

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License version 2 as published by the Free Software Foundation.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
