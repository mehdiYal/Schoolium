<?php

/* elevesViews/listEleves.html.twig */
class __TwigTemplate_f5ceb7c2421818568c9dc5a7a33444e1876287fbd53a4883f94fe993909ba273 extends Twig_Template
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
        $__internal_f24b4e502cd60091335787c76d66110e4e3c64faac41a987e4caefa78c12fa56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f24b4e502cd60091335787c76d66110e4e3c64faac41a987e4caefa78c12fa56->enter($__internal_f24b4e502cd60091335787c76d66110e4e3c64faac41a987e4caefa78c12fa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/listEleves.html.twig"));

        $__internal_08f76328b502fd5b77bd508b2cedb90c4cccbf80b2c054fea2ca7b93801d616c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f76328b502fd5b77bd508b2cedb90c4cccbf80b2c054fea2ca7b93801d616c->enter($__internal_08f76328b502fd5b77bd508b2cedb90c4cccbf80b2c054fea2ca7b93801d616c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/listEleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f24b4e502cd60091335787c76d66110e4e3c64faac41a987e4caefa78c12fa56->leave($__internal_f24b4e502cd60091335787c76d66110e4e3c64faac41a987e4caefa78c12fa56_prof);

        
        $__internal_08f76328b502fd5b77bd508b2cedb90c4cccbf80b2c054fea2ca7b93801d616c->leave($__internal_08f76328b502fd5b77bd508b2cedb90c4cccbf80b2c054fea2ca7b93801d616c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8e8f48bb5fd838faa0dc436e9306382b6bd2fa7a24a8eed83248269664c93c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e8f48bb5fd838faa0dc436e9306382b6bd2fa7a24a8eed83248269664c93c8->enter($__internal_f8e8f48bb5fd838faa0dc436e9306382b6bd2fa7a24a8eed83248269664c93c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f1f0e228536d64344d3006010671e57e6c03580f9fc0c39c1d4ed9a937701a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f1f0e228536d64344d3006010671e57e6c03580f9fc0c39c1d4ed9a937701a2->enter($__internal_3f1f0e228536d64344d3006010671e57e6c03580f9fc0c39c1d4ed9a937701a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3f1f0e228536d64344d3006010671e57e6c03580f9fc0c39c1d4ed9a937701a2->leave($__internal_3f1f0e228536d64344d3006010671e57e6c03580f9fc0c39c1d4ed9a937701a2_prof);

        
        $__internal_f8e8f48bb5fd838faa0dc436e9306382b6bd2fa7a24a8eed83248269664c93c8->leave($__internal_f8e8f48bb5fd838faa0dc436e9306382b6bd2fa7a24a8eed83248269664c93c8_prof);

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
{% endblock %}", "elevesViews/listEleves.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/elevesViews/listEleves.html.twig");
    }
}
