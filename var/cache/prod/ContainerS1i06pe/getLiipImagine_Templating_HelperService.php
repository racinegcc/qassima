<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'liip_imagine.templating.helper' shared service.

return $this->services['liip_imagine.templating.helper'] = new \Liip\ImagineBundle\Templating\Helper\ImagineHelper(${($_ = isset($this->services['liip_imagine.cache.manager']) ? $this->services['liip_imagine.cache.manager'] : $this->load('getLiipImagine_Cache_ManagerService.php')) && false ?: '_'});
