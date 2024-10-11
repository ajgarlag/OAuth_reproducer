<?php

namespace App\EventListener;

use League\Bundle\OAuth2ServerBundle\Event\AuthorizationRequestResolveEvent;
use League\Bundle\OAuth2ServerBundle\OAuth2Events;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AuthorizationRequestResolver implements EventSubscriberInterface
{
    public function __construct(
        private Security $security,
    ) {}

    public function onAuthorizationRequestResolve(AuthorizationRequestResolveEvent $event) {
        $event->resolveAuthorization(true);
    }

    public static function getSubscribedEvents() {
        return [
            OAuth2Events::AUTHORIZATION_REQUEST_RESOLVE => 'onAuthorizationRequestResolve',
        ];
    }
}
