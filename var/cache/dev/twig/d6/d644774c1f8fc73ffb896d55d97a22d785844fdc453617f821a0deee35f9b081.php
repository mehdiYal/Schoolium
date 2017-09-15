<?php

/* elevesViews/listEleves.html.twig */
class __TwigTemplate_cb96223ff66fbc72510c87782cdc85650852bdb9ae71c246d57d0d7652e74b94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "elevesViews/listEleves.html.twig", 1);
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
        $__internal_fa42e1da97f111ab2767505769f95e2eb2bc48aa78a986a96b39d21cfbf4ccb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa42e1da97f111ab2767505769f95e2eb2bc48aa78a986a96b39d21cfbf4ccb2->enter($__internal_fa42e1da97f111ab2767505769f95e2eb2bc48aa78a986a96b39d21cfbf4ccb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/listEleves.html.twig"));

        $__internal_8680ec9e529775cebb1fea467490cff8ee269ddde1d5a80d0e51a2d5d1c418c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8680ec9e529775cebb1fea467490cff8ee269ddde1d5a80d0e51a2d5d1c418c1->enter($__internal_8680ec9e529775cebb1fea467490cff8ee269ddde1d5a80d0e51a2d5d1c418c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/listEleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa42e1da97f111ab2767505769f95e2eb2bc48aa78a986a96b39d21cfbf4ccb2->leave($__internal_fa42e1da97f111ab2767505769f95e2eb2bc48aa78a986a96b39d21cfbf4ccb2_prof);

        
        $__internal_8680ec9e529775cebb1fea467490cff8ee269ddde1d5a80d0e51a2d5d1c418c1->leave($__internal_8680ec9e529775cebb1fea467490cff8ee269ddde1d5a80d0e51a2d5d1c418c1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_19ce453f456932cc1e60a59e4dabc3364136bd31fa8fc410bc4b938bcb85b888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ce453f456932cc1e60a59e4dabc3364136bd31fa8fc410bc4b938bcb85b888->enter($__internal_19ce453f456932cc1e60a59e4dabc3364136bd31fa8fc410bc4b938bcb85b888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b3d4358b2347acd3115e158f9f1cbc41287dd4f4e3667caba2a7ba4307fc03f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3d4358b2347acd3115e158f9f1cbc41287dd4f4e3667caba2a7ba4307fc03f->enter($__internal_7b3d4358b2347acd3115e158f9f1cbc41287dd4f4e3667caba2a7ba4307fc03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("students"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["eleves"] ?? $this->getContext($context, "eleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "prenom", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
            echo "</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
            echo "</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
            echo "</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("parentEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parent"), "html", null, true);
            echo "</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("absenceEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("absence"), "html", null, true);
            echo "</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("retardEleve", array("id" => $this->getAttribute($context["eleve"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("retard"), "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_7b3d4358b2347acd3115e158f9f1cbc41287dd4f4e3667caba2a7ba4307fc03f->leave($__internal_7b3d4358b2347acd3115e158f9f1cbc41287dd4f4e3667caba2a7ba4307fc03f_prof);

        
        $__internal_19ce453f456932cc1e60a59e4dabc3364136bd31fa8fc410bc4b938bcb85b888->leave($__internal_19ce453f456932cc1e60a59e4dabc3364136bd31fa8fc410bc4b938bcb85b888_prof);

    }

    public function getTemplateName()
    {
        return "elevesViews/listEleves.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'students'|trans}}</h1>
\t<ol>
\t\t{% for eleve in eleves %}
\t\t\t<li>{{ eleve.nom}} {{ eleve.prenom}} <a href=\"{{ path('editEleve',{'id':eleve.id})}}\">{{'edit'|trans}}</a> <a href=\"{{ path('removeEleve',{'id':eleve.id})}}\">{{'delete'|trans}}</a> <a href=\"{{ path('profileEleve',{'id':eleve.id})}}\">{{'profile'|trans}}</a> <a href=\"{{ path('parentEleve',{'id':eleve.id})}}\">{{'parent'|trans}}</a> <a href=\"{{ path('absenceEleve',{'id':eleve.id})}}\">{{'absence'|trans}}</a> <a href=\"{{ path('retardEleve',{'id':eleve.id})}}\">{{'retard'|trans}}</a></li>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "elevesViews/listEleves.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\elevesViews\\listEleves.html.twig");
    }
}
