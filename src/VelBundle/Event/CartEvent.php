<?php

namespace VelBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use VelBundle\Entity\Product;

/**
 * Class CartEvent
 * @package VelBundle\Event
 */
class CartEvent extends Event
{
    /**
     * @var Product
     */
    protected $product;

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cart_event';
    }
}