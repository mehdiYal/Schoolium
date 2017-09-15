<?php

/* anneesViews/listAnnees.html.twig */
class __TwigTemplate_e9df42cfdb05a2b73f8bbbdd7103aa492a9484bab8240ef1a38ec04c321a9d6b extends Twig_Template
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
        $__internal_38f9b67d9c610e4db1162de11dcfb766dba55780fa1507444f18daa97baef1bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f9b67d9c610e4db1162de11dcfb766dba55780fa1507444f18daa97baef1bc->enter($__internal_38f9b67d9c610e4db1162de11dcfb766dba55780fa1507444f18daa97baef1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anneesViews/listAnnees.html.twig"));

        $__internal_5b27e6f9b41a3234126e88577f5589361848f92291badfe721b91ff8b532c6ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b27e6f9b41a3234126e88577f5589361848f92291badfe721b91ff8b532c6ee->enter($__internal_5b27e6f9b41a3234126e88577f5589361848f92291badfe721b91ff8b532c6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anneesViews/listAnnees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38f9b67d9c610e4db1162de11dcfb766dba55780fa1507444f18daa97baef1bc->leave($__internal_38f9b67d9c610e4db1162de11dcfb766dba55780fa1507444f18daa97baef1bc_prof);

        
        $__internal_5b27e6f9b41a3234126e88577f5589361848f92291badfe721b91ff8b532c6ee->leave($__internal_5b27e6f9b41a3234126e88577f5589361848f92291badfe721b91ff8b532c6ee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1580cfa6ee2bef5e9d986914c9cff494cb82d582c12b498ec45b24ee19ca20a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1580cfa6ee2bef5e9d986914c9cff494cb82d582c12b498ec45b24ee19ca20a1->enter($__internal_1580cfa6ee2bef5e9d986914c9cff494cb82d582c12b498ec45b24ee19ca20a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f91de958b8e382f86763323dfc5a699882d15bb10c0d899ecda24ef8d408bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f91de958b8e382f86763323dfc5a699882d15bb10c0d899ecda24ef8d408bf8->enter($__internal_2f91de958b8e382f86763323dfc5a699882d15bb10c0d899ecda24ef8d408bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2f91de958b8e382f86763323dfc5a699882d15bb10c0d899ecda24ef8d408bf8->leave($__internal_2f91de958b8e382f86763323dfc5a699882d15bb10c0d899ecda24ef8d408bf8_prof);

        
        $__internal_1580cfa6ee2bef5e9d986914c9cff494cb82d582c12b498ec45b24ee19ca20a1->leave($__internal_1580cfa6ee2bef5e9d986914c9cff494cb82d582c12b498ec45b24ee19ca20a1_prof);

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
{% endblock %}", "anneesViews/listAnnees.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\anneesViews\\listAnnees.html.twig");
    }
}
