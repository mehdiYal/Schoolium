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
        $__internal_1685f983c65ecf9ddf158d1ea972aa4681e0e77e35b09366be6c4062986bd129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1685f983c65ecf9ddf158d1ea972aa4681e0e77e35b09366be6c4062986bd129->enter($__internal_1685f983c65ecf9ddf158d1ea972aa4681e0e77e35b09366be6c4062986bd129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/listClasses.html.twig"));

        $__internal_7a99342d8b13f3dfcc0e8ed106a8654c60f800c4ea6d5d505bca2770b0eb6bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a99342d8b13f3dfcc0e8ed106a8654c60f800c4ea6d5d505bca2770b0eb6bf0->enter($__internal_7a99342d8b13f3dfcc0e8ed106a8654c60f800c4ea6d5d505bca2770b0eb6bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1685f983c65ecf9ddf158d1ea972aa4681e0e77e35b09366be6c4062986bd129->leave($__internal_1685f983c65ecf9ddf158d1ea972aa4681e0e77e35b09366be6c4062986bd129_prof);

        
        $__internal_7a99342d8b13f3dfcc0e8ed106a8654c60f800c4ea6d5d505bca2770b0eb6bf0->leave($__internal_7a99342d8b13f3dfcc0e8ed106a8654c60f800c4ea6d5d505bca2770b0eb6bf0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8582bd53a57a24648803be033d463eda78dffc4111525ef743f6ebdb25eb7d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8582bd53a57a24648803be033d463eda78dffc4111525ef743f6ebdb25eb7d60->enter($__internal_8582bd53a57a24648803be033d463eda78dffc4111525ef743f6ebdb25eb7d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45f04e9f15601f5394ec7e16c46b3e7fe1e033d5f3f32921f3ae75b47965e28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f04e9f15601f5394ec7e16c46b3e7fe1e033d5f3f32921f3ae75b47965e28a->enter($__internal_45f04e9f15601f5394ec7e16c46b3e7fe1e033d5f3f32921f3ae75b47965e28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ecole", array()), "classes", array()));
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
        
        $__internal_45f04e9f15601f5394ec7e16c46b3e7fe1e033d5f3f32921f3ae75b47965e28a->leave($__internal_45f04e9f15601f5394ec7e16c46b3e7fe1e033d5f3f32921f3ae75b47965e28a_prof);

        
        $__internal_8582bd53a57a24648803be033d463eda78dffc4111525ef743f6ebdb25eb7d60->leave($__internal_8582bd53a57a24648803be033d463eda78dffc4111525ef743f6ebdb25eb7d60_prof);

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
\t\t{% for classe in app.user.ecole.classes %}
\t\t\t<li>{{ classe.nom}} {{ classe.description}} {{ classe.annee.nom}} {{ classe.eleves|length}} <a href=\"{{ path('editClasse',{'id':classe.id})}}\">Modifier</a> <a href=\"{{ path('removeClasse',{'id':classe.id})}}\">Supprimer</a>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "classesViews/listClasses.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/classesViews/listClasses.html.twig");
    }
}
