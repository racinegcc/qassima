<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hwi_oauth.resource_owner.facebook' shared service.

return $this->services['hwi_oauth.resource_owner.facebook'] = new \HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\FacebookResourceOwner(${($_ = isset($this->services['hwi_oauth.http_client']) ? $this->services['hwi_oauth.http_client'] : $this->load('getHwiOauth_HttpClientService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->load('getSecurity_HttpUtilsService.php')) && false ?: '_'}, ['client_id' => 'addyourfacebookappid', 'client_secret' => 'addyourfacebookapsecret', 'paths' => [], 'options' => []], 'facebook', ${($_ = isset($this->services['hwi_oauth.storage.session']) ? $this->services['hwi_oauth.storage.session'] : $this->load('getHwiOauth_Storage_SessionService.php')) && false ?: '_'});
