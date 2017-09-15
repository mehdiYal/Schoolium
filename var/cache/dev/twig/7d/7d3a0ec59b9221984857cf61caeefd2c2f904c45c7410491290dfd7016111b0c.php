<?php

/* :anneesViews:listAnnees.html.twig */
class __TwigTemplate_f334bee14bc5f1e6e6a7031874d0f762131cd4f10f0d0c8a56a66c35dcdf2920 extends Twig_Template
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
        $__internal_bdf9fda6a15724c8d807409c3088c38b31da6a9b5f5c1acd577e7f29d517c3ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf9fda6a15724c8d807409c3088c38b31da6a9b5f5c1acd577e7f29d517c3ff->enter($__internal_bdf9fda6a15724c8d807409c3088c38b31da6a9b5f5c1acd577e7f29d517c3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:listAnnees.html.twig"));

        $__internal_0e22d3320d2ce2fc1c376d1920a7fa6cc064eb7dbd211221d9247a332c999fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e22d3320d2ce2fc1c376d1920a7fa6cc064eb7dbd211221d9247a332c999fb2->enter($__internal_0e22d3320d2ce2fc1c376d1920a7fa6cc064eb7dbd211221d9247a332c999fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:listAnnees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdf9fda6a15724c8d807409c3088c38b31da6a9b5f5c1acd577e7f29d517c3ff->leave($__internal_bdf9fda6a15724c8d807409c3088c38b31da6a9b5f5c1acd577e7f29d517c3ff_prof);

        
        $__internal_0e22d3320d2ce2fc1c376d1920a7fa6cc064eb7dbd211221d9247a332c999fb2->leave($__internal_0e22d3320d2ce2fc1c376d1920a7fa6cc064eb7dbd211221d9247a332c999fb2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb0df4adb6f7c004d95c66766e7e9346c3baed186aefc613f4a3c07537b7841e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb0df4adb6f7c004d95c66766e7e9346c3baed186aefc613f4a3c07537b7841e->enter($__internal_fb0df4adb6f7c004d95c66766e7e9346c3baed186aefc613f4a3c07537b7841e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_170b6ec581a35c1b9a509a27ac6722bcf6fbae7ea07c8770ad702f0e452a5319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170b6ec581a35c1b9a509a27ac6722bcf6fbae7ea07c8770ad702f0e452a5319->enter($__internal_170b6ec581a35c1b9a509a27ac6722bcf6fbae7ea07c8770ad702f0e452a5319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_170b6ec581a35c1b9a509a27ac6722bcf6fbae7ea07c8770ad702f0e452a5319->leave($__internal_170b6ec581a35c1b9a509a27ac6722bcf6fbae7ea07c8770ad702f0e452a5319_prof);

        
        $__internal_fb0df4adb6f7c004d95c66766e7e9346c3baed186aefc613f4a3c07537b7841e->leave($__internal_fb0df4adb6f7c004d95c66766e7e9346c3baed186aefc613f4a3c07537b7841e_prof);

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
{% endblock %}", ":anneesViews:listAnnees.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources\\views/anneesViews/listAnnees.html.twig");
    }
}
