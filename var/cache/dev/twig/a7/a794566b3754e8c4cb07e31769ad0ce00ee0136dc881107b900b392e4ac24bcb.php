<?php

/* :matieresViews:listMatieres.html.twig */
class __TwigTemplate_ed2e628942bd098a4dd417c0ba6e4d03e1e54a21274a80dd8503077b364da6e0 extends Twig_Template
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
        $__internal_4d9bacb7ab20ef8d21cac3dfb8d2e8e9418222a15a1ddc9b06b44fe8ae004417 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9bacb7ab20ef8d21cac3dfb8d2e8e9418222a15a1ddc9b06b44fe8ae004417->enter($__internal_4d9bacb7ab20ef8d21cac3dfb8d2e8e9418222a15a1ddc9b06b44fe8ae004417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listMatieres.html.twig"));

        $__internal_c4a7393933f91c93652865e98944c8e2794cfca99b5b1ff9f0c5d48877fb9f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a7393933f91c93652865e98944c8e2794cfca99b5b1ff9f0c5d48877fb9f6a->enter($__internal_c4a7393933f91c93652865e98944c8e2794cfca99b5b1ff9f0c5d48877fb9f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listMatieres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d9bacb7ab20ef8d21cac3dfb8d2e8e9418222a15a1ddc9b06b44fe8ae004417->leave($__internal_4d9bacb7ab20ef8d21cac3dfb8d2e8e9418222a15a1ddc9b06b44fe8ae004417_prof);

        
        $__internal_c4a7393933f91c93652865e98944c8e2794cfca99b5b1ff9f0c5d48877fb9f6a->leave($__internal_c4a7393933f91c93652865e98944c8e2794cfca99b5b1ff9f0c5d48877fb9f6a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b311f5f4de6922e34688829f77f714fed10acf84a1b1aa076e571772d157b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b311f5f4de6922e34688829f77f714fed10acf84a1b1aa076e571772d157b8d->enter($__internal_8b311f5f4de6922e34688829f77f714fed10acf84a1b1aa076e571772d157b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1502b9837a7256aa727936661d6580596f4e40cb2523beeed2d2d9b035785b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1502b9837a7256aa727936661d6580596f4e40cb2523beeed2d2d9b035785b1->enter($__internal_a1502b9837a7256aa727936661d6580596f4e40cb2523beeed2d2d9b035785b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) ? $context["matieres"] : $this->getContext($context, "matieres")));
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
        
        $__internal_a1502b9837a7256aa727936661d6580596f4e40cb2523beeed2d2d9b035785b1->leave($__internal_a1502b9837a7256aa727936661d6580596f4e40cb2523beeed2d2d9b035785b1_prof);

        
        $__internal_8b311f5f4de6922e34688829f77f714fed10acf84a1b1aa076e571772d157b8d->leave($__internal_8b311f5f4de6922e34688829f77f714fed10acf84a1b1aa076e571772d157b8d_prof);

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
{% endblock %}", ":matieresViews:listMatieres.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/matieresViews/listMatieres.html.twig");
    }
}
