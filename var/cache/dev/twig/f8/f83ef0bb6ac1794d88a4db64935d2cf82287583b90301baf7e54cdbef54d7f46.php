<?php

/* VelBundle:cart:_partials/basket.html.twig */
class __TwigTemplate_ae9d4870a5480e3f4cc5167889955a93563ce9cc0ed5f629dcc196672c1a04ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e34010a10957b4d4110f581c868178cd03e5b04a546e9cde8d5cfa4f4c4a7b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34010a10957b4d4110f581c868178cd03e5b04a546e9cde8d5cfa4f4c4a7b69->enter($__internal_e34010a10957b4d4110f581c868178cd03e5b04a546e9cde8d5cfa4f4c4a7b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VelBundle:cart:_partials/basket.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-md-6 col-md-offset-3\">
        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "                    <tr>
                        <td>
                            <strong>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "product", array()), "name", array()), "html", null, true);
            echo "</strong>
                        </td>
                        <td>
                            <a
                                    class=\"btn btn-danger btn-xs\"
                                    href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("remove_to_basket", array("id" => $this->getAttribute($this->getAttribute($context["item"], "product", array()), "id", array()))), "html", null, true);
            echo "\"
                            >
                                -
                            </a>
                            ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
            echo "
                            <a
                                    class=\"btn btn-success btn-xs\"
                                    href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_to_basket", array("id" => $this->getAttribute($this->getAttribute($context["item"], "product", array()), "id", array()))), "html", null, true);
            echo "\"
                            >
                                +
                            </a>
                        </td>
                        <td>
                            ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('VelBundle\Twig\VelExtension')->priceFilter($this->getAttribute($context["item"], "getTotal", array())), "html", null, true);
            echo " (";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("product_unit_price", array("%price%" => $this->env->getExtension('VelBundle\Twig\VelExtension')->priceFilter($this->getAttribute($this->getAttribute($context["item"], "product", array()), "price", array()))), "messages");
            echo ")
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
                <tr class=\"info\">
                    <td></td>
                    <td></td>
                    <td>
                        <strong>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('VelBundle\Twig\VelExtension')->priceFilter($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "getTotal", array())), "html", null, true);
        echo "</strong>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>";
        
        $__internal_e34010a10957b4d4110f581c868178cd03e5b04a546e9cde8d5cfa4f4c4a7b69->leave($__internal_e34010a10957b4d4110f581c868178cd03e5b04a546e9cde8d5cfa4f4c4a7b69_prof);

    }

    public function getTemplateName()
    {
        return "VelBundle:cart:_partials/basket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 35,  78 => 30,  66 => 26,  57 => 20,  51 => 17,  44 => 13,  36 => 8,  32 => 6,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-md-6 col-md-offset-3\">
        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                {% for item in cart.items %}
                    <tr>
                        <td>
                            <strong>{{ item.product.name }}</strong>
                        </td>
                        <td>
                            <a
                                    class=\"btn btn-danger btn-xs\"
                                    href=\"{{ path('remove_to_basket', {'id': item.product.id}) }}\"
                            >
                                -
                            </a>
                            {{ item.quantity }}
                            <a
                                    class=\"btn btn-success btn-xs\"
                                    href=\"{{ path('add_to_basket', {'id': item.product.id}) }}\"
                            >
                                +
                            </a>
                        </td>
                        <td>
                            {{ item.getTotal | price }} ({% trans with {'%price%': item.product.price|price} %}product_unit_price{% endtrans %})
                        </td>
                    </tr>
                {% endfor %}

                <tr class=\"info\">
                    <td></td>
                    <td></td>
                    <td>
                        <strong>{{ cart.getTotal | price }}</strong>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>", "VelBundle:cart:_partials/basket.html.twig", "/Users/romainsteinmetz/workspace/vel/src/VelBundle/Resources/views/cart/_partials/basket.html.twig");
    }
}
