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
        $__internal_4167e55cbbabaf4e002bbca8134c5f4bed1c131fcc8694cdfbf708137883b586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4167e55cbbabaf4e002bbca8134c5f4bed1c131fcc8694cdfbf708137883b586->enter($__internal_4167e55cbbabaf4e002bbca8134c5f4bed1c131fcc8694cdfbf708137883b586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/listMatieres.html.twig"));

        $__internal_384eced3c1c3703632c85aef2bc51152c130061828ec30902f624e7e4055db1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384eced3c1c3703632c85aef2bc51152c130061828ec30902f624e7e4055db1e->enter($__internal_384eced3c1c3703632c85aef2bc51152c130061828ec30902f624e7e4055db1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/listMatieres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4167e55cbbabaf4e002bbca8134c5f4bed1c131fcc8694cdfbf708137883b586->leave($__internal_4167e55cbbabaf4e002bbca8134c5f4bed1c131fcc8694cdfbf708137883b586_prof);

        
        $__internal_384eced3c1c3703632c85aef2bc51152c130061828ec30902f624e7e4055db1e->leave($__internal_384eced3c1c3703632c85aef2bc51152c130061828ec30902f624e7e4055db1e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fae6669ab255deb23ed0243fd67f56d9db6982d926968974bf609c4623eb750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fae6669ab255deb23ed0243fd67f56d9db6982d926968974bf609c4623eb750->enter($__internal_3fae6669ab255deb23ed0243fd67f56d9db6982d926968974bf609c4623eb750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11a203ca33d62d7fdae3148bb84c36e60ce42fa1eb34f5e4ef5449dda684ca4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a203ca33d62d7fdae3148bb84c36e60ce42fa1eb34f5e4ef5449dda684ca4f->enter($__internal_11a203ca33d62d7fdae3148bb84c36e60ce42fa1eb34f5e4ef5449dda684ca4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_11a203ca33d62d7fdae3148bb84c36e60ce42fa1eb34f5e4ef5449dda684ca4f->leave($__internal_11a203ca33d62d7fdae3148bb84c36e60ce42fa1eb34f5e4ef5449dda684ca4f_prof);

        
        $__internal_3fae6669ab255deb23ed0243fd67f56d9db6982d926968974bf609c4623eb750->leave($__internal_3fae6669ab255deb23ed0243fd67f56d9db6982d926968974bf609c4623eb750_prof);

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
