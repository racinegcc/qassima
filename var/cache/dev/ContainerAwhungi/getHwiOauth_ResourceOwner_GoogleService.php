<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hwi_oauth.resource_owner.google' shared service.

return $this->services['hwi_oauth.resource_owner.google'] = new \HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\GoogleResourceOwner(${($_ = isset($this->services['hwi_oauth.http_client']) ? $this->services['hwi_oauth.http_client'] : $this->load('getHwiOauth_HttpClientService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->getSecurity_HttpUtilsService()) && false ?: '_'}, ['client_id' => 'addyourgoogleappid', 'client_secret' => 'addyourgoogleappsecret', 'scope' => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile', 'paths' => [], 'options' => []], 'google', ${($_ = isset($this->services['hwi_oauth.storage.session']) ? $this->services['hwi_oauth.storage.session'] : $this->load('getHwiOauth_Storage_SessionService.php')) && false ?: '_'});
