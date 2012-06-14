<?php

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$sc = include __DIR__.'/../src/container.php';
$sc->setParameter('routes', include __DIR__.'/../src/app.php');
$sc->setParameter('charset', 'UTF-8');
$sc->setParameter('debug', true);

$request = Request::createFromGlobals();

$response = $sc->get('framework')->handle($request);

$response->send();
