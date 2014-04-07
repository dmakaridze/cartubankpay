<?php

namespace Newscoop\CartuBankPay\EventListener;

use Symfony\Component\HttpFoundation\Request;
use Newscoop\EventDispatcher\Events\PluginHooksEvent;

class HooksListener
{
    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function sidebar(PluginHooksEvent $event)
    {
        $translator = $this->container->get('translator');

        $response = $this->container->get('templating')->renderResponse(
            'NewscoopCartuBankPay:Hooks:sidebar.html.twig',
            array(
                'pluginName' => $translator->trans('plugin.sidebar.name'),
                'info' => $translator->trans('plugin.sidebar.info')
            )
        );

        $event->addHookResponse($response);
    }
}
