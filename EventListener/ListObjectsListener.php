<?php
/**
 * @package Newscoop\CartuBankPay
 * @author Paweł Mikołajczuk <pawel.mikolajczuk@sourcefabric.org>
 * @copyright 2014 Sourcefabric o.p.s.
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */

namespace Newscoop\CartuBankPay\EventListener;

use Newscoop\EventDispatcher\Events\CollectObjectsDataEvent;

class ListObjectsListener
{
    /**
     * Register plugin list objects in Newscoop
     *
     * @param  CollectObjectsDataEvent $event
     */
    public function registerObjects(CollectObjectsDataEvent $event)
    {
        $event->registerListObject('newscoop\examplepluginbundle\templatelist\examplecontent', array(
            // for newscoop convention we need remove "List" from "ExampleContentList" class name.
            'class' => 'Newscoop\CartuBankPay\TemplateList\ExampleContent',
            // list name without "list_" - another Newscoop convention
            'list' => 'example_content',
            'url_id' => 'cnt',
        ));

        $event->registerObjectTypes('content', array(
            'class' => '\Newscoop\CartuBankPay\Entity\Example'
        ));
    }
}
