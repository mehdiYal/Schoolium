<?php

/* :transportsViews:listTransports.html.twig */
class __TwigTemplate_4624c745cdc4c76eed9bd7052980d5299ac21c65b1e5868f379f571ab7c37f27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":transportsViews:listTransports.html.twig", 1);
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
        $__internal_810714a2fc6c90aa3c02ad5b8fc7e3b2e2bd95a0cbfd5cd8470b7aed83721ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_810714a2fc6c90aa3c02ad5b8fc7e3b2e2bd95a0cbfd5cd8470b7aed83721ed6->enter($__internal_810714a2fc6c90aa3c02ad5b8fc7e3b2e2bd95a0cbfd5cd8470b7aed83721ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transportsViews:listTransports.html.twig"));

        $__internal_c2a43873ddf6b690f6b3d7f0538abc2b2d584d10d354946e68f948b687cfd0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a43873ddf6b690f6b3d7f0538abc2b2d584d10d354946e68f948b687cfd0ed->enter($__internal_c2a43873ddf6b690f6b3d7f0538abc2b2d584d10d354946e68f948b687cfd0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transportsViews:listTransports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_810714a2fc6c90aa3c02ad5b8fc7e3b2e2bd95a0cbfd5cd8470b7aed83721ed6->leave($__internal_810714a2fc6c90aa3c02ad5b8fc7e3b2e2bd95a0cbfd5cd8470b7aed83721ed6_prof);

        
        $__internal_c2a43873ddf6b690f6b3d7f0538abc2b2d584d10d354946e68f948b687cfd0ed->leave($__internal_c2a43873ddf6b690f6b3d7f0538abc2b2d584d10d354946e68f948b687cfd0ed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5e15123970ce53ac4c73e6b653e99709350633e4d1ed74032c90aecb61a7e80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5e15123970ce53ac4c73e6b653e99709350633e4d1ed74032c90aecb61a7e80->enter($__internal_d5e15123970ce53ac4c73e6b653e99709350633e4d1ed74032c90aecb61a7e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab7efe96a7715ada2d40cd492fc975942cc2a0af9073ebefad95220f8d8506bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7efe96a7715ada2d40cd492fc975942cc2a0af9073ebefad95220f8d8506bb->enter($__internal_ab7efe96a7715ada2d40cd492fc975942cc2a0af9073ebefad95220f8d8506bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("lignes"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["transports"] ?? $this->getContext($context, "transports")));
        foreach ($context['_seq'] as $context["_key"] => $context["trans"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "depart", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "trajet", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["trans"], "heureDepart", array()), "h:m"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "capacite", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editTransport", array("id" => $this->getAttribute($context["trans"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeTransport", array("id" => $this->getAttribute($context["trans"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trans'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_ab7efe96a7715ada2d40cd492fc975942cc2a0af9073ebefad95220f8d8506bb->leave($__internal_ab7efe96a7715ada2d40cd492fc975942cc2a0af9073ebefad95220f8d8506bb_prof);

        
        $__internal_d5e15123970ce53ac4c73e6b653e99709350633e4d1ed74032c90aecb61a7e80->leave($__internal_d5e15123970ce53ac4c73e6b653e99709350633e4d1ed74032c90aecb61a7e80_prof);

    }

    public function getTemplateName()
    {
        return ":transportsViews:listTransports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'lignes'|trans}}</h1>
\t<ol>
\t\t{% for trans in transports %}
\t\t\t<li>{{ trans.nom}} {{ trans.depart}} {{ trans.trajet}} {{ trans.heureDepart|date('h:m')}} {{ trans.capacite}} <a href=\"{{ path('editTransport',{'id':trans.id})}}\">Modifier</a> <a href=\"{{ path('removeTransport',{'id':trans.id})}}\">Supprimer</a>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", ":transportsViews:listTransports.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources\\views/transportsViews/listTransports.html.twig");
    }
}
