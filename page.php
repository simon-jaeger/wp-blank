<?php
use Timber\Timber;

$context = Timber::context();
$context['page'] = Timber::get_post();
Timber::render('page.twig', $context);
