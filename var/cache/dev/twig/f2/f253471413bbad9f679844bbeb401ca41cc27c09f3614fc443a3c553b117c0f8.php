<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_43c7de57445b96399770d1e2d0b9dc2b5726c822d6f2f102d4b892fba47fb7bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d499d60b697b19dfd534ee3441f14b23254b89e949800499ce2a32ea3e1fdcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d499d60b697b19dfd534ee3441f14b23254b89e949800499ce2a32ea3e1fdcd->enter($__internal_3d499d60b697b19dfd534ee3441f14b23254b89e949800499ce2a32ea3e1fdcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d499d60b697b19dfd534ee3441f14b23254b89e949800499ce2a32ea3e1fdcd->leave($__internal_3d499d60b697b19dfd534ee3441f14b23254b89e949800499ce2a32ea3e1fdcd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9bc6aed1dfdda3bc2c238e0cdefe2cc6507dbfbddd904e55b254738f2f8fd32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc6aed1dfdda3bc2c238e0cdefe2cc6507dbfbddd904e55b254738f2f8fd32f->enter($__internal_9bc6aed1dfdda3bc2c238e0cdefe2cc6507dbfbddd904e55b254738f2f8fd32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9bc6aed1dfdda3bc2c238e0cdefe2cc6507dbfbddd904e55b254738f2f8fd32f->leave($__internal_9bc6aed1dfdda3bc2c238e0cdefe2cc6507dbfbddd904e55b254738f2f8fd32f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb62ef8cc6ef79e2c3b959637427f8515190faffdf9990c7015d47d685bab7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb62ef8cc6ef79e2c3b959637427f8515190faffdf9990c7015d47d685bab7af->enter($__internal_cb62ef8cc6ef79e2c3b959637427f8515190faffdf9990c7015d47d685bab7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cb62ef8cc6ef79e2c3b959637427f8515190faffdf9990c7015d47d685bab7af->leave($__internal_cb62ef8cc6ef79e2c3b959637427f8515190faffdf9990c7015d47d685bab7af_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4046eaf02ee5a08b16d7bae16ee53472baf8c1d26a7fc9219aab7bf78cc68027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4046eaf02ee5a08b16d7bae16ee53472baf8c1d26a7fc9219aab7bf78cc68027->enter($__internal_4046eaf02ee5a08b16d7bae16ee53472baf8c1d26a7fc9219aab7bf78cc68027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4046eaf02ee5a08b16d7bae16ee53472baf8c1d26a7fc9219aab7bf78cc68027->leave($__internal_4046eaf02ee5a08b16d7bae16ee53472baf8c1d26a7fc9219aab7bf78cc68027_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/romainsteinmetz/workspace/vel/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
