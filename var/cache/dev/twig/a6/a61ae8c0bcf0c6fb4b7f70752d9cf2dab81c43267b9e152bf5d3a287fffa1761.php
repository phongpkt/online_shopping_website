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

/* employee/index.html.twig */
class __TwigTemplate_875e658e6a9fe2d2aa28277aa9c8606226327dbcc81b2b8fbb449059e0ae79f4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employee/index.html.twig", 1);
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
        echo "\t<style>
\t\t.row {
\t\t\twidth: 100%;
\t\t\ttext-align: center;
\t\t\tmargin-left: 7.5%;
\t\t}
\t\t.col-md-3{
\t\t\tmargin:20px;
\t\t}
\t\t.circle {
\t\t\tborder-radius: 50%;
\t\t}
\t</style>
\t<div class=\"container text-center\">
\t\t";
        // line 18
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 19
            echo "\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_add");
            echo "\">
\t\t\t\t<img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("button/add.png"), "html", null, true);
            echo "\" width=\"200px\" height=\"220px\">
\t\t\t</a>
\t\t";
        }
        // line 23
        echo "\t\t<div class=\"row\">
\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employees"]) || array_key_exists("employees", $context) ? $context["employees"] : (function () { throw new RuntimeError('Variable "employees" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 25
            echo "\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("team/profile.png"), "html", null, true);
            echo "\" alt=\"Icon\" width=\"100%\" class=\"circle w3-hover-opacity\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"w3-container w3-white\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<b>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 31), "html", null, true);
            echo "</b>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "employee/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 36,  118 => 31,  111 => 27,  107 => 26,  104 => 25,  100 => 24,  97 => 23,  91 => 20,  86 => 19,  84 => 18,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<style>
\t\t.row {
\t\t\twidth: 100%;
\t\t\ttext-align: center;
\t\t\tmargin-left: 7.5%;
\t\t}
\t\t.col-md-3{
\t\t\tmargin:20px;
\t\t}
\t\t.circle {
\t\t\tborder-radius: 50%;
\t\t}
\t</style>
\t<div class=\"container text-center\">
\t\t{% if is_granted(\"ROLE_ADMIN\") %}
\t\t\t<a href=\"{{ path('employee_add') }}\">
\t\t\t\t<img src=\"{{ asset('button/add.png') }}\" width=\"200px\" height=\"220px\">
\t\t\t</a>
\t\t{% endif %}
\t\t<div class=\"row\">
\t\t\t{% for employee in employees %}
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<a href=\"{{ path('employee_detail', {'id': employee.id}) }}\">
\t\t\t\t\t\t<img src=\"{{ asset('team/profile.png') }}\" alt=\"Icon\" width=\"100%\" class=\"circle w3-hover-opacity\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"w3-container w3-white\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<b>{{employee.name}}</b>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
{% endblock %}
", "employee/index.html.twig", "C:\\xampp\\htdocs\\assignment\\webproject\\templates\\employee\\index.html.twig");
    }
}
