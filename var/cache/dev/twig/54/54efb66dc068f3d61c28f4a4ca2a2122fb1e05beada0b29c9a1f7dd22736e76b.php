<?php

/* VelBundle:Product:show.html.twig */
class __TwigTemplate_8661335771a4afb8d63d005754e581f8831e4deb70fd22bdc40e5d59a62c685e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "VelBundle:Product:show.html.twig", 1);
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
        $__internal_dc9eeb317929d88c8f50824ae18f799ba41cb4daede867160bec45357ff06b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9eeb317929d88c8f50824ae18f799ba41cb4daede867160bec45357ff06b51->enter($__internal_dc9eeb317929d88c8f50824ae18f799ba41cb4daede867160bec45357ff06b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VelBundle:Product:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc9eeb317929d88c8f50824ae18f799ba41cb4daede867160bec45357ff06b51->leave($__internal_dc9eeb317929d88c8f50824ae18f799ba41cb4daede867160bec45357ff06b51_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e11475a2f4d125cb70ac7f017b576e2166d3a443544a634a0966d649a8fcb94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e11475a2f4d125cb70ac7f017b576e2166d3a443544a634a0966d649a8fcb94->enter($__internal_9e11475a2f4d125cb70ac7f017b576e2166d3a443544a634a0966d649a8fcb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">

            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-6 col-md-8 product_details\">
                    ";
        // line 9
        $this->loadTemplate("VelBundle:product:_partials/description.html.twig", "VelBundle:Product:show.html.twig", 9)->display($context);
        // line 10
        echo "                </div>
                <div class=\"col-xs-6 col-md-4 product_price\">
                    ";
        // line 12
        $this->loadTemplate("VelBundle:product:_partials/price.html.twig", "VelBundle:Product:show.html.twig", 12)->display($context);
        // line 13
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_9e11475a2f4d125cb70ac7f017b576e2166d3a443544a634a0966d649a8fcb94->leave($__internal_9e11475a2f4d125cb70ac7f017b576e2166d3a443544a634a0966d649a8fcb94_prof);

    }

    public function getTemplateName()
    {
        return "VelBundle:Product:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  53 => 12,  49 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
                <div class=\"col-xs-12 col-sm-6 col-md-8 product_details\">
                    {% include 'VelBundle:product:_partials/description.html.twig' %}
                </div>
                <div class=\"col-xs-6 col-md-4 product_price\">
                    {% include 'VelBundle:product:_partials/price.html.twig' %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "VelBundle:Product:show.html.twig", "/Users/romainsteinmetz/workspace/vel/src/VelBundle/Resources/views/Product/show.html.twig");
    }
}
