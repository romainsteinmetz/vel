<?php

namespace VelBundle\Twig;

use JMS\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Class VelExtension
 */
class VelExtension extends \Twig_Extension
{
    /**
     * @var Session
     */
    protected $session;

    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * VelExtension constructor.
     * @param Session $session
     */
    public function __construct(Session $session, Serializer $serializer)
    {
        $this->session = $session;
        $this->serializer = $serializer;
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('price', [$this, 'priceFilter']),
        ];
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('countCartItems', [$this, 'countCartItems']),
            new \Twig_SimpleFunction('serialize', [$this, 'serialize']),
        ];
    }

    /**
     * @param $number
     * @param int $decimals
     * @param string $decPoint
     * @param string $thousandsSep
     * @return string
     */
    public function priceFilter($number, $decimals = 2, $decPoint = '.', $thousandsSep = ',')
    {
        $price = number_format($number/100, $decimals, $decPoint, $thousandsSep);
        return $price . ' €';
    }

    /**
     * @return int
     */
    public function countCartItems()
    {
        $cart = $this->session->get('cart');
        if (null === $cart) {
            return 0;
        }
        return $cart->getItemsCount();
    }

    /**
     * @param $value
     * @return mixed|string
     */
    public function serialize($value)
    {
        return $this->serializer->serialize($value,'json');
    }
}