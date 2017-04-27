<?php

/* header.html.twig */
class __TwigTemplate_d7d10fb3b37373b89c09521ac973aaa16654484d04b0195390aa777f7e1ffaa9 extends Twig_Template
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
        $__internal_6b512c686c48995d5b0773e191ee7ac652f19e14c69b4373ff33bf7e1dbf46bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b512c686c48995d5b0773e191ee7ac652f19e14c69b4373ff33bf7e1dbf46bc->enter($__internal_6b512c686c48995d5b0773e191ee7ac652f19e14c69b4373ff33bf7e1dbf46bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"row\">
        <div class=\"col-md-3\">

        </div>
        <div class=\"col-md-6\">
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">
                <p class=\"text-center\">Vente en ligne</p>
            </a>
        </div>
        <div class=\"col-md-3\">
            <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("summary_basket");
        echo "\">
                <span class=\"glyphicon glyphicon-shopping-cart\"></span> Panier
                <span class=\"badge\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('VelBundle\Twig\VelExtension')->countCartItems(), "html", null, true);
        echo "</span>

            </a>
        </div>
    </div>

</div>";
        
        $__internal_6b512c686c48995d5b0773e191ee7ac652f19e14c69b4373ff33bf7e1dbf46bc->leave($__internal_6b512c686c48995d5b0773e191ee7ac652f19e14c69b4373ff33bf7e1dbf46bc_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  38 => 12,  30 => 7,  22 => 1,);
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
    <div class=\"row\">
        <div class=\"col-md-3\">

        </div>
        <div class=\"col-md-6\">
            <a href=\"{{ path('index') }}\">
                <p class=\"text-center\">Vente en ligne</p>
            </a>
        </div>
        <div class=\"col-md-3\">
            <a href=\"{{ path('summary_basket') }}\">
                <span class=\"glyphicon glyphicon-shopping-cart\"></span> Panier
                <span class=\"badge\">{{ countCartItems() }}</span>

            </a>
        </div>
    </div>

</div>", "header.html.twig", "/Users/romainsteinmetz/workspace/vel/app/Resources/views/header.html.twig");
    }
}
