<?php

/* schoolsViews/listSchools.html.twig */
class __TwigTemplate_aa0f4f7251662980a063bf54b16bdf960a9799e66a4efea201fc6666793f602b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "schoolsViews/listSchools.html.twig", 1);
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
        $__internal_c17f2210c79984e3eeb1e6bfb92d5718d4ec6cd7bfbe9d95b7882226ba0d8085 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c17f2210c79984e3eeb1e6bfb92d5718d4ec6cd7bfbe9d95b7882226ba0d8085->enter($__internal_c17f2210c79984e3eeb1e6bfb92d5718d4ec6cd7bfbe9d95b7882226ba0d8085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "schoolsViews/listSchools.html.twig"));

        $__internal_a504f6f942285426fee94af449a329a631400f82c2bcb7152d6ea909647dc882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a504f6f942285426fee94af449a329a631400f82c2bcb7152d6ea909647dc882->enter($__internal_a504f6f942285426fee94af449a329a631400f82c2bcb7152d6ea909647dc882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "schoolsViews/listSchools.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c17f2210c79984e3eeb1e6bfb92d5718d4ec6cd7bfbe9d95b7882226ba0d8085->leave($__internal_c17f2210c79984e3eeb1e6bfb92d5718d4ec6cd7bfbe9d95b7882226ba0d8085_prof);

        
        $__internal_a504f6f942285426fee94af449a329a631400f82c2bcb7152d6ea909647dc882->leave($__internal_a504f6f942285426fee94af449a329a631400f82c2bcb7152d6ea909647dc882_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_392bf47c0ee3d7c4271a639768b63614c94c1165bbbb77c20d0a136ada59974b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392bf47c0ee3d7c4271a639768b63614c94c1165bbbb77c20d0a136ada59974b->enter($__internal_392bf47c0ee3d7c4271a639768b63614c94c1165bbbb77c20d0a136ada59974b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cffd22c2bf24b583633e210ae1566b2c38c76c2f2446af426cde9cab359005db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cffd22c2bf24b583633e210ae1566b2c38c76c2f2446af426cde9cab359005db->enter($__internal_cffd22c2bf24b583633e210ae1566b2c38c76c2f2446af426cde9cab359005db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("schools"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ecoles"] ?? $this->getContext($context, "ecoles")));
        foreach ($context['_seq'] as $context["_key"] => $context["ecole"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "ville", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">Profile</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ecole'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_cffd22c2bf24b583633e210ae1566b2c38c76c2f2446af426cde9cab359005db->leave($__internal_cffd22c2bf24b583633e210ae1566b2c38c76c2f2446af426cde9cab359005db_prof);

        
        $__internal_392bf47c0ee3d7c4271a639768b63614c94c1165bbbb77c20d0a136ada59974b->leave($__internal_392bf47c0ee3d7c4271a639768b63614c94c1165bbbb77c20d0a136ada59974b_prof);

    }

    public function getTemplateName()
    {
        return "schoolsViews/listSchools.html.twig";
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
<h1>{{'list'|trans}} {{'schools'|trans}}</h1>
\t<ol>
\t\t{% for ecole in ecoles %}
\t\t\t<li>{{ ecole.nom}} {{ ecole.ville}} <a href=\"{{ path('editSchool',{'id':ecole.id})}}\">Modifier</a> <a href=\"{{ path('removeSchool',{'id':ecole.id})}}\">Supprimer</a> <a href=\"{{ path('profileSchool',{'id':ecole.id})}}\">Profile</a></li>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "schoolsViews/listSchools.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\schoolsViews\\listSchools.html.twig");
    }
}
