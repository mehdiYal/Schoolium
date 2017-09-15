<?php

/* anneesViews/listAnnees.html.twig */
class __TwigTemplate_00c9d268bafef14fbc8cf880b9e99bbb01eed94513b1d1506238706c0889767c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "anneesViews/listAnnees.html.twig", 1);
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
        $__internal_d139220a72248ada08552af9f575236b61926528e329c7cf4bf17de85abc68d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d139220a72248ada08552af9f575236b61926528e329c7cf4bf17de85abc68d8->enter($__internal_d139220a72248ada08552af9f575236b61926528e329c7cf4bf17de85abc68d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anneesViews/listAnnees.html.twig"));

        $__internal_c226be4a9603a135be1a6ebac5b59fd3b15e5a9a9983dfbb2c152572d88d30ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c226be4a9603a135be1a6ebac5b59fd3b15e5a9a9983dfbb2c152572d88d30ea->enter($__internal_c226be4a9603a135be1a6ebac5b59fd3b15e5a9a9983dfbb2c152572d88d30ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anneesViews/listAnnees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d139220a72248ada08552af9f575236b61926528e329c7cf4bf17de85abc68d8->leave($__internal_d139220a72248ada08552af9f575236b61926528e329c7cf4bf17de85abc68d8_prof);

        
        $__internal_c226be4a9603a135be1a6ebac5b59fd3b15e5a9a9983dfbb2c152572d88d30ea->leave($__internal_c226be4a9603a135be1a6ebac5b59fd3b15e5a9a9983dfbb2c152572d88d30ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_12858049ca7ca28b78ac144f8e10051f5d4a8fa739d800ef5e36bba46292cf46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12858049ca7ca28b78ac144f8e10051f5d4a8fa739d800ef5e36bba46292cf46->enter($__internal_12858049ca7ca28b78ac144f8e10051f5d4a8fa739d800ef5e36bba46292cf46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_576454485977a1033b4f5f76823f5bf0a45d857408dac1e1361b96fb784f0aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576454485977a1033b4f5f76823f5bf0a45d857408dac1e1361b96fb784f0aa6->enter($__internal_576454485977a1033b4f5f76823f5bf0a45d857408dac1e1361b96fb784f0aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("annee"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annees"] ?? $this->getContext($context, "annees")));
        foreach ($context['_seq'] as $context["_key"] => $context["annee"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annee"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annee"], "niveau", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annee"], "specialite", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editAnnee", array("id" => $this->getAttribute($context["annee"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeAnnee", array("id" => $this->getAttribute($context["annee"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_576454485977a1033b4f5f76823f5bf0a45d857408dac1e1361b96fb784f0aa6->leave($__internal_576454485977a1033b4f5f76823f5bf0a45d857408dac1e1361b96fb784f0aa6_prof);

        
        $__internal_12858049ca7ca28b78ac144f8e10051f5d4a8fa739d800ef5e36bba46292cf46->leave($__internal_12858049ca7ca28b78ac144f8e10051f5d4a8fa739d800ef5e36bba46292cf46_prof);

    }

    public function getTemplateName()
    {
        return "anneesViews/listAnnees.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'annee'|trans}}</h1>
\t<ol>
\t\t{% for annee in annees %}
\t\t\t<li>{{ annee.nom}} {{ annee.niveau}} {{ annee.specialite}} <a href=\"{{ path('editAnnee',{'id':annee.id})}}\">Modifier</a> <a href=\"{{ path('removeAnnee',{'id':annee.id})}}\">Supprimer</a>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "anneesViews/listAnnees.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/anneesViews/listAnnees.html.twig");
    }
}
