<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.qhm8twu' shared service.

return $this->services['service_locator.qhm8twu'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('mailer' => function () {
    return ${($_ = isset($this->services['swiftmailer.mailer.default']) ? $this->services['swiftmailer.mailer.default'] : $this->load(__DIR__.'/getSwiftmailer_Mailer_DefaultService.php')) && false ?: '_'};
}));