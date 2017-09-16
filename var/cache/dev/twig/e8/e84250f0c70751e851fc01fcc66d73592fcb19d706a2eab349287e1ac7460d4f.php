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
        $__internal_29aff75a33b579fa9fdd0c500a94608bf721f3542b97626b0a046d0f164b2316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29aff75a33b579fa9fdd0c500a94608bf721f3542b97626b0a046d0f164b2316->enter($__internal_29aff75a33b579fa9fdd0c500a94608bf721f3542b97626b0a046d0f164b2316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/listEleves.html.twig"));

        $__internal_92d68e177d1e7c59e05c1a4a7d960e479d940340011850fa87586f5adffea8c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d68e177d1e7c59e05c1a4a7d960e479d940340011850fa87586f5adffea8c0->enter($__internal_92d68e177d1e7c59e05c1a4a7d960e479d940340011850fa87586f5adffea8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/listEleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29aff75a33b579fa9fdd0c500a94608bf721f3542b97626b0a046d0f164b2316->leave($__internal_29aff75a33b579fa9fdd0c500a94608bf721f3542b97626b0a046d0f164b2316_prof);

        
        $__internal_92d68e177d1e7c59e05c1a4a7d960e479d940340011850fa87586f5adffea8c0->leave($__internal_92d68e177d1e7c59e05c1a4a7d960e479d940340011850fa87586f5adffea8c0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0feb815d640019bcb0f60d76f06be5cf9b3a87715f0665cee01e426bf17fa29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0feb815d640019bcb0f60d76f06be5cf9b3a87715f0665cee01e426bf17fa29->enter($__internal_f0feb815d640019bcb0f60d76f06be5cf9b3a87715f0665cee01e426bf17fa29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c3b65a923e8d9e7e014139e513049fea03f66725f2df5ec36baecdb246b8ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3b65a923e8d9e7e014139e513049fea03f66725f2df5ec36baecdb246b8ba2->enter($__internal_1c3b65a923e8d9e7e014139e513049fea03f66725f2df5ec36baecdb246b8ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ecole", array()), "eleves", array()));
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
        
        $__internal_1c3b65a923e8d9e7e014139e513049fea03f66725f2df5ec36baecdb246b8ba2->leave($__internal_1c3b65a923e8d9e7e014139e513049fea03f66725f2df5ec36baecdb246b8ba2_prof);

        
        $__internal_f0feb815d640019bcb0f60d76f06be5cf9b3a87715f0665cee01e426bf17fa29->leave($__internal_f0feb815d640019bcb0f60d76f06be5cf9b3a87715f0665cee01e426bf17fa29_prof);

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
\t\t{% for eleve in app.user.ecole.eleves %}
\t\t\t<li>{{ eleve.nom}} {{ eleve.prenom}} <a href=\"{{ path('editEleve',{'id':eleve.id})}}\">{{'edit'|trans}}</a> <a href=\"{{ path('removeEleve',{'id':eleve.id})}}\">{{'delete'|trans}}</a> <a href=\"{{ path('profileEleve',{'id':eleve.id})}}\">{{'profile'|trans}}</a> <a href=\"{{ path('parentEleve',{'id':eleve.id})}}\">{{'parent'|trans}}</a> <a href=\"{{ path('absenceEleve',{'id':eleve.id})}}\">{{'absence'|trans}}</a> <a href=\"{{ path('retardEleve',{'id':eleve.id})}}\">{{'retard'|trans}}</a></li>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "elevesViews/listEleves.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/elevesViews/listEleves.html.twig");
    }
}
