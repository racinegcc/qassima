<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hwi_oauth.authentication.provider.oauth.main' shared service.

return $this->services['hwi_oauth.authentication.provider.oauth.main'] = new \HWI\Bundle\OAuthBundle\Security\Core\Authentication\Provider\OAuthProvider(${($_ = isset($this->services['my_user_provider']) ? $this->services['my_user_provider'] : $this->load('getMyUserProviderService.php')) && false ?: '_'}, ${($_ = isset($this->services['hwi_oauth.resource_ownermap.main']) ? $this->services['hwi_oauth.resource_ownermap.main'] : $this->load('getHwiOauth_ResourceOwnermap_MainService.php')) && false ?: '_'}, ${($_ = isset($this->services['hwi_oauth.user_checker']) ? $this->services['hwi_oauth.user_checker'] : ($this->services['hwi_oauth.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())) && false ?: '_'});
