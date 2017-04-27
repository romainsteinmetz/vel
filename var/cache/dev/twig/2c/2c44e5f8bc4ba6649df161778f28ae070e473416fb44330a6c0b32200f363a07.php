<?php

/* base.html.twig */
class __TwigTemplate_6adb5059adbb7d9d70b5e5e0491be1bd9bf2c5a0ec3c9000f617d15135f760aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d5c653f9b0f0de79c75a97ab0e16b7b27c44d9410c109a9b78267e1df8614fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5c653f9b0f0de79c75a97ab0e16b7b27c44d9410c109a9b78267e1df8614fd->enter($__internal_5d5c653f9b0f0de79c75a97ab0e16b7b27c44d9410c109a9b78267e1df8614fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

        <script src=\"https://unpkg.com/react@latest/dist/react.js\"></script>
        <script src=\"https://unpkg.com/react-dom@latest/dist/react-dom.js\"></script>
        <script src=\"https://unpkg.com/babel-standalone@6.15.0/babel.min.js\"></script>
    </head>

    <body>
        <div id=\"header\">
            ";
        // line 22
        $this->loadTemplate("header.html.twig", "base.html.twig", 22)->display($context);
        // line 23
        echo "        </div>
        <div id=\"body\">
            ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "        </div>
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "        <div id=\"footer\">
            ";
        // line 29
        $this->loadTemplate("footer.html.twig", "base.html.twig", 29)->display($context);
        // line 30
        echo "        </div>
    </body>
</html>
";
        
        $__internal_5d5c653f9b0f0de79c75a97ab0e16b7b27c44d9410c109a9b78267e1df8614fd->leave($__internal_5d5c653f9b0f0de79c75a97ab0e16b7b27c44d9410c109a9b78267e1df8614fd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_926759f6ad152a2867f8f07ceefb114273017b76dea676d0c4b641df0e58d360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926759f6ad152a2867f8f07ceefb114273017b76dea676d0c4b641df0e58d360->enter($__internal_926759f6ad152a2867f8f07ceefb114273017b76dea676d0c4b641df0e58d360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Vente en ligne";
        
        $__internal_926759f6ad152a2867f8f07ceefb114273017b76dea676d0c4b641df0e58d360->leave($__internal_926759f6ad152a2867f8f07ceefb114273017b76dea676d0c4b641df0e58d360_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa452d3cf27698b45cc6857715ab6ecfa32295c51eee96716ea23f13c9f93553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa452d3cf27698b45cc6857715ab6ecfa32295c51eee96716ea23f13c9f93553->enter($__internal_fa452d3cf27698b45cc6857715ab6ecfa32295c51eee96716ea23f13c9f93553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8b93b37_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8b93b37_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8b93b37_main_1.css");
            // line 8
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "8b93b37"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8b93b37") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8b93b37.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "        ";
        
        $__internal_fa452d3cf27698b45cc6857715ab6ecfa32295c51eee96716ea23f13c9f93553->leave($__internal_fa452d3cf27698b45cc6857715ab6ecfa32295c51eee96716ea23f13c9f93553_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd8b2e21eca00a5936b821ec80a058209575feae0fc77303eb66b37c1c26b156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8b2e21eca00a5936b821ec80a058209575feae0fc77303eb66b37c1c26b156->enter($__internal_cd8b2e21eca00a5936b821ec80a058209575feae0fc77303eb66b37c1c26b156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cd8b2e21eca00a5936b821ec80a058209575feae0fc77303eb66b37c1c26b156->leave($__internal_cd8b2e21eca00a5936b821ec80a058209575feae0fc77303eb66b37c1c26b156_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9f6ab7cf634f9082109ba33fe193a7be3e605c2bde71c18475c1d7b6e4a98e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6ab7cf634f9082109ba33fe193a7be3e605c2bde71c18475c1d7b6e4a98e7d->enter($__internal_9f6ab7cf634f9082109ba33fe193a7be3e605c2bde71c18475c1d7b6e4a98e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9f6ab7cf634f9082109ba33fe193a7be3e605c2bde71c18475c1d7b6e4a98e7d->leave($__internal_9f6ab7cf634f9082109ba33fe193a7be3e605c2bde71c18475c1d7b6e4a98e7d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 27,  125 => 25,  118 => 10,  104 => 8,  99 => 7,  93 => 6,  81 => 5,  71 => 30,  69 => 29,  66 => 28,  64 => 27,  61 => 26,  59 => 25,  55 => 23,  53 => 22,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Vente en ligne{% endblock %}</title>
        {% block stylesheets %}
            {% stylesheets '@VelBundle/Resources/public/css/main.css' filter='cssrewrite' %}
                <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
            {% endstylesheets %}
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

        <script src=\"https://unpkg.com/react@latest/dist/react.js\"></script>
        <script src=\"https://unpkg.com/react-dom@latest/dist/react-dom.js\"></script>
        <script src=\"https://unpkg.com/babel-standalone@6.15.0/babel.min.js\"></script>
    </head>

    <body>
        <div id=\"header\">
            {% include 'header.html.twig' %}
        </div>
        <div id=\"body\">
            {% block body %}{% endblock %}
        </div>
        {% block javascripts %}{% endblock %}
        <div id=\"footer\">
            {% include 'footer.html.twig' %}
        </div>
    </body>
</html>
", "base.html.twig", "/Users/romainsteinmetz/workspace/vel/app/Resources/views/base.html.twig");
    }
}
