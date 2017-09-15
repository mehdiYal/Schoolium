<?php

/* :matieresViews:listMatieres.html.twig */
class __TwigTemplate_d3920ee06321d745f17af71bf14f3e787f596db770aaeca972041a5b174a7ea5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":matieresViews:listMatieres.html.twig", 1);
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
        $__internal_cf32a3cd3bef10c4eb574b842b3eaad04d1e882a59e6ff2a1bed274a43f5ae3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf32a3cd3bef10c4eb574b842b3eaad04d1e882a59e6ff2a1bed274a43f5ae3f->enter($__internal_cf32a3cd3bef10c4eb574b842b3eaad04d1e882a59e6ff2a1bed274a43f5ae3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listMatieres.html.twig"));

        $__internal_de9c3216ac6eb36f15705fcce6fd39a3f313c863957c289a2278fb483ae38380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de9c3216ac6eb36f15705fcce6fd39a3f313c863957c289a2278fb483ae38380->enter($__internal_de9c3216ac6eb36f15705fcce6fd39a3f313c863957c289a2278fb483ae38380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listMatieres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf32a3cd3bef10c4eb574b842b3eaad04d1e882a59e6ff2a1bed274a43f5ae3f->leave($__internal_cf32a3cd3bef10c4eb574b842b3eaad04d1e882a59e6ff2a1bed274a43f5ae3f_prof);

        
        $__internal_de9c3216ac6eb36f15705fcce6fd39a3f313c863957c289a2278fb483ae38380->leave($__internal_de9c3216ac6eb36f15705fcce6fd39a3f313c863957c289a2278fb483ae38380_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_663fe85a7504668fe62b21a6e152ed1dfe5e4742b54b4e36cc12a5d0b9fb0909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_663fe85a7504668fe62b21a6e152ed1dfe5e4742b54b4e36cc12a5d0b9fb0909->enter($__internal_663fe85a7504668fe62b21a6e152ed1dfe5e4742b54b4e36cc12a5d0b9fb0909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8360984382ea6a5c8b42d9d1d0b8e4a88a03b8ca1eceea1d74982e87063081a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8360984382ea6a5c8b42d9d1d0b8e4a88a03b8ca1eceea1d74982e87063081a9->enter($__internal_8360984382ea6a5c8b42d9d1d0b8e4a88a03b8ca1eceea1d74982e87063081a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8360984382ea6a5c8b42d9d1d0b8e4a88a03b8ca1eceea1d74982e87063081a9->leave($__internal_8360984382ea6a5c8b42d9d1d0b8e4a88a03b8ca1eceea1d74982e87063081a9_prof);

        
        $__internal_663fe85a7504668fe62b21a6e152ed1dfe5e4742b54b4e36cc12a5d0b9fb0909->leave($__internal_663fe85a7504668fe62b21a6e152ed1dfe5e4742b54b4e36cc12a5d0b9fb0909_prof);

    }

    public function getTemplateName()
    {
        return ":matieresViews:listMatieres.html.twig";
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
{% endblock %}", ":matieresViews:listMatieres.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources\\views/matieresViews/listMatieres.html.twig");
    }
}
