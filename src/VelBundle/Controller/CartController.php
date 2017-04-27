<?php
/**
 * Created by PhpStorm.
 * User: romainsteinmetz
 * Date: 13/04/2017
 * Time: 23:50
 */

namespace VelBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use VelBundle\Entity\Product;
use VelBundle\Event\CartEvent;
use VelBundle\Event\MyEvents;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class CartController
 * @package VelBundle\Controller
 */
class CartController extends BaseController
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function clearAction(Request $request)
    {
        $this->get('event_dispatcher')->dispatch(MyEvents::CART_CLEAR);

        return $this->redirectToRoute('summary_basket');
    }

    /**
     * @param Request $request
     * @param Product $product
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function addAction(Request $request, Product $product)
    {
        $cartEvent = new CartEvent();
        $cartEvent->setProduct($product);

        $this->get('event_dispatcher')->dispatch(MyEvents::CART_ADD_PRODUCT, $cartEvent);

        return $this->redirectToRoute('summary_basket');
    }

    /**
     * @param Request $request
     * @param Product $product
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function removeAction(Request $request, Product $product)
    {
        $cartEvent = new CartEvent();
        $cartEvent->setProduct($product);

        $this->get('event_dispatcher')->dispatch(MyEvents::CART_REMOVE_PRODUCT, $cartEvent);

        return $this->redirectToRoute('summary_basket');
    }

    /**
     * @param Request $request
     * @template
     * @return array
     */
    public function summaryAction(Request $request)
    {
        return [
            'cart' => $request->getSession()->get('cart')
        ];
    }
}