<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'liip_imagine' shared service.

$this->services['liip_imagine'] = $instance = new \Imagine\Gd\Imagine();

$instance->setMetadataReader(new \Imagine\Image\Metadata\ExifMetadataReader());

return $instance;
