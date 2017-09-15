<?php

/* sallesViews/listSalles.html.twig */
class __TwigTemplate_a71cc71eff2a996877b493ef5e8e89d08038620444dcc86d3d2c7a68bcee0651 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sallesViews/listSalles.html.twig", 1);
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
        $__internal_0438bd2e7395718ac844f0b4fbee75a2997b8d7bd0f8ad88680b03689942bb3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0438bd2e7395718ac844f0b4fbee75a2997b8d7bd0f8ad88680b03689942bb3a->enter($__internal_0438bd2e7395718ac844f0b4fbee75a2997b8d7bd0f8ad88680b03689942bb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sallesViews/listSalles.html.twig"));

        $__internal_15bc127a902bf56b570139d45431a6e55ac7693b9c31b81e1a0db8c246a21473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15bc127a902bf56b570139d45431a6e55ac7693b9c31b81e1a0db8c246a21473->enter($__internal_15bc127a902bf56b570139d45431a6e55ac7693b9c31b81e1a0db8c246a21473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sallesViews/listSalles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0438bd2e7395718ac844f0b4fbee75a2997b8d7bd0f8ad88680b03689942bb3a->leave($__internal_0438bd2e7395718ac844f0b4fbee75a2997b8d7bd0f8ad88680b03689942bb3a_prof);

        
        $__internal_15bc127a902bf56b570139d45431a6e55ac7693b9c31b81e1a0db8c246a21473->leave($__internal_15bc127a902bf56b570139d45431a6e55ac7693b9c31b81e1a0db8c246a21473_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3b8b0325765fc22ac731add93609650fa6f41307e210a1b123a5bbf447499e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b8b0325765fc22ac731add93609650fa6f41307e210a1b123a5bbf447499e7->enter($__internal_c3b8b0325765fc22ac731add93609650fa6f41307e210a1b123a5bbf447499e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2339aa73656e0fd08f36701019c542a11a43e31d52072947db1dfc340b613ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2339aa73656e0fd08f36701019c542a11a43e31d52072947db1dfc340b613ca->enter($__internal_e2339aa73656e0fd08f36701019c542a11a43e31d52072947db1dfc340b613ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("salles"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["salles"] ?? $this->getContext($context, "salles")));
        foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "capacite", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "equipement", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editSalle", array("id" => $this->getAttribute($context["salle"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeSalle", array("id" => $this->getAttribute($context["salle"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_e2339aa73656e0fd08f36701019c542a11a43e31d52072947db1dfc340b613ca->leave($__internal_e2339aa73656e0fd08f36701019c542a11a43e31d52072947db1dfc340b613ca_prof);

        
        $__internal_c3b8b0325765fc22ac731add93609650fa6f41307e210a1b123a5bbf447499e7->leave($__internal_c3b8b0325765fc22ac731add93609650fa6f41307e210a1b123a5bbf447499e7_prof);

    }

    public function getTemplateName()
    {
        return "sallesViews/listSalles.html.twig";
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
<h1>{{'list'|trans}} {{'salles'|trans}}</h1>
\t<ol>
\t\t{% for salle in salles %}
\t\t\t<li>{{ salle.nom}} {{ salle.capacite}} {{ salle.equipement}} <a href=\"{{ path('editSalle',{'id':salle.id})}}\">Modifier</a> <a href=\"{{ path('removeSalle',{'id':salle.id})}}\">Supprimer</a>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "sallesViews/listSalles.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\sallesViews\\listSalles.html.twig");
    }
}
