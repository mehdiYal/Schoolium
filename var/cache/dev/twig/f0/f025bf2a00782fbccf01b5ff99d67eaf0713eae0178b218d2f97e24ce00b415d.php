<?php

/* matieresViews/listMatieres.html.twig */
class __TwigTemplate_d4f73ec384a46456ca9ccd5b4b29a7a6c02668cc562c20af5bc1a512ce0b9ea0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "matieresViews/listMatieres.html.twig", 1);
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
        $__internal_47ee5cafd86a945c2968cf5d3cf0516753a98c1aed9b2e89fc178f2810e0ca37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47ee5cafd86a945c2968cf5d3cf0516753a98c1aed9b2e89fc178f2810e0ca37->enter($__internal_47ee5cafd86a945c2968cf5d3cf0516753a98c1aed9b2e89fc178f2810e0ca37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/listMatieres.html.twig"));

        $__internal_b80638cf5061fa4c28ec4400f4828ceca41bd3e151c283da1a0a4321bc056544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80638cf5061fa4c28ec4400f4828ceca41bd3e151c283da1a0a4321bc056544->enter($__internal_b80638cf5061fa4c28ec4400f4828ceca41bd3e151c283da1a0a4321bc056544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/listMatieres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47ee5cafd86a945c2968cf5d3cf0516753a98c1aed9b2e89fc178f2810e0ca37->leave($__internal_47ee5cafd86a945c2968cf5d3cf0516753a98c1aed9b2e89fc178f2810e0ca37_prof);

        
        $__internal_b80638cf5061fa4c28ec4400f4828ceca41bd3e151c283da1a0a4321bc056544->leave($__internal_b80638cf5061fa4c28ec4400f4828ceca41bd3e151c283da1a0a4321bc056544_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e5b4c48f5554564080598431270e7f50e41f1102d95df15027a1af575130879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e5b4c48f5554564080598431270e7f50e41f1102d95df15027a1af575130879->enter($__internal_9e5b4c48f5554564080598431270e7f50e41f1102d95df15027a1af575130879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4317730c14dff9712e1868b8a98f695369c78a1a2de117582c948eeed8754166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4317730c14dff9712e1868b8a98f695369c78a1a2de117582c948eeed8754166->enter($__internal_4317730c14dff9712e1868b8a98f695369c78a1a2de117582c948eeed8754166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["matieres"] ?? $this->getContext($context, "matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "description", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editMatiere", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeMatiere", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_4317730c14dff9712e1868b8a98f695369c78a1a2de117582c948eeed8754166->leave($__internal_4317730c14dff9712e1868b8a98f695369c78a1a2de117582c948eeed8754166_prof);

        
        $__internal_9e5b4c48f5554564080598431270e7f50e41f1102d95df15027a1af575130879->leave($__internal_9e5b4c48f5554564080598431270e7f50e41f1102d95df15027a1af575130879_prof);

    }

    public function getTemplateName()
    {
        return "matieresViews/listMatieres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'matiere'|trans}}</h1>
\t<ol>
\t\t{% for matiere in matieres %}
\t\t\t<li>{{ matiere.nom}} {{ matiere.description}} <a href=\"{{ path('editMatiere',{'id':matiere.id})}}\">Modifier</a> <a href=\"{{ path('removeMatiere',{'id':matiere.id})}}\">Supprimer</a>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "matieresViews/listMatieres.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/matieresViews/listMatieres.html.twig");
    }
}
