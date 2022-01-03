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

/* customer/index.html.twig */
class __TwigTemplate_e7773d88f68ba9fd7c0f4508eb19601c10e43be1fca70741ca3f9fb99c88c2f6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "customer/index.html.twig", 1);
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
\t\t\tborder:1px solid black; 
\t\t\tmargin:20px;
\t\t\tborder-radius: 50%;
\t\t}
\t</style>
\t<div class=\"container text-center\">
\t\t";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 18
            echo "\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_add");
            echo "\">
\t\t\t\t<img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("button/add.png"), "html", null, true);
            echo "\" width=\"200px\" height=\"220px\">
\t\t\t</a>
\t\t";
        }
        // line 22
        echo "\t\t<div class=\"row\">
\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new RuntimeError('Variable "customers" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 24
            echo "\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<a class=\"text-decoration-none\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["customer"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("team/customer.png"), "html", null, true);
            echo "\" alt=\"Icon\" style=\"width:80%;\" class=\"w3-hover-opacity\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"w3-container w3-white\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<b>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "</b>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "customer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  117 => 30,  110 => 26,  106 => 25,  103 => 24,  99 => 23,  96 => 22,  90 => 19,  85 => 18,  83 => 17,  68 => 4,  58 => 3,  35 => 1,);
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
\t\t\tborder:1px solid black; 
\t\t\tmargin:20px;
\t\t\tborder-radius: 50%;
\t\t}
\t</style>
\t<div class=\"container text-center\">
\t\t{% if is_granted(\"ROLE_ADMIN\") %}
\t\t\t<a href=\"{{ path('customer_add') }}\">
\t\t\t\t<img src=\"{{ asset('button/add.png') }}\" width=\"200px\" height=\"220px\">
\t\t\t</a>
\t\t{% endif %}
\t\t<div class=\"row\">
\t\t\t{% for customer in customers %}
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<a class=\"text-decoration-none\" href=\"{{ path('customer_detail', {'id': customer.id}) }}\">
\t\t\t\t\t\t<img src=\"{{ asset('team/customer.png') }}\" alt=\"Icon\" style=\"width:80%;\" class=\"w3-hover-opacity\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"w3-container w3-white\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<b>{{customer.name}}</b>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
{% endblock %}
", "customer/index.html.twig", "C:\\xampp\\htdocs\\assignment\\webproject\\templates\\customer\\index.html.twig");
    }
}
