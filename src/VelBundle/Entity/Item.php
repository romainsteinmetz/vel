<?php
/**
 * Created by PhpStorm.
 * User: romainsteinmetz
 * Date: 20/04/2017
 * Time: 21:29
 */

namespace VelBundle\Entity;

/**
 * Class Item
 * @package VelBundle\Entity
 */
class Item
{
    /**
     * @var Product
     */
    protected $product;

    /**
     * @var int
     */
    protected $quantity = 1;

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
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->product->getPrice() * $this->quantity;
    }
}