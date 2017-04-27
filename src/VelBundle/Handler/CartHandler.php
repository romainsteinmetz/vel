<?php
/**
 * Created by PhpStorm.
 * User: romainsteinmetz
 * Date: 17/04/2017
 * Time: 21:00
 */

namespace VelBundle\Handler;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use VelBundle\Entity\Cart;
use VelBundle\Entity\Item;
use VelBundle\Entity\Product;

/**
 * Class CartHandler
 * @package VelBundle\Handler
 */
class CartHandler
{
    const CART_KEY = 'cart';

    /**
     * @var Session
     */
    protected $session;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * CartHandler constructor.
     * @param Session $session
     * @param LoggerInterface $logger
     */
    public function __construct(Session $session, LoggerInterface $logger)
    {
        $this->session = $session;
        $this->session->start();
        $this->logger  = $logger;
    }

    /**
     * @param Product $product
     */
    public function addProduct(Product $product)
    {
        $cart = $this->getCart();

        $item = $cart->getItemByProduct($product);

        if (null === $item) {
            $this->logger->debug('create');
            $item = new Item();
            $item->setProduct($product);
            $cart->addItem($item);
        } else {
            $this->logger->debug('update');
            $item->setQuantity($item->getQuantity() + 1);
        }

        $this->logger->debug('cart has ' . $cart->getItems()->count() . ' items');
    }

    /**
     * @param Product $product
     */
    public function removeProduct(Product $product)
    {
        $cart = $this->getCart();

        $item = $cart->getItemByProduct($product);

        $quantity = $item->getQuantity();
        if ($quantity > 1) {
            $this->logger->debug('update quantity');
            $item->setQuantity($item->getQuantity() - 1);
        } else {
            // We have only one item, so remove it
            $cart->removeItem($item);
        }


        $this->logger->debug('cart has ' . $cart->getItems()->count() . ' items');
    }

    /**
     * Clear all items
     */
    public function clear()
    {
        $this->getCart()->clearItems();

        $this->logger->debug('cart items is cleared !!!');
    }

    /**
     * @return mixed|Cart
     */
    private function getCart()
    {
        if (!$this->session->has(self::CART_KEY)) {
            $cart = new Cart();
            $this->session->set(self::CART_KEY, $cart);

            return $cart;
        }
        return $this->session->get(self::CART_KEY);
    }
}
