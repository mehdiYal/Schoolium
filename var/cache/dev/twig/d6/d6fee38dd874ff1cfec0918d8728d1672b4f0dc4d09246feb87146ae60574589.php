<?php

/* :elevesViews:listEleves.html.twig */
class __TwigTemplate_1548c35d5c017f3e363f75e3ef8da8c3c218f24989e6e65ba58d46c8cf6d91b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":elevesViews:listEleves.html.twig", 1);
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
        $__internal_2141bc543c4cfddf43e459a9f785201f95285ce1ac1c542006131a1cc369529d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2141bc543c4cfddf43e459a9f785201f95285ce1ac1c542006131a1cc369529d->enter($__internal_2141bc543c4cfddf43e459a9f785201f95285ce1ac1c542006131a1cc369529d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:listEleves.html.twig"));

        $__internal_ab4e7382134b5de455460a083f2e24fd3a100b59e188b82685b4256ec7e039e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4e7382134b5de455460a083f2e24fd3a100b59e188b82685b4256ec7e039e7->enter($__internal_ab4e7382134b5de455460a083f2e24fd3a100b59e188b82685b4256ec7e039e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:listEleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2141bc543c4cfddf43e459a9f785201f95285ce1ac1c542006131a1cc369529d->leave($__internal_2141bc543c4cfddf43e459a9f785201f95285ce1ac1c542006131a1cc369529d_prof);

        
        $__internal_ab4e7382134b5de455460a083f2e24fd3a100b59e188b82685b4256ec7e039e7->leave($__internal_ab4e7382134b5de455460a083f2e24fd3a100b59e188b82685b4256ec7e039e7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55581d45da8f37d5c4238c2bcd626f1ee6abba859efb6c87fe0c5b546d3be3ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55581d45da8f37d5c4238c2bcd626f1ee6abba859efb6c87fe0c5b546d3be3ed->enter($__internal_55581d45da8f37d5c4238c2bcd626f1ee6abba859efb6c87fe0c5b546d3be3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1424f2243a30bdfa8f0d7cf23a6428577df0bc7d5fdd79edffec0e5e54a2708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1424f2243a30bdfa8f0d7cf23a6428577df0bc7d5fdd79edffec0e5e54a2708->enter($__internal_a1424f2243a30bdfa8f0d7cf23a6428577df0bc7d5fdd79edffec0e5e54a2708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["eleves"]) ? $context["eleves"] : $this->getContext($context, "eleves")));
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
        
        $__internal_a1424f2243a30bdfa8f0d7cf23a6428577df0bc7d5fdd79edffec0e5e54a2708->leave($__internal_a1424f2243a30bdfa8f0d7cf23a6428577df0bc7d5fdd79edffec0e5e54a2708_prof);

        
        $__internal_55581d45da8f37d5c4238c2bcd626f1ee6abba859efb6c87fe0c5b546d3be3ed->leave($__internal_55581d45da8f37d5c4238c2bcd626f1ee6abba859efb6c87fe0c5b546d3be3ed_prof);

    }

    public function getTemplateName()
    {
        return ":elevesViews:listEleves.html.twig";
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
{% endblock %}", ":elevesViews:listEleves.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/elevesViews/listEleves.html.twig");
    }
}
