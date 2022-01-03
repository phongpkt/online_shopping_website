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

/* vendor/add.html.twig */
class __TwigTemplate_df1c77a14eabe2e93451c464eac6e76bcd4bfab040ba623211d8ba5392758b0f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vendor/add.html.twig", 1);
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
        echo "<div class=\"container col-md-6 mt-3 mb-3\">
   <h2 class=\"text-center\">ADD NEW VENDOR</h2>
   <div class=\"col md-6\">
      ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["vendorForm"]) || array_key_exists("vendorForm", $context) ? $context["vendorForm"] : (function () { throw new RuntimeError('Variable "vendorForm" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
         <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vendorForm"]) || array_key_exists("vendorForm", $context) ? $context["vendorForm"] : (function () { throw new RuntimeError('Variable "vendorForm" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), 'label');
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vendorForm"]) || array_key_exists("vendorForm", $context) ? $context["vendorForm"] : (function () { throw new RuntimeError('Variable "vendorForm" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 14
        echo "
         </div>
         <div class=\"form-group\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vendorForm"]) || array_key_exists("vendorForm", $context) ? $context["vendorForm"] : (function () { throw new RuntimeError('Variable "vendorForm" does not exist.', 17, $this->source); })()), "address", [], "any", false, false, false, 17), 'label');
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vendorForm"]) || array_key_exists("vendorForm", $context) ? $context["vendorForm"] : (function () { throw new RuntimeError('Variable "vendorForm" does not exist.', 18, $this->source); })()), "address", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 22
        echo "
         </div>
         <div class=\"form-group\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vendorForm"]) || array_key_exists("vendorForm", $context) ? $context["vendorForm"] : (function () { throw new RuntimeError('Variable "vendorForm" does not exist.', 25, $this->source); })()), "contactNumber", [], "any", false, false, false, 25), 'label');
        echo "
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vendorForm"]) || array_key_exists("vendorForm", $context) ? $context["vendorForm"] : (function () { throw new RuntimeError('Variable "vendorForm" does not exist.', 26, $this->source); })()), "contactNumber", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 30
        echo "
         </div>
         <div class=\"form-group\">
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vendorForm"]) || array_key_exists("vendorForm", $context) ? $context["vendorForm"] : (function () { throw new RuntimeError('Variable "vendorForm" does not exist.', 33, $this->source); })()), "products", [], "any", false, false, false, 33), 'label');
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["vendorForm"]) || array_key_exists("vendorForm", $context) ? $context["vendorForm"] : (function () { throw new RuntimeError('Variable "vendorForm" does not exist.', 34, $this->source); })()), "products", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 38
        echo "
         </div>
         <div class=\"form-group text-center mt-3\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Add\" />
         </div>
      ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["vendorForm"]) || array_key_exists("vendorForm", $context) ? $context["vendorForm"] : (function () { throw new RuntimeError('Variable "vendorForm" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
   </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vendor/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 43,  117 => 38,  115 => 34,  111 => 33,  106 => 30,  104 => 26,  100 => 25,  95 => 22,  93 => 18,  89 => 17,  84 => 14,  82 => 10,  78 => 9,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
<div class=\"container col-md-6 mt-3 mb-3\">
   <h2 class=\"text-center\">ADD NEW VENDOR</h2>
   <div class=\"col md-6\">
      {{ form_start (vendorForm) }}
         <div class=\"form-group\">
            {{ form_label (vendorForm.name)}}
            {{ form_widget (vendorForm.name,
               {
                  'attr' : {'class' : 'form-control'}
               })
            }}
         </div>
         <div class=\"form-group\">
            {{ form_label (vendorForm.address)}}
            {{ form_widget (vendorForm.address,
               {
                  'attr' : {'class' : 'form-control'}
               })
            }}
         </div>
         <div class=\"form-group\">
            {{ form_label (vendorForm.contactNumber)}}
            {{ form_widget (vendorForm.contactNumber,
               {
                  'attr' : {'class' : 'form-control'}
               })
            }}
         </div>
         <div class=\"form-group\">
            {{ form_label (vendorForm.products)}}
            {{ form_widget (vendorForm.products,
               {
                  'attr' : {'class' : 'form-control'}
               })
            }}
         </div>
         <div class=\"form-group text-center mt-3\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Add\" />
         </div>
      {{ form_end (vendorForm)}}
   </div>
</div>
{% endblock %}", "vendor/add.html.twig", "C:\\xampp\\htdocs\\assignment\\webproject\\templates\\vendor\\add.html.twig");
    }
}
