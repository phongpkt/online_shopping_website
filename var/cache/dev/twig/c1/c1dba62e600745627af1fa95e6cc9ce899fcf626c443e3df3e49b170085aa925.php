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

/* customer/detail.html.twig */
class __TwigTemplate_630316fc5ac2ef6936c65ed882aac960ed444531ae1a959f9a2bcf4917a73285 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "customer/detail.html.twig", 1);
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
        echo "\t<div class=\"container-md col-md-8 mt-3 mb-3 text-center\">
\t\t";
        // line 5
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 6
            echo "\t\t<a class=\"text-decoration-none\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_add");
            echo "\">
\t\t\t<img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("button/add.png"), "html", null, true);
            echo "\" width=\"200px\" height=\"220px\">
\t\t</a>
\t\t";
        }
        // line 10
        echo "\t\t<table class=\"table table-responsive-md mt-3\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Customer Name</th>
\t\t\t\t\t<th>Customer PhoneNumber</th>
\t\t\t\t\t<th>Customer Email</th>
\t\t\t\t\t<th>Customer Address</th>
\t\t\t\t\t<th>Customer Order</th>
\t\t\t\t\t";
        // line 18
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 19
            echo "\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 29, $this->source); })()), "phoneNumber", [], "any", false, false, false, 29), "html", null, true);
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), "html", null, true);
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 35, $this->source); })()), "address", [], "any", false, false, false, 35), "html", null, true);
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 38, $this->source); })()), "orders", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 39
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "location", [], "any", false, false, false, 39), "html", null, true);
            echo "
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t\t\t</td>
\t\t\t\t\t";
        // line 43
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 44
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" style=\"margin-right:20px\">
\t\t\t\t\t\t\t<img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("button/edit.png"), "html", null, true);
            echo "\" width=\"50\" height=\"50\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" onclick=\"return confirm('Do you want to delete this customer ?')\">
\t\t\t\t\t\t\t<img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("button/delete.png"), "html", null, true);
            echo "\" width=\"50\" height=\"50\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "customer/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 53,  166 => 49,  162 => 48,  157 => 46,  153 => 45,  150 => 44,  148 => 43,  145 => 42,  135 => 39,  131 => 38,  125 => 35,  119 => 32,  113 => 29,  107 => 26,  100 => 21,  96 => 19,  94 => 18,  84 => 10,  78 => 7,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<div class=\"container-md col-md-8 mt-3 mb-3 text-center\">
\t\t{% if is_granted(\"ROLE_ADMIN\") %}
\t\t<a class=\"text-decoration-none\" href=\"{{ path('customer_add') }}\">
\t\t\t<img src=\"{{ asset('button/add.png') }}\" width=\"200px\" height=\"220px\">
\t\t</a>
\t\t{% endif %}
\t\t<table class=\"table table-responsive-md mt-3\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Customer Name</th>
\t\t\t\t\t<th>Customer PhoneNumber</th>
\t\t\t\t\t<th>Customer Email</th>
\t\t\t\t\t<th>Customer Address</th>
\t\t\t\t\t<th>Customer Order</th>
\t\t\t\t\t{% if is_granted(\"ROLE_ADMIN\") %}
\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t{% endif %}
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{ customer.name }}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{ customer.phoneNumber }}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{ customer.email }}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{ customer.address }}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% for order in customer.orders %}
\t\t\t\t\t\t\t{{order.location}}
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</td>
\t\t\t\t\t{% if is_granted(\"ROLE_ADMIN\") %}
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"{{ path('customer_edit', {'id' : customer.id }) }}\" style=\"margin-right:20px\">
\t\t\t\t\t\t\t<img src=\"{{ asset('button/edit.png') }}\" width=\"50\" height=\"50\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"{{ path('customer_delete', {'id' : customer.id }) }}\" onclick=\"return confirm('Do you want to delete this customer ?')\">
\t\t\t\t\t\t\t<img src=\"{{ asset('button/delete.png') }}\" width=\"50\" height=\"50\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t{% endif %}
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</div>
{% endblock %}
", "customer/detail.html.twig", "C:\\xampp\\htdocs\\assignment\\webproject\\templates\\customer\\detail.html.twig");
    }
}
