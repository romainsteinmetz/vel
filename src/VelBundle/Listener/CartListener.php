<?php

namespace VelBundle\Listener;

use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use VelBundle\Event\CartEvent;
use VelBundle\Event\MyEvents;
use VelBundle\Event\EventTest;
use VelBundle\Handler\CartHandler;

/**
 * Class CartListener
 * @package VelBundle\Listener
 */
class CartListener implements EventSubscriberInterface
{
    /**
     * @var CartHandler
     */
    protected $cartHandler;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * TestListener constructor.
     * @param CartHandler $cartHandler
     * @param LoggerInterface $logger
     */
    public function __construct(CartHandler $cartHandler, LoggerInterface $logger)
    {
        $this->cartHandler = $cartHandler;
        $this->logger      = $logger;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return array(
            MyEvents::CART_ADD_PRODUCT      => 'addProduct',
            MyEvents::CART_REMOVE_PRODUCT   => 'removeProduct',
            MyEvents::CART_CLEAR            => 'clearCart',
        );
    }

    /**
     * @param CartEvent $event
     */
    public function addProduct(CartEvent $event)
    {
        $this->logger->debug($event->getName());
        $this->cartHandler->addProduct($event->getProduct());
    }

    /**
     * @param CartEvent $event
     */
    public function removeProduct(CartEvent $event)
    {
        $this->logger->debug($event->getName());
        $this->cartHandler->removeProduct($event->getProduct());
    }

    /**
     * Clear cart
     */
    public function clearCart()
    {
        $this->logger->debug('clear cart');
        $this->cartHandler->clear();
    }
}