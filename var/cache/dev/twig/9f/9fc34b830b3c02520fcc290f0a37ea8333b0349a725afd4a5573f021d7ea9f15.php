<?php

/* classesViews/listClasses.html.twig */
class __TwigTemplate_bca82b03c386021670f5b6348a53d0fb96360c4068307d488a7c8e3dd02e0105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "classesViews/listClasses.html.twig", 1);
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
        $__internal_bd0397ada1fcd03a58c5a55319f0bd3f179bd1e143f53e5bde01c9ca58a88e10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0397ada1fcd03a58c5a55319f0bd3f179bd1e143f53e5bde01c9ca58a88e10->enter($__internal_bd0397ada1fcd03a58c5a55319f0bd3f179bd1e143f53e5bde01c9ca58a88e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/listClasses.html.twig"));

        $__internal_6cd827cb303e56a8f7c3b37af69c7e0c6c9883ecc4ee1d83b8c7e2d3334008cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cd827cb303e56a8f7c3b37af69c7e0c6c9883ecc4ee1d83b8c7e2d3334008cb->enter($__internal_6cd827cb303e56a8f7c3b37af69c7e0c6c9883ecc4ee1d83b8c7e2d3334008cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd0397ada1fcd03a58c5a55319f0bd3f179bd1e143f53e5bde01c9ca58a88e10->leave($__internal_bd0397ada1fcd03a58c5a55319f0bd3f179bd1e143f53e5bde01c9ca58a88e10_prof);

        
        $__internal_6cd827cb303e56a8f7c3b37af69c7e0c6c9883ecc4ee1d83b8c7e2d3334008cb->leave($__internal_6cd827cb303e56a8f7c3b37af69c7e0c6c9883ecc4ee1d83b8c7e2d3334008cb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d42889e8c0b158c15e939aefbfb7355c6908811089ac38970982b50c5f9ac73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d42889e8c0b158c15e939aefbfb7355c6908811089ac38970982b50c5f9ac73->enter($__internal_5d42889e8c0b158c15e939aefbfb7355c6908811089ac38970982b50c5f9ac73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_efe1908b4b1e6ee2894ff70f68f8e5af0ec4ec64ec959fcd6af682409ad12d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe1908b4b1e6ee2894ff70f68f8e5af0ec4ec64ec959fcd6af682409ad12d03->enter($__internal_efe1908b4b1e6ee2894ff70f68f8e5af0ec4ec64ec959fcd6af682409ad12d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classe"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classes"] ?? $this->getContext($context, "classes")));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "description", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "annee", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["classe"], "eleves", array())), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editClasse", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeClasse", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_efe1908b4b1e6ee2894ff70f68f8e5af0ec4ec64ec959fcd6af682409ad12d03->leave($__internal_efe1908b4b1e6ee2894ff70f68f8e5af0ec4ec64ec959fcd6af682409ad12d03_prof);

        
        $__internal_5d42889e8c0b158c15e939aefbfb7355c6908811089ac38970982b50c5f9ac73->leave($__internal_5d42889e8c0b158c15e939aefbfb7355c6908811089ac38970982b50c5f9ac73_prof);

    }

    public function getTemplateName()
    {
        return "classesViews/listClasses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'classe'|trans}}</h1>
\t<ol>
\t\t{% for classe in classes %}
\t\t\t<li>{{ classe.nom}} {{ classe.description}} {{ classe.annee.nom}} {{ classe.eleves|length}} <a href=\"{{ path('editClasse',{'id':classe.id})}}\">Modifier</a> <a href=\"{{ path('removeClasse',{'id':classe.id})}}\">Supprimer</a>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "classesViews/listClasses.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\classesViews\\listClasses.html.twig");
    }
}
