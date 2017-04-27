<?php

/* VelBundle:product:_partials/price.html.twig */
class __TwigTemplate_363dccfc103ff64598f3100ff311cd74df6fa8e32def69094a7274eeb2edf4ad extends Twig_Template
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
        $__internal_076b5b286eb720ae8bd7152f17744c919811a85d16176fe0137578469125071e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_076b5b286eb720ae8bd7152f17744c919811a85d16176fe0137578469125071e->enter($__internal_076b5b286eb720ae8bd7152f17744c919811a85d16176fe0137578469125071e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VelBundle:product:_partials/price.html.twig"));

        // line 1
        echo "<div id=\"product_price\">
    <p class=\"text-center\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('VelBundle\Twig\VelExtension')->priceFilter($this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "price", array())), "html", null, true);
        echo "</p>

    <p class=\"text-center\">
        <a
            class=\"btn btn-success btn-lg\"
            href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_to_basket", array("id" => $this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "id", array()))), "html", null, true);
        echo "\"
            >
            ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add_to_basket"), "html", null, true);
        echo "
        </a>
    </p>
</div>";
        
        $__internal_076b5b286eb720ae8bd7152f17744c919811a85d16176fe0137578469125071e->leave($__internal_076b5b286eb720ae8bd7152f17744c919811a85d16176fe0137578469125071e_prof);

    }

    public function getTemplateName()
    {
        return "VelBundle:product:_partials/price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  33 => 7,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"product_price\">
    <p class=\"text-center\">{{ prod.price | price }}</p>

    <p class=\"text-center\">
        <a
            class=\"btn btn-success btn-lg\"
            href=\"{{ path('add_to_basket', {'id': prod.id}) }}\"
            >
            {{ 'add_to_basket' | trans }}
        </a>
    </p>
</div>", "VelBundle:product:_partials/price.html.twig", "/Users/romainsteinmetz/workspace/vel/src/VelBundle/Resources/views/product/_partials/price.html.twig");
    }
}
