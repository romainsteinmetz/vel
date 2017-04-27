<?php

/* VelBundle:product:_partials/description.html.twig */
class __TwigTemplate_0c5c4b7a0c953e7e8e52fafde4216a23b7508b87e2d75b1e762e3cec9c1c4d88 extends Twig_Template
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
        $__internal_07e3331812f5a26b7cce6469d4a5624af96d68cfc9488592a4d7f1d35229c8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e3331812f5a26b7cce6469d4a5624af96d68cfc9488592a4d7f1d35229c8c8->enter($__internal_07e3331812f5a26b7cce6469d4a5624af96d68cfc9488592a4d7f1d35229c8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VelBundle:product:_partials/description.html.twig"));

        // line 1
        echo "<div id=\"product_details\">
    <h1>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "name", array()), "html", null, true);
        echo "</h1>

    ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")), "description", array()), "html", null, true);
        echo "
</div>";
        
        $__internal_07e3331812f5a26b7cce6469d4a5624af96d68cfc9488592a4d7f1d35229c8c8->leave($__internal_07e3331812f5a26b7cce6469d4a5624af96d68cfc9488592a4d7f1d35229c8c8_prof);

    }

    public function getTemplateName()
    {
        return "VelBundle:product:_partials/description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"product_details\">
    <h1>{{ prod.name }}</h1>

    {{ prod.description }}
</div>", "VelBundle:product:_partials/description.html.twig", "/Users/romainsteinmetz/workspace/vel/src/VelBundle/Resources/views/product/_partials/description.html.twig");
    }
}
