<?php

/* :elevesViews:parentEleve.html.twig */
class __TwigTemplate_17b9bc19ab7a442b3a88513c1b23a6678ed97a3614e99d71c1f1f652bf99b7cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":elevesViews:parentEleve.html.twig", 1);
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
        $__internal_260e4fb83d42dd05f685c03c11bcae6a55c2ff6f013cfe2f12de9eb2437f36e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_260e4fb83d42dd05f685c03c11bcae6a55c2ff6f013cfe2f12de9eb2437f36e5->enter($__internal_260e4fb83d42dd05f685c03c11bcae6a55c2ff6f013cfe2f12de9eb2437f36e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:parentEleve.html.twig"));

        $__internal_07d5d477e11044d71ce0dc4758694d448b7291b1ea8d35fe06f8a4ac09f30749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d5d477e11044d71ce0dc4758694d448b7291b1ea8d35fe06f8a4ac09f30749->enter($__internal_07d5d477e11044d71ce0dc4758694d448b7291b1ea8d35fe06f8a4ac09f30749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:parentEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_260e4fb83d42dd05f685c03c11bcae6a55c2ff6f013cfe2f12de9eb2437f36e5->leave($__internal_260e4fb83d42dd05f685c03c11bcae6a55c2ff6f013cfe2f12de9eb2437f36e5_prof);

        
        $__internal_07d5d477e11044d71ce0dc4758694d448b7291b1ea8d35fe06f8a4ac09f30749->leave($__internal_07d5d477e11044d71ce0dc4758694d448b7291b1ea8d35fe06f8a4ac09f30749_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f414a77259e70c47cdd644fff571bd3605361be8a07083fe120abbdf9240cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f414a77259e70c47cdd644fff571bd3605361be8a07083fe120abbdf9240cfa->enter($__internal_4f414a77259e70c47cdd644fff571bd3605361be8a07083fe120abbdf9240cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_afdae318b16b05f8c2f99d44b3f4791ed918d155d1698f5cfc81ed4c32be2e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afdae318b16b05f8c2f99d44b3f4791ed918d155d1698f5cfc81ed4c32be2e2a->enter($__internal_afdae318b16b05f8c2f99d44b3f4791ed918d155d1698f5cfc81ed4c32be2e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Pas de parent associé à ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "prenom", array()), "html", null, true);
        echo " </h1>
<h2>Selectioner un parent</h2>\t
\t<ol>
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parents"]) ? $context["parents"] : $this->getContext($context, "parents")));
        foreach ($context['_seq'] as $context["_key"] => $context["parant"]) {
            // line 8
            echo "\t\t\t<li>
\t\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["parant"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parant"], "prenom", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("assoParent", array("id" => $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "id", array()), "idp" => $this->getAttribute($context["parant"], "id", array()))), "html", null, true);
            echo "\">Associer</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t</ol>
";
        
        $__internal_afdae318b16b05f8c2f99d44b3f4791ed918d155d1698f5cfc81ed4c32be2e2a->leave($__internal_afdae318b16b05f8c2f99d44b3f4791ed918d155d1698f5cfc81ed4c32be2e2a_prof);

        
        $__internal_4f414a77259e70c47cdd644fff571bd3605361be8a07083fe120abbdf9240cfa->leave($__internal_4f414a77259e70c47cdd644fff571bd3605361be8a07083fe120abbdf9240cfa_prof);

    }

    public function getTemplateName()
    {
        return ":elevesViews:parentEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  65 => 9,  62 => 8,  58 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>Pas de parent associé à {{eleve.nom}} {{eleve.prenom}} </h1>
<h2>Selectioner un parent</h2>\t
\t<ol>
\t\t{% for parant in parents %}
\t\t\t<li>
\t\t\t\t{{ parant.nom}} {{ parant.prenom}} <a href=\"{{ path('assoParent',{'id':eleve.id,'idp':parant.id})}}\">Associer</a>
\t\t\t</li>
\t\t{% endfor %}
\t</ol>
{% endblock %}", ":elevesViews:parentEleve.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/elevesViews/parentEleve.html.twig");
    }
}
