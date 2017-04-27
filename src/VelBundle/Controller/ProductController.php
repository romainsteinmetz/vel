<?php
/**
 * Created by PhpStorm.
 * User: romainsteinmetz
 * Date: 26/09/2016
 * Time: 21:41
 */

namespace VelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use VelBundle\Entity\Product;

/**
 * Class ProductController
 * @package VelBundle\Controller
 */
class ProductController extends BaseController
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @template
     */
    public function listAction(Request $request)
    {
        $products = $this->getRepository('VelBundle:Product')->findAll();

        return [
            'products' => $products
        ];
    }

    /**
     * @param Request $request
     * @param Product $product
     * @return array
     * @template
     */
    public function showAction(Request $request, Product $product)
    {
        return [
            'prod' => $product
        ];
    }

    /**
     * @param Request $request
     * @template
     * @return array
     */
    public function listReactAction(Request $request)
    {
        $products = $this->getRepository('VelBundle:Product')->findAll();

        return [
            'products' => $products,
            'test' => 'romain'
        ];
    }
}