<?php

/* VelBundle:Product:listReact.html.twig */
class __TwigTemplate_b41f966932fc336225ea5aaaba051afbf25504d7d1463e4757f8f2a16786ee96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "VelBundle:Product:listReact.html.twig", 1);
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
        $__internal_6a5846711a8aede7f4e3fab7e225ede3ec1ec82020c1d55ef66349cf3ba1538f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5846711a8aede7f4e3fab7e225ede3ec1ec82020c1d55ef66349cf3ba1538f->enter($__internal_6a5846711a8aede7f4e3fab7e225ede3ec1ec82020c1d55ef66349cf3ba1538f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VelBundle:Product:listReact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a5846711a8aede7f4e3fab7e225ede3ec1ec82020c1d55ef66349cf3ba1538f->leave($__internal_6a5846711a8aede7f4e3fab7e225ede3ec1ec82020c1d55ef66349cf3ba1538f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_79753034aca45cdaf4cbf03c915112b714f4e48e2aa06d00a1fc505e5abc2aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79753034aca45cdaf4cbf03c915112b714f4e48e2aa06d00a1fc505e5abc2aa8->enter($__internal_79753034aca45cdaf4cbf03c915112b714f4e48e2aa06d00a1fc505e5abc2aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"root\"></div>

    <script type=\"text/babel\">

        var test = '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "html", null, true);
        echo "';


        function Welcome(props) {
            return <h1>Hello, {props.name}</h1>;
        }

        function App() {
            return (
                    <div>
                        <Welcome name={test} />
                        <Welcome name=\"Cahal\" />
                        <Welcome name=\"Edite\" />
                    </div>
            );
        }

        class ProductRow extends React.Component {
            render() {
                var name = this.props.product.name;
                return (
                        <div className=\"product\">
                            <div id=\"name\">{this.props.product.name}</div>
                            <div class=\"price\">{this.props.product.price}</div>
                            ";
        // line 33
        echo "                                ";
        // line 34
        echo "                                ";
        // line 35
        echo "                                ";
        // line 36
        echo "                            ";
        // line 37
        echo "                        </div>
                );
            }
        }

        class ProductTable extends React.Component {
            render() {
                var rows = [];
                this.props.products.forEach(function(product) {
                    rows.push(<ProductRow product={product} key={product.id} />);
                });
                return (
                        <div id=\"products\">
                            {rows}
                        </div>
                );
            }
        }

        var PRODUCTS = [
            {category: 'Sporting Goods', price: '\$49.99', stocked: true, name: 'Football'},
            {category: 'Sporting Goods', price: '\$9.99', stocked: true, name: 'Baseball'},
            {category: 'Sporting Goods', price: '\$29.99', stocked: false, name: 'Basketball'},
            {category: 'Electronics', price: '\$99.99', stocked: true, name: 'iPod Touch'},
            {category: 'Electronics', price: '\$399.99', stocked: false, name: 'iPhone 5'},
            {category: 'Electronics', price: '\$199.99', stocked: true, name: 'Nexus 7'}
        ];

        var PRODUCTS = ";
        // line 65
        echo $this->env->getExtension('JMS\Serializer\Twig\SerializerExtension')->serialize((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        echo ";

        ReactDOM.render(
                <ProductTable products={PRODUCTS} />,
                document.getElementById('root')
        );

    </script>
";
        
        $__internal_79753034aca45cdaf4cbf03c915112b714f4e48e2aa06d00a1fc505e5abc2aa8->leave($__internal_79753034aca45cdaf4cbf03c915112b714f4e48e2aa06d00a1fc505e5abc2aa8_prof);

    }

    public function getTemplateName()
    {
        return "VelBundle:Product:listReact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 65,  81 => 37,  79 => 36,  77 => 35,  75 => 34,  73 => 33,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
    <div id=\"root\"></div>

    <script type=\"text/babel\">

        var test = '{{ test }}';


        function Welcome(props) {
            return <h1>Hello, {props.name}</h1>;
        }

        function App() {
            return (
                    <div>
                        <Welcome name={test} />
                        <Welcome name=\"Cahal\" />
                        <Welcome name=\"Edite\" />
                    </div>
            );
        }

        class ProductRow extends React.Component {
            render() {
                var name = this.props.product.name;
                return (
                        <div className=\"product\">
                            <div id=\"name\">{this.props.product.name}</div>
                            <div class=\"price\">{this.props.product.price}</div>
                            {#<a#}
                                {#class=\"btn btn-success\"#}
                                {#href=\"{{ path('product_show', {'id': prod.id}) }}\">#}
                                {#{{ 'choose_product' | trans }}#}
                            {#</a>#}
                        </div>
                );
            }
        }

        class ProductTable extends React.Component {
            render() {
                var rows = [];
                this.props.products.forEach(function(product) {
                    rows.push(<ProductRow product={product} key={product.id} />);
                });
                return (
                        <div id=\"products\">
                            {rows}
                        </div>
                );
            }
        }

        var PRODUCTS = [
            {category: 'Sporting Goods', price: '\$49.99', stocked: true, name: 'Football'},
            {category: 'Sporting Goods', price: '\$9.99', stocked: true, name: 'Baseball'},
            {category: 'Sporting Goods', price: '\$29.99', stocked: false, name: 'Basketball'},
            {category: 'Electronics', price: '\$99.99', stocked: true, name: 'iPod Touch'},
            {category: 'Electronics', price: '\$399.99', stocked: false, name: 'iPhone 5'},
            {category: 'Electronics', price: '\$199.99', stocked: true, name: 'Nexus 7'}
        ];

        var PRODUCTS = {{ products|serialize|raw }};

        ReactDOM.render(
                <ProductTable products={PRODUCTS} />,
                document.getElementById('root')
        );

    </script>
{% endblock %}", "VelBundle:Product:listReact.html.twig", "/Users/romainsteinmetz/workspace/vel/src/VelBundle/Resources/views/Product/listReact.html.twig");
    }
}
