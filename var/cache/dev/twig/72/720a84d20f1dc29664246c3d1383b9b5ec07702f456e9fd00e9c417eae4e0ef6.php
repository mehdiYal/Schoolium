<?php

/* :anneesViews:listAnnees.html.twig */
class __TwigTemplate_807b66a8f9d26a9718d6b1504bea91d0902136eeab2d197e4a31e4c93bd6fd70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":anneesViews:listAnnees.html.twig", 1);
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
        $__internal_aca6372ac906a475725a3e595734e39d1ae5462d16408335db95ac4501d1285b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca6372ac906a475725a3e595734e39d1ae5462d16408335db95ac4501d1285b->enter($__internal_aca6372ac906a475725a3e595734e39d1ae5462d16408335db95ac4501d1285b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:listAnnees.html.twig"));

        $__internal_d559967b9c1aa49ba609734d75ccaa4ec47358a7ff5a62b5a5d28e27056959df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d559967b9c1aa49ba609734d75ccaa4ec47358a7ff5a62b5a5d28e27056959df->enter($__internal_d559967b9c1aa49ba609734d75ccaa4ec47358a7ff5a62b5a5d28e27056959df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:listAnnees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aca6372ac906a475725a3e595734e39d1ae5462d16408335db95ac4501d1285b->leave($__internal_aca6372ac906a475725a3e595734e39d1ae5462d16408335db95ac4501d1285b_prof);

        
        $__internal_d559967b9c1aa49ba609734d75ccaa4ec47358a7ff5a62b5a5d28e27056959df->leave($__internal_d559967b9c1aa49ba609734d75ccaa4ec47358a7ff5a62b5a5d28e27056959df_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_442039702b4ce99e97dd725d88ebf607486297ecc48b6f92f4e9c74158e484aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_442039702b4ce99e97dd725d88ebf607486297ecc48b6f92f4e9c74158e484aa->enter($__internal_442039702b4ce99e97dd725d88ebf607486297ecc48b6f92f4e9c74158e484aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0041433508995cdebf53b7328d64671b2a9f426da93f8127ec47835c88a9d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0041433508995cdebf53b7328d64671b2a9f426da93f8127ec47835c88a9d42->enter($__internal_f0041433508995cdebf53b7328d64671b2a9f426da93f8127ec47835c88a9d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["annees"]) ? $context["annees"] : $this->getContext($context, "annees")));
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
        
        $__internal_f0041433508995cdebf53b7328d64671b2a9f426da93f8127ec47835c88a9d42->leave($__internal_f0041433508995cdebf53b7328d64671b2a9f426da93f8127ec47835c88a9d42_prof);

        
        $__internal_442039702b4ce99e97dd725d88ebf607486297ecc48b6f92f4e9c74158e484aa->leave($__internal_442039702b4ce99e97dd725d88ebf607486297ecc48b6f92f4e9c74158e484aa_prof);

    }

    public function getTemplateName()
    {
        return ":anneesViews:listAnnees.html.twig";
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
{% endblock %}", ":anneesViews:listAnnees.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/anneesViews/listAnnees.html.twig");
    }
}
