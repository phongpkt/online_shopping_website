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

/* employee/detail.html.twig */
class __TwigTemplate_99e6cac520e94a996c294ad4763868edfd899529ce288a22f9fc13f5b960260e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employee/detail.html.twig", 1);
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
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_add");
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
\t\t\t\t\t<th>Employee ID</th>
\t\t\t\t\t<th>Employee Name</th>
\t\t\t\t\t<th>Employee Address</th>
\t\t\t\t\t<th>Employee ContactNumber</th>
\t\t\t\t\t<th>Employee Position</th>
\t\t\t\t\t<th>Employee Order</th>
\t\t\t\t\t";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 28, $this->source); })()), "address", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 29, $this->source); })()), "contactnumber", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 30, $this->source); })()), "position", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 32, $this->source); })()), "orders", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 33
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "location", [], "any", false, false, false, 33), "html", null, true);
            echo "
\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t</td>
\t\t\t\t\t";
        // line 37
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 38
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("button/edit.png"), "html", null, true);
            echo "\" width=\"50\" height=\"50\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" onclick=\"return confirm('Do you want to delete this employee ?')\">
\t\t\t\t\t\t\t<img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("button/delete.png"), "html", null, true);
            echo "\" width=\"50\" height=\"50\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 47
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
        return "employee/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 47,  163 => 43,  159 => 42,  154 => 40,  150 => 39,  147 => 38,  145 => 37,  142 => 36,  132 => 33,  128 => 32,  123 => 30,  119 => 29,  115 => 28,  111 => 27,  107 => 26,  101 => 22,  97 => 20,  95 => 19,  84 => 10,  78 => 7,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<div class=\"container-md col-md-8 mt-3 mb-3 text-center\">
\t\t{% if is_granted(\"ROLE_ADMIN\") %}
\t\t<a class=\"text-decoration-none\" href=\"{{ path('employee_add') }}\">
\t\t\t<img src=\"{{ asset('button/add.png') }}\" width=\"200px\" height=\"220px\">
\t\t</a>
\t\t{% endif %}
\t\t<table class=\"table table-responsive-md mt-3\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Employee ID</th>
\t\t\t\t\t<th>Employee Name</th>
\t\t\t\t\t<th>Employee Address</th>
\t\t\t\t\t<th>Employee ContactNumber</th>
\t\t\t\t\t<th>Employee Position</th>
\t\t\t\t\t<th>Employee Order</th>
\t\t\t\t\t{% if is_granted(\"ROLE_ADMIN\") %}
\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t{% endif %}
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>{{employee.id}}</td>
\t\t\t\t\t<td>{{employee.name}}</td>
\t\t\t\t\t<td>{{employee.address}}</td>
\t\t\t\t\t<td>{{employee.contactnumber}}</td>
\t\t\t\t\t<td>{{employee.position}}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% for order in employee.orders %}
\t\t\t\t\t\t{{order.location}}
\t\t\t\t\t\t<br>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</td>
\t\t\t\t\t{% if is_granted(\"ROLE_ADMIN\") %}
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"{{ path('employee_edit', {'id' : employee.id }) }}\">
\t\t\t\t\t\t\t<img src=\"{{ asset('button/edit.png') }}\" width=\"50\" height=\"50\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"{{ path('employee_delete', {'id' : employee.id }) }}\" onclick=\"return confirm('Do you want to delete this employee ?')\">
\t\t\t\t\t\t\t<img src=\"{{ asset('button/delete.png') }}\" width=\"50\" height=\"50\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t{% endif %}
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</div>
{% endblock %}
", "employee/detail.html.twig", "C:\\xampp\\htdocs\\assignment\\webproject\\templates\\employee\\detail.html.twig");
    }
}
