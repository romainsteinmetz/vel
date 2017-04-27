<?php

/* VelBundle:Cart:summary.html.twig */
class __TwigTemplate_21df308c6257858a9e47504ab68181879adee62e0199f8fe90e0c1c5c7fbd5d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "VelBundle:Cart:summary.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52b72538f59b0b1f54569b19fe2eb4ec04008f95fb46eb2a0ab8eaec4a3f1a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b72538f59b0b1f54569b19fe2eb4ec04008f95fb46eb2a0ab8eaec4a3f1a2c->enter($__internal_52b72538f59b0b1f54569b19fe2eb4ec04008f95fb46eb2a0ab8eaec4a3f1a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VelBundle:Cart:summary.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52b72538f59b0b1f54569b19fe2eb4ec04008f95fb46eb2a0ab8eaec4a3f1a2c->leave($__internal_52b72538f59b0b1f54569b19fe2eb4ec04008f95fb46eb2a0ab8eaec4a3f1a2c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e2545901b5257b8859535edd333cad489f45345020a8da0f793e359f3e5187d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2545901b5257b8859535edd333cad489f45345020a8da0f793e359f3e5187d->enter($__internal_7e2545901b5257b8859535edd333cad489f45345020a8da0f793e359f3e5187d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cart_summary"), "html", null, true);
        echo "</h1>
                </div>

                ";
        // line 11
        if ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "hasItems", array())) {
            // line 12
            echo "                    <div class=\"col-md-12 text-right\">
                        <h4>
                            <a href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clear_basket");
            echo "\">
                                ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cart_clear"), "html", null, true);
            echo "
                            </a>
                        </h4>
                    </div>
                ";
        }
        // line 20
        echo "            </div>

            ";
        // line 22
        if ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "hasItems", array())) {
            // line 23
            echo "                ";
            $this->loadTemplate("VelBundle:cart:_partials/basket.html.twig", "VelBundle:Cart:summary.html.twig", 23)->display($context);
            // line 24
            echo "            ";
        } else {
            // line 25
            echo "                <p class=\"text-center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cart_empty"), "html", null, true);
            echo "</p>
            ";
        }
        // line 27
        echo "        </div>
    </div>
";
        
        $__internal_7e2545901b5257b8859535edd333cad489f45345020a8da0f793e359f3e5187d->leave($__internal_7e2545901b5257b8859535edd333cad489f45345020a8da0f793e359f3e5187d_prof);

    }

    public function getTemplateName()
    {
        return "VelBundle:Cart:summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 27,  82 => 25,  79 => 24,  76 => 23,  74 => 22,  70 => 20,  62 => 15,  58 => 14,  54 => 12,  52 => 11,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"wrapper\">
        <div id=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <h1>{{ 'cart_summary' | trans }}</h1>
                </div>

                {% if cart.hasItems %}
                    <div class=\"col-md-12 text-right\">
                        <h4>
                            <a href=\"{{ path('clear_basket') }}\">
                                {{ 'cart_clear' | trans }}
                            </a>
                        </h4>
                    </div>
                {% endif %}
            </div>

            {% if cart.hasItems %}
                {% include 'VelBundle:cart:_partials/basket.html.twig' %}
            {% else %}
                <p class=\"text-center\">{{ 'cart_empty' | trans }}</p>
            {% endif %}
        </div>
    </div>
{% endblock %}", "VelBundle:Cart:summary.html.twig", "/Users/romainsteinmetz/workspace/vel/src/VelBundle/Resources/views/Cart/summary.html.twig");
    }
}
