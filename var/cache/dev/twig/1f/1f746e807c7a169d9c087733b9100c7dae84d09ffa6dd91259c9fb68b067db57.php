<?php

/* :default:index.html.twig */
class __TwigTemplate_a1aaff0c29a988bd904a7997dea4ea53a612238cdee7608c3b6f48129c82a135 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_b23edf820b3f1f9077ca227b2efd8e080a9b87190d1a915b4ccb351322443f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23edf820b3f1f9077ca227b2efd8e080a9b87190d1a915b4ccb351322443f7e->enter($__internal_b23edf820b3f1f9077ca227b2efd8e080a9b87190d1a915b4ccb351322443f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_a34e79481111feb3053562a9abe91c535fadfd1f7f245abe064cb48ff1faedb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34e79481111feb3053562a9abe91c535fadfd1f7f245abe064cb48ff1faedb3->enter($__internal_a34e79481111feb3053562a9abe91c535fadfd1f7f245abe064cb48ff1faedb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b23edf820b3f1f9077ca227b2efd8e080a9b87190d1a915b4ccb351322443f7e->leave($__internal_b23edf820b3f1f9077ca227b2efd8e080a9b87190d1a915b4ccb351322443f7e_prof);

        
        $__internal_a34e79481111feb3053562a9abe91c535fadfd1f7f245abe064cb48ff1faedb3->leave($__internal_a34e79481111feb3053562a9abe91c535fadfd1f7f245abe064cb48ff1faedb3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f591ecc97feb87aebca167ee38bcd6e194bbad20364e1da686acb86d74092d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f591ecc97feb87aebca167ee38bcd6e194bbad20364e1da686acb86d74092d78->enter($__internal_f591ecc97feb87aebca167ee38bcd6e194bbad20364e1da686acb86d74092d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f518c03c7f7b827a0d49ce7a32c0a64cc6939219e9e0bcaa90ff8c19ed697490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f518c03c7f7b827a0d49ce7a32c0a64cc6939219e9e0bcaa90ff8c19ed697490->enter($__internal_f518c03c7f7b827a0d49ce7a32c0a64cc6939219e9e0bcaa90ff8c19ed697490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\" style=\"text-align: center;\">
            <h1>Bienvenue chez Schoolium</h1>
            ";
        // line 7
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 8
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "</h1>
            ";
        }
        // line 10
        echo "        </div>
    </div>
";
        
        $__internal_f518c03c7f7b827a0d49ce7a32c0a64cc6939219e9e0bcaa90ff8c19ed697490->leave($__internal_f518c03c7f7b827a0d49ce7a32c0a64cc6939219e9e0bcaa90ff8c19ed697490_prof);

        
        $__internal_f591ecc97feb87aebca167ee38bcd6e194bbad20364e1da686acb86d74092d78->leave($__internal_f591ecc97feb87aebca167ee38bcd6e194bbad20364e1da686acb86d74092d78_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container\">
        <div class=\"row\" style=\"text-align: center;\">
            <h1>Bienvenue chez Schoolium</h1>
            {% if  app.user %}
            <h1>{{app.user.nom}}</h1>
            {% endif %}
        </div>
    </div>
{% endblock %}", ":default:index.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/default/index.html.twig");
    }
}
