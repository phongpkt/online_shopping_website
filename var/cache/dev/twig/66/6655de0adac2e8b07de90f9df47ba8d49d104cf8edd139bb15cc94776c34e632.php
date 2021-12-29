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

/* vendor/index.html.twig */
class __TwigTemplate_400ee7e7e0f7f6ca0fa88bc126584b9184a05ec378fcfe166adcdc1738fdfd4f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vendor/index.html.twig", 1);
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
        echo "<div class=\"container-md col-md-8 mt-3 mb-3 text-center\">
    ";
        // line 5
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 6
            echo "\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_add");
            echo "\">
\t\t\t<img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("button/add.png"), "html", null, true);
            echo "\" width=\"200px\" height=\"220px\">
\t\t</a>
\t";
        }
        // line 10
        echo "    <table class=\"table table-responsive-md mt-3\">
        <thead>
            <tr>
                <th>Vendor ID</th>
                <th>Vendor Name</th>
                ";
        // line 15
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 16
            echo "\t\t\t\t\t<th>Actions</th>
\t\t\t    ";
        }
        // line 18
        echo "            </tr>
        </thead>
        <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vendors"]) || array_key_exists("vendors", $context) ? $context["vendors"] : (function () { throw new RuntimeError('Variable "vendors" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vendor"]) {
            // line 22
            echo "                <tr>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vendor"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vendor"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                    ";
            // line 25
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 26
                echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["vendor"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\" style=\"padding:10px;margin-right:20px\">
\t\t\t\t\t\t\t\tView detail
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["vendor"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\" style=\"margin-right:20px\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("button/edit.png"), "html", null, true);
                echo "\" width=\"50\" height=\"50\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["vendor"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\" onclick=\"return confirm('Do you want to delete this?')\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("button/delete.png"), "html", null, true);
                echo "\" width=\"50\" height=\"50\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
            }
            // line 38
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vendor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vendor/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 40,  148 => 38,  141 => 34,  137 => 33,  132 => 31,  128 => 30,  122 => 27,  119 => 26,  117 => 25,  113 => 24,  109 => 23,  106 => 22,  102 => 21,  97 => 18,  93 => 16,  91 => 15,  84 => 10,  78 => 7,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container-md col-md-8 mt-3 mb-3 text-center\">
    {% if is_granted(\"ROLE_ADMIN\") %}
\t\t<a href=\"{{ path('vendor_add') }}\">
\t\t\t<img src=\"{{ asset('button/add.png') }}\" width=\"200px\" height=\"220px\">
\t\t</a>
\t{% endif %}
    <table class=\"table table-responsive-md mt-3\">
        <thead>
            <tr>
                <th>Vendor ID</th>
                <th>Vendor Name</th>
                {% if is_granted(\"ROLE_ADMIN\") %}
\t\t\t\t\t<th>Actions</th>
\t\t\t    {% endif %}
            </tr>
        </thead>
        <tbody>
            {% for vendor in vendors %}
                <tr>
                    <td>{{ vendor.id }}</td>
                    <td>{{ vendor.name }}</td>
                    {% if is_granted(\"ROLE_ADMIN\") %}
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('vendor_detail', {'id': vendor.id}) }}\" style=\"padding:10px;margin-right:20px\">
\t\t\t\t\t\t\t\tView detail
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"{{ path('vendor_edit', {'id': vendor.id}) }}\" style=\"margin-right:20px\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('button/edit.png') }}\" width=\"50\" height=\"50\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"text-decoration-none\" href=\"{{ path('vendor_delete', {'id': vendor.id}) }}\" onclick=\"return confirm('Do you want to delete this?')\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('button/delete.png') }}\" width=\"50\" height=\"50\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t{% endif %}
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "vendor/index.html.twig", "C:\\xampp\\htdocs\\assignment\\webproject\\templates\\vendor\\index.html.twig");
    }
}