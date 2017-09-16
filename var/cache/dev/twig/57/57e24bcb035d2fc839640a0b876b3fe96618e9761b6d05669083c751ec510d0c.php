<?php

/* :classesViews:listClasses.html.twig */
class __TwigTemplate_ce65a04cef0a01caa350a012e9dbc580b618467b8d29c606b2e4d89aabf115e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":classesViews:listClasses.html.twig", 1);
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
        $__internal_7b0be8a8b6179398014a5905499a6753067bfb5ca078db4abe60bc1333f27d88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0be8a8b6179398014a5905499a6753067bfb5ca078db4abe60bc1333f27d88->enter($__internal_7b0be8a8b6179398014a5905499a6753067bfb5ca078db4abe60bc1333f27d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:listClasses.html.twig"));

        $__internal_4796697143503e48cc743d092b68c1fa5213d96d942a7658db9d3658047a90ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4796697143503e48cc743d092b68c1fa5213d96d942a7658db9d3658047a90ef->enter($__internal_4796697143503e48cc743d092b68c1fa5213d96d942a7658db9d3658047a90ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b0be8a8b6179398014a5905499a6753067bfb5ca078db4abe60bc1333f27d88->leave($__internal_7b0be8a8b6179398014a5905499a6753067bfb5ca078db4abe60bc1333f27d88_prof);

        
        $__internal_4796697143503e48cc743d092b68c1fa5213d96d942a7658db9d3658047a90ef->leave($__internal_4796697143503e48cc743d092b68c1fa5213d96d942a7658db9d3658047a90ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6dd5813a1f0e74c14490ded896f1fcb37ec6bdc04427f075578c80dbd182523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6dd5813a1f0e74c14490ded896f1fcb37ec6bdc04427f075578c80dbd182523->enter($__internal_b6dd5813a1f0e74c14490ded896f1fcb37ec6bdc04427f075578c80dbd182523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_113c8a31be6271d9289a4b1771a3d420b4393796f3b802b3bbe4379dad5e2cd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113c8a31be6271d9289a4b1771a3d420b4393796f3b802b3bbe4379dad5e2cd2->enter($__internal_113c8a31be6271d9289a4b1771a3d420b4393796f3b802b3bbe4379dad5e2cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")));
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
        
        $__internal_113c8a31be6271d9289a4b1771a3d420b4393796f3b802b3bbe4379dad5e2cd2->leave($__internal_113c8a31be6271d9289a4b1771a3d420b4393796f3b802b3bbe4379dad5e2cd2_prof);

        
        $__internal_b6dd5813a1f0e74c14490ded896f1fcb37ec6bdc04427f075578c80dbd182523->leave($__internal_b6dd5813a1f0e74c14490ded896f1fcb37ec6bdc04427f075578c80dbd182523_prof);

    }

    public function getTemplateName()
    {
        return ":classesViews:listClasses.html.twig";
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
{% endblock %}", ":classesViews:listClasses.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/classesViews/listClasses.html.twig");
    }
}
