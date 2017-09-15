<?php

/* :default:index.html.twig */
class __TwigTemplate_a08802ea1eb4a06f15da1ac00a18f06f26164a6fe1c9c16d4f766b523b80e2b7 extends Twig_Template
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
        $__internal_d1813f8fe97549d49ac9fe81110c2fb7a36f545d636b487071fea8be7fed36ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1813f8fe97549d49ac9fe81110c2fb7a36f545d636b487071fea8be7fed36ed->enter($__internal_d1813f8fe97549d49ac9fe81110c2fb7a36f545d636b487071fea8be7fed36ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_fad1b10b0df6c99ab36bebaa847e31c1c36a09a27383cd3a1221449683609a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad1b10b0df6c99ab36bebaa847e31c1c36a09a27383cd3a1221449683609a81->enter($__internal_fad1b10b0df6c99ab36bebaa847e31c1c36a09a27383cd3a1221449683609a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1813f8fe97549d49ac9fe81110c2fb7a36f545d636b487071fea8be7fed36ed->leave($__internal_d1813f8fe97549d49ac9fe81110c2fb7a36f545d636b487071fea8be7fed36ed_prof);

        
        $__internal_fad1b10b0df6c99ab36bebaa847e31c1c36a09a27383cd3a1221449683609a81->leave($__internal_fad1b10b0df6c99ab36bebaa847e31c1c36a09a27383cd3a1221449683609a81_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c455c2b778659a97c4eb6ca24273c188da9ad10c59e51e832c3b3835a21e928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c455c2b778659a97c4eb6ca24273c188da9ad10c59e51e832c3b3835a21e928->enter($__internal_8c455c2b778659a97c4eb6ca24273c188da9ad10c59e51e832c3b3835a21e928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63a5f92b09329af715e570146d343c5208fa66fbc0bcfcfdb7924fe58c3b1f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a5f92b09329af715e570146d343c5208fa66fbc0bcfcfdb7924fe58c3b1f69->enter($__internal_63a5f92b09329af715e570146d343c5208fa66fbc0bcfcfdb7924fe58c3b1f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\" style=\"text-align: center;\">
            <h1>Bienvenue chez Schoolium</h1>
            ";
        // line 7
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 8
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "</h1>
            ";
        }
        // line 10
        echo "        </div>
    </div>
";
        
        $__internal_63a5f92b09329af715e570146d343c5208fa66fbc0bcfcfdb7924fe58c3b1f69->leave($__internal_63a5f92b09329af715e570146d343c5208fa66fbc0bcfcfdb7924fe58c3b1f69_prof);

        
        $__internal_8c455c2b778659a97c4eb6ca24273c188da9ad10c59e51e832c3b3835a21e928->leave($__internal_8c455c2b778659a97c4eb6ca24273c188da9ad10c59e51e832c3b3835a21e928_prof);

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
{% endblock %}", ":default:index.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources\\views/default/index.html.twig");
    }
}
