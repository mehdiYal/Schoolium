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
        $__internal_81f9e6eaac8e2535148de3e9d3e505c6b6cee45b7831e6cb7813219a77c66ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f9e6eaac8e2535148de3e9d3e505c6b6cee45b7831e6cb7813219a77c66ffb->enter($__internal_81f9e6eaac8e2535148de3e9d3e505c6b6cee45b7831e6cb7813219a77c66ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anneesViews/listAnnees.html.twig"));

        $__internal_190a148ae231c07ab8cb95fd522f322c5c967aaaef1fcf23d5b07cb7ef43fc25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190a148ae231c07ab8cb95fd522f322c5c967aaaef1fcf23d5b07cb7ef43fc25->enter($__internal_190a148ae231c07ab8cb95fd522f322c5c967aaaef1fcf23d5b07cb7ef43fc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anneesViews/listAnnees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81f9e6eaac8e2535148de3e9d3e505c6b6cee45b7831e6cb7813219a77c66ffb->leave($__internal_81f9e6eaac8e2535148de3e9d3e505c6b6cee45b7831e6cb7813219a77c66ffb_prof);

        
        $__internal_190a148ae231c07ab8cb95fd522f322c5c967aaaef1fcf23d5b07cb7ef43fc25->leave($__internal_190a148ae231c07ab8cb95fd522f322c5c967aaaef1fcf23d5b07cb7ef43fc25_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_daf005cdf969a3386289245314f59629d1270211b21ccad60824b6e3d0841f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf005cdf969a3386289245314f59629d1270211b21ccad60824b6e3d0841f9a->enter($__internal_daf005cdf969a3386289245314f59629d1270211b21ccad60824b6e3d0841f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb47211efe5c3d2dc63e15448770f13cd432d44c81ec64037b5e4791c11b71ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb47211efe5c3d2dc63e15448770f13cd432d44c81ec64037b5e4791c11b71ff->enter($__internal_bb47211efe5c3d2dc63e15448770f13cd432d44c81ec64037b5e4791c11b71ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bb47211efe5c3d2dc63e15448770f13cd432d44c81ec64037b5e4791c11b71ff->leave($__internal_bb47211efe5c3d2dc63e15448770f13cd432d44c81ec64037b5e4791c11b71ff_prof);

        
        $__internal_daf005cdf969a3386289245314f59629d1270211b21ccad60824b6e3d0841f9a->leave($__internal_daf005cdf969a3386289245314f59629d1270211b21ccad60824b6e3d0841f9a_prof);

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
