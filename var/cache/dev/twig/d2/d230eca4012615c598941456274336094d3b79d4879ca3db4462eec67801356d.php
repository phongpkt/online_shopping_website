<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* product/detail.html.twig */
class __TwigTemplate_4daea57e20d672b8205f3dafe4a7ad90360c82cd76f70bb7539e0f8fdaf19c13 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container-md col-md-8 mt-3 text-center\">
    ";
        // line 5
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 6
            echo "    <a class=\"btn btn-primary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_add");
            echo "\">
        Add product
    </a>
    ";
        }
        // line 10
        echo "    ";
        if ((0 !== twig_compare((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), null))) {
            // line 11
            echo "        <table class=\"table table-responsive-md mt-3\">
            <thead>
                <tr>
                    <th>Phone ID</th>
                    <th>Phone Name</th>
                    <th>Phone Price</th>
                    <th>Phone Quantity</th>
                    <th>Picture</th>
                    <th>Category</th>
                    <th>Vendor</th>
                    <th>Status</th>
                    ";
            // line 22
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 23
                echo "                    <th>Actions</th>
                    ";
            }
            // line 25
            echo "                </tr>    
            </thead>
            <tbody>
                <tr>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "price", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "quantity", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td>
                        <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("product/" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 34, $this->source); })()), "picture", [], "any", false, false, false, 34))), "html", null, true);
            echo "\" width=\"100\" height=\"120\">
                    </td>
                    <td>
                        ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 37, $this->source); })()), "category", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 40, $this->source); })()), "vendor", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["vendor"]) {
                // line 41
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vendor"], "name", [], "any", false, false, false, 41), "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vendor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                    </td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 44, $this->source); })()), "status", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                    ";
            // line 45
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 46
                echo "                    <td>
                        <a class=\"text-decoration-none\" href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("button/edit.png"), "html", null, true);
                echo "\" width=\"40\" height=\"40\">
                        </a>
                        <a class=\"text-decoration-none\" href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\" onclick= \"return confirm('Do you want to delete this product ?')\">
                            <img src=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("button/delete.png"), "html", null, true);
                echo "\" width=\"40\" height=\"40\">
                        </a>
                    </td>
                    ";
            }
            // line 55
            echo "                </tr>    
                
            </tbody>
        </table>
    ";
        } else {
            // line 60
            echo "        <h3> product not existed </h3>
        <a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
            echo "\">Redirect to product list </a>
    ";
        }
        // line 63
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 63,  193 => 61,  190 => 60,  183 => 55,  176 => 51,  172 => 50,  167 => 48,  163 => 47,  160 => 46,  158 => 45,  154 => 44,  151 => 43,  142 => 41,  138 => 40,  132 => 37,  126 => 34,  121 => 32,  117 => 31,  113 => 30,  109 => 29,  103 => 25,  99 => 23,  97 => 22,  84 => 11,  81 => 10,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container-md col-md-8 mt-3 text-center\">
    {% if is_granted(\"ROLE_ADMIN\") %}
    <a class=\"btn btn-primary\" href=\"{{ path('product_add') }}\">
        Add product
    </a>
    {% endif %}
    {% if product != null %}
        <table class=\"table table-responsive-md mt-3\">
            <thead>
                <tr>
                    <th>Phone ID</th>
                    <th>Phone Name</th>
                    <th>Phone Price</th>
                    <th>Phone Quantity</th>
                    <th>Picture</th>
                    <th>Category</th>
                    <th>Vendor</th>
                    <th>Status</th>
                    {% if is_granted(\"ROLE_ADMIN\") %}
                    <th>Actions</th>
                    {% endif %}
                </tr>    
            </thead>
            <tbody>
                <tr>
                    <td>{{ product.id }}</td>
                    <td>{{ product.name }}</td>
                    <td>{{ product.price }}</td>
                    <td>{{ product.quantity }}</td>
                    <td>
                        <img src=\"{{ asset('product/'~product.picture) }}\" width=\"100\" height=\"120\">
                    </td>
                    <td>
                        {{ product.category.name }}
                    </td>
                    <td>
                        {% for vendor in product.vendor %}
                            {{ vendor.name }}
                        {% endfor %}
                    </td>
                    <td>{{ product.status }}</td>
                    {% if is_granted(\"ROLE_ADMIN\") %}
                    <td>
                        <a class=\"text-decoration-none\" href=\"{{ path('product_edit', {'id': product.id}) }}\">
                            <img src=\"{{ asset('button/edit.png') }}\" width=\"40\" height=\"40\">
                        </a>
                        <a class=\"text-decoration-none\" href=\"{{ path('product_delete', {'id': product.id}) }}\" onclick= \"return confirm('Do you want to delete this product ?')\">
                            <img src=\"{{ asset('button/delete.png') }}\" width=\"40\" height=\"40\">
                        </a>
                    </td>
                    {% endif %}
                </tr>    
                
            </tbody>
        </table>
    {% else %}
        <h3> product not existed </h3>
        <a href=\"{{ path('product_index')}}\">Redirect to product list </a>
    {% endif %}
    </div>
{% endblock %}", "product/detail.html.twig", "C:\\xampp\\htdocs\\assignment\\webproject\\templates\\product\\detail.html.twig");
    }
}
