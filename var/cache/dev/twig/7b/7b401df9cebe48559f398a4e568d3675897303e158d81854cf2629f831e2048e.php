<?php

/* :schoolsViews:listSchools.html.twig */
class __TwigTemplate_8b32781e1a2d61a35f9886e66b54fae13c389f080b81c8b4ef36d58f0e8c38fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":schoolsViews:listSchools.html.twig", 1);
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
        $__internal_2d963ffcceb5d71e7f902e2607998bd605a1dddcdf5ef9b3e49bb4069f9d3fdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d963ffcceb5d71e7f902e2607998bd605a1dddcdf5ef9b3e49bb4069f9d3fdd->enter($__internal_2d963ffcceb5d71e7f902e2607998bd605a1dddcdf5ef9b3e49bb4069f9d3fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:listSchools.html.twig"));

        $__internal_21355ca5532ea33734cf50284416043f64df7770df1e8926060dfb58167d4667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21355ca5532ea33734cf50284416043f64df7770df1e8926060dfb58167d4667->enter($__internal_21355ca5532ea33734cf50284416043f64df7770df1e8926060dfb58167d4667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:listSchools.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d963ffcceb5d71e7f902e2607998bd605a1dddcdf5ef9b3e49bb4069f9d3fdd->leave($__internal_2d963ffcceb5d71e7f902e2607998bd605a1dddcdf5ef9b3e49bb4069f9d3fdd_prof);

        
        $__internal_21355ca5532ea33734cf50284416043f64df7770df1e8926060dfb58167d4667->leave($__internal_21355ca5532ea33734cf50284416043f64df7770df1e8926060dfb58167d4667_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6002c1b22f8deb1f8db3069856a6a220c899b1928d74327e1e3370561fc88674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6002c1b22f8deb1f8db3069856a6a220c899b1928d74327e1e3370561fc88674->enter($__internal_6002c1b22f8deb1f8db3069856a6a220c899b1928d74327e1e3370561fc88674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_454de9baffb6ee462e2a7892ec4276582e5c5726a9e40c8c465dbf1d8be3147b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454de9baffb6ee462e2a7892ec4276582e5c5726a9e40c8c465dbf1d8be3147b->enter($__internal_454de9baffb6ee462e2a7892ec4276582e5c5726a9e40c8c465dbf1d8be3147b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_454de9baffb6ee462e2a7892ec4276582e5c5726a9e40c8c465dbf1d8be3147b->leave($__internal_454de9baffb6ee462e2a7892ec4276582e5c5726a9e40c8c465dbf1d8be3147b_prof);

        
        $__internal_6002c1b22f8deb1f8db3069856a6a220c899b1928d74327e1e3370561fc88674->leave($__internal_6002c1b22f8deb1f8db3069856a6a220c899b1928d74327e1e3370561fc88674_prof);

    }

    public function getTemplateName()
    {
        return ":schoolsViews:listSchools.html.twig";
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
{% endblock %}", ":schoolsViews:listSchools.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources\\views/schoolsViews/listSchools.html.twig");
    }
}
