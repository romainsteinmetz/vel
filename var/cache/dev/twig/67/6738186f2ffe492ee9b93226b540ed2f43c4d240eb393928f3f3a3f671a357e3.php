<?php

/* VelBundle:Product:list.html.twig */
class __TwigTemplate_406671743def64ccc4cbd50c3eaef0896b9b78ed0e59e0a066a37525ff13d6c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "VelBundle:Product:list.html.twig", 1);
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
        $__internal_9c1f3eaad90fb1284986458edce9783c4139331e0f25f6a5a1ca91bd2c692989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1f3eaad90fb1284986458edce9783c4139331e0f25f6a5a1ca91bd2c692989->enter($__internal_9c1f3eaad90fb1284986458edce9783c4139331e0f25f6a5a1ca91bd2c692989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VelBundle:Product:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c1f3eaad90fb1284986458edce9783c4139331e0f25f6a5a1ca91bd2c692989->leave($__internal_9c1f3eaad90fb1284986458edce9783c4139331e0f25f6a5a1ca91bd2c692989_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0503c2bd7e544138ca6aca887972155775cb3dcbe439e9c2f0f7c31ee452ccb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0503c2bd7e544138ca6aca887972155775cb3dcbe439e9c2f0f7c31ee452ccb2->enter($__internal_0503c2bd7e544138ca6aca887972155775cb3dcbe439e9c2f0f7c31ee452ccb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("product_list"), "html", null, true);
        echo "</h1>

            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 9
            echo "                <div id=\"product\">
                    <div id=\"name\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "name", array()), "html", null, true);
            echo "</div>
                    <div class=\"price\">";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('VelBundle\Twig\VelExtension')->priceFilter($this->getAttribute($context["prod"], "price", array())), "html", null, true);
            echo "</div>
                    <a
                        class=\"btn btn-success\"
                        href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute($context["prod"], "id", array()))), "html", null, true);
            echo "\">
                        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choose_product"), "html", null, true);
            echo "
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </div>
    </div>
";
        
        $__internal_0503c2bd7e544138ca6aca887972155775cb3dcbe439e9c2f0f7c31ee452ccb2->leave($__internal_0503c2bd7e544138ca6aca887972155775cb3dcbe439e9c2f0f7c31ee452ccb2_prof);

    }

    public function getTemplateName()
    {
        return "VelBundle:Product:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  70 => 15,  66 => 14,  60 => 11,  56 => 10,  53 => 9,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
            <h1>{{ 'product_list' | trans }}</h1>

            {% for prod in products %}
                <div id=\"product\">
                    <div id=\"name\">{{ prod.name }}</div>
                    <div class=\"price\">{{ prod.price | price }}</div>
                    <a
                        class=\"btn btn-success\"
                        href=\"{{ path('product_show', {'id': prod.id}) }}\">
                        {{ 'choose_product' | trans }}
                    </a>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}", "VelBundle:Product:list.html.twig", "/Users/romainsteinmetz/workspace/vel/src/VelBundle/Resources/views/Product/list.html.twig");
    }
}
