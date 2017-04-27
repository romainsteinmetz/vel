<?php
/**
 * Created by PhpStorm.
 * User: romainsteinmetz
 * Date: 17/04/2017
 * Time: 21:21
 */

namespace VelBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Cart
 * @package VelBundle\Entity
 */
class Cart
{
    /**
     * @var ArrayCollection
     */
    protected $items;

    /**
     * Cart constructor.
     */
    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param ArrayCollection $items
     * @return $this
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @param Item $item
     * @return $this
     */
    public function addItem(Item $item)
    {
        $this->items->add($item);

        return $this;
    }

    /**
     * @param Item $item
     * @return $this
     */
    public function removeItem(Item $item)
    {
        if ($this->items->contains($item)) {
            $this->items->removeElement($item);
        }
        //unset($item);

        return $this;
    }

    /**
     * Clear all items
     */
    public function clearItems()
    {
        $this->items = new ArrayCollection();
    }

    /**
     * @return bool
     */
    public function hasItems()
    {
        return (bool) $this->items->count();
    }

    /**
     * @param Product $product
     * @return mixed|null
     */
    public function getItemByProduct(Product $product)
    {
        $filteredItems = $this->items->filter(function(Item $item) use ($product) {
            return $item->getProduct()->getId() === $product->getId();
        });

        return ($filteredItems->count() > 0) ? $filteredItems->first() : null;
    }

    /**
     * @return int
     */
    public function getItemsCount()
    {
        $count = 0;
        foreach ($this->items as $item) {
            $count += $item->getQuantity();
        }
        return $count;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getTotal();
        }
        return $total;
    }
}