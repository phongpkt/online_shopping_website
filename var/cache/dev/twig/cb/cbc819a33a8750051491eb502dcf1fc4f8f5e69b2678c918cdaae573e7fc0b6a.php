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

/* vendor/detail.html.twig */
class __TwigTemplate_f8dc4c3a60b0e3f5205489ddfd6401f0f3aa655cd030990a11fdbcec0a19fec5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vendor/detail.html.twig", 1);
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
                <th>Address</th>
                <th>Contect Number</th>
                <th>Products</th>
                ";
        // line 18
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 19
            echo "\t\t\t\t\t<th>Actions</th>
\t\t\t    ";
        }
        // line 21
        echo "            </tr>
        </thead>
        <tbody>
            <tr>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 27, $this->source); })()), "address", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 28, $this->source); })()), "contactNumber", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                <td>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 30, $this->source); })()), "products", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 31
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31), "html", null, true);
            echo "
                    <br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </td>
                <td>
                    ";
        // line 36
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 37
            echo "                    <a class=\"text-decoration-none\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" style=\"margin-right:20px\">
                        <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("button/edit.png"), "html", null, true);
            echo "\" width=\"50\" height=\"50\">
                    </a>
                    <a class=\"text-decoration-none\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" onclick=\"return confirm('Do you want to delete this?')\">
                        <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("button/delete.png"), "html", null, true);
            echo "\" width=\"50\" height=\"50\">
                    </a>
                    ";
        }
        // line 44
        echo "                </td>
            </tr>
        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vendor/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 44,  157 => 41,  153 => 40,  148 => 38,  143 => 37,  141 => 36,  137 => 34,  127 => 31,  123 => 30,  118 => 28,  114 => 27,  110 => 26,  106 => 25,  100 => 21,  96 => 19,  94 => 18,  84 => 10,  78 => 7,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
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
                <th>Address</th>
                <th>Contect Number</th>
                <th>Products</th>
                {% if is_granted(\"ROLE_ADMIN\") %}
\t\t\t\t\t<th>Actions</th>
\t\t\t    {% endif %}
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ vendor.id }}</td>
                <td>{{ vendor.name }}</td>
                <td>{{ vendor.address }}</td>
                <td>{{ vendor.contactNumber }}</td>
                <td>
                {% for product in vendor.products %}
                    {{ product.name }}
                    <br>
                {% endfor %}
                </td>
                <td>
                    {% if is_granted(\"ROLE_ADMIN\") %}
                    <a class=\"text-decoration-none\" href=\"{{ path('vendor_edit', {'id': vendor.id}) }}\" style=\"margin-right:20px\">
                        <img src=\"{{ asset('button/edit.png') }}\" width=\"50\" height=\"50\">
                    </a>
                    <a class=\"text-decoration-none\" href=\"{{ path('vendor_delete', {'id': vendor.id}) }}\" onclick=\"return confirm('Do you want to delete this?')\">
                        <img src=\"{{ asset('button/delete.png') }}\" width=\"50\" height=\"50\">
                    </a>
                    {% endif %}
                </td>
            </tr>
        </tbody>
    </table>
</div>
{% endblock %}
", "vendor/detail.html.twig", "C:\\xampp\\htdocs\\assignment\\webproject\\templates\\vendor\\detail.html.twig");
    }
}
