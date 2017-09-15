<?php

/* classesViews/listClasses.html.twig */
class __TwigTemplate_eaae3f6df637d9502581c7f9fc910129ca5fbd24060e2a896a5c99a1246ac0d2 extends Twig_Template
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
        $__internal_15b6a3f9f056063c3d0367667340d135bb6073af99970939fc7ed0ca65ea7cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b6a3f9f056063c3d0367667340d135bb6073af99970939fc7ed0ca65ea7cde->enter($__internal_15b6a3f9f056063c3d0367667340d135bb6073af99970939fc7ed0ca65ea7cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/listClasses.html.twig"));

        $__internal_a63b9227bcf62f7dd92465fbb1bdd885d23a07c2e13f4536426d20e0a3428074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63b9227bcf62f7dd92465fbb1bdd885d23a07c2e13f4536426d20e0a3428074->enter($__internal_a63b9227bcf62f7dd92465fbb1bdd885d23a07c2e13f4536426d20e0a3428074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15b6a3f9f056063c3d0367667340d135bb6073af99970939fc7ed0ca65ea7cde->leave($__internal_15b6a3f9f056063c3d0367667340d135bb6073af99970939fc7ed0ca65ea7cde_prof);

        
        $__internal_a63b9227bcf62f7dd92465fbb1bdd885d23a07c2e13f4536426d20e0a3428074->leave($__internal_a63b9227bcf62f7dd92465fbb1bdd885d23a07c2e13f4536426d20e0a3428074_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_df0239694595315175e49f6c83d1da4343553cbb3824d0888212fb8180751689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df0239694595315175e49f6c83d1da4343553cbb3824d0888212fb8180751689->enter($__internal_df0239694595315175e49f6c83d1da4343553cbb3824d0888212fb8180751689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ba7ba3e4187b39f1810c469215bad1776e414bbf2b74a75de3f11c8501dd31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba7ba3e4187b39f1810c469215bad1776e414bbf2b74a75de3f11c8501dd31b->enter($__internal_3ba7ba3e4187b39f1810c469215bad1776e414bbf2b74a75de3f11c8501dd31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3ba7ba3e4187b39f1810c469215bad1776e414bbf2b74a75de3f11c8501dd31b->leave($__internal_3ba7ba3e4187b39f1810c469215bad1776e414bbf2b74a75de3f11c8501dd31b_prof);

        
        $__internal_df0239694595315175e49f6c83d1da4343553cbb3824d0888212fb8180751689->leave($__internal_df0239694595315175e49f6c83d1da4343553cbb3824d0888212fb8180751689_prof);

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
{% endblock %}", "classesViews/listClasses.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/classesViews/listClasses.html.twig");
    }
}
