<?php

namespace VelBundle\Entity;

use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * Created by PhpStorm.
 * User: romainsteinmetz
 * Date: 26/09/2016
 * Time: 22:03
 *
 * @ExclusionPolicy("all")
 */
class Product
{
    /**
     * @var int
     * @Expose
     */
    private $id;

    /**
     * @var string
     * @Expose
     */
    protected $name;

    /**
     * @var string
     * @Expose
     */
    protected $description;

    /**
     * @var string
     * @Expose
     */
    protected $slug;

    /**
     * @var float
     * @Expose
     */
    protected $price;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}