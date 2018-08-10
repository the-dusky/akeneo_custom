<?php

namespace SandyBundle\EventListener;

use Symfony\Component\EventDispatcher\GenericEvent;
use Pim\Component\Catalog\Model\ProductInterface;


class ProductModificationListener
{
    private $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function onPostSave(GenericEvent $event)
    {
        //$pqbFactory = $x->getContainer()->get('pim_catalog.query.product_query_builder_factory');
        //TODO: The docs have this description of how to query products. How does the "use blah\blah\blah work"? How do I know what "use" to use? etc?
        $subject = $event->getSubject();

        if (!$subject instanceof ProductInterface) {
            // don't do anything if it's not a product
            return;
        } else {
            $product = $subject;
        }
        error_log("\n{$product->getId()}", 3, '/home/vagrant/log/error.log');
        //TODO: How do I quickly see what methods $event and/or $product has ($product coming from getSubject();)


        /*$message = \Swift_Message::newInstance()
            ->setSubject('A product modification event have been fired')
            ->setFrom('the_dusky@icloud.com')
            ->setTo('sandy@corsilco.com')
            ->setBody('Test')
        ;

        $this->mailer->send($message);*/
    }
}