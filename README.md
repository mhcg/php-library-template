# PHP Project Template

[![Build Status](https://travis-ci.com/mhcg/php-library-template.svg?branch=master)](https://travis-ci.com/mhcg/php-library-template)

## Overview

A set of files that can be used to kick-start a new PHP project developed using Visual Studio Code.

The goals being to provide a quick way to start a new PHP project with some sane defaults in place that encourage best practices and a working development envionrment that will run either locally (via Docker) or using Visual Studio Online.

## Getting Started

Download the [latest.zip](https://github.com/mhcg/php-library-template/releases/latest) files and unzipped to a folder of your choice and open VS Code on that folder.  Assuming you have the [VS Code Remote Development](https://code.visualstudio.com/docs/remote/remote-overview) stuff already up and running you should be prompted to re-open in a container.

Run `composer update` either from the command line or via the Command Pallette to get Composer up and running, the Dockerfile already installs this.  You will get phpcs errors until you do.

### Using with Visual Studio Online

At the time of writing, I found the best way to use with Visual Studio Online is to setup the project initially locally then push to your own git repo and use that to create the Environment on VS Online.

That said, if you just want to check the code out or do a quick bit of throw-away coding using the template then you can create a new Environment with this repo and it will work out-of-the-box.

If you absolutely have to use this repo to kick-off a new project using VS Online then you can, but you will have to manually deal with getting the files into your own git repo after connecting to the environment.

## What's included?

The template includes the following.

* Docker container with PHP 7.4, XDebug enabled and Composer installed.
* VS Code Extensions for PHP, PHP Debug, Composer, PHP Code Sniffer and PHP Unit Test Explorer.
* VS Code Debug Launch Task *(listening on port 9000)*.
* PHP Code Sniffer pre-configured for PSR12 plus some common Doc Block sniffs.
* Travis CI file to run unit tests on PHP 7.3 and PHP 7.4.
  - *Note*: Travis CI will call into Code Climate using an invalid code, either remove this or update for your own use.
* Generic composer.json file *(update as per your own needs and dependancies)*.
