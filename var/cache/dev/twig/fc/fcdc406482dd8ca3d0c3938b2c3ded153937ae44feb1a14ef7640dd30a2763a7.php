<?php

/* enseignantsViews/listEnseignants.html.twig */
class __TwigTemplate_e9034c533bac29fa2294e6882f8f0f3aba77ea6797ad2126ef6b6de5a657343a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "enseignantsViews/listEnseignants.html.twig", 1);
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
        $__internal_efe151663ddc56c2657e79b7e5b35a2a2b227926a1cf4d7e0fb43786a641db2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe151663ddc56c2657e79b7e5b35a2a2b227926a1cf4d7e0fb43786a641db2c->enter($__internal_efe151663ddc56c2657e79b7e5b35a2a2b227926a1cf4d7e0fb43786a641db2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listEnseignants.html.twig"));

        $__internal_6178a85181b0a97e0657c5290a8067e48e219b34f4e7d91550d96fd76e70a279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6178a85181b0a97e0657c5290a8067e48e219b34f4e7d91550d96fd76e70a279->enter($__internal_6178a85181b0a97e0657c5290a8067e48e219b34f4e7d91550d96fd76e70a279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listEnseignants.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efe151663ddc56c2657e79b7e5b35a2a2b227926a1cf4d7e0fb43786a641db2c->leave($__internal_efe151663ddc56c2657e79b7e5b35a2a2b227926a1cf4d7e0fb43786a641db2c_prof);

        
        $__internal_6178a85181b0a97e0657c5290a8067e48e219b34f4e7d91550d96fd76e70a279->leave($__internal_6178a85181b0a97e0657c5290a8067e48e219b34f4e7d91550d96fd76e70a279_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_89ed08e3c90843141acc2909122e242ff299bd4885e554633eb4183f50fbc7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ed08e3c90843141acc2909122e242ff299bd4885e554633eb4183f50fbc7b9->enter($__internal_89ed08e3c90843141acc2909122e242ff299bd4885e554633eb4183f50fbc7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b0f7eaf746f6f1caeda897b589bf81eb550ac676fd5e8b9d59457c98a26b26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b0f7eaf746f6f1caeda897b589bf81eb550ac676fd5e8b9d59457c98a26b26a->enter($__internal_6b0f7eaf746f6f1caeda897b589bf81eb550ac676fd5e8b9d59457c98a26b26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["enseignants"] ?? $this->getContext($context, "enseignants")));
        foreach ($context['_seq'] as $context["_key"] => $context["enseignant"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "prenom", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editEnseignant", array("id" => $this->getAttribute($context["enseignant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
            echo "</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeEnseignant", array("id" => $this->getAttribute($context["enseignant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
            echo "</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEnseignant", array("id" => $this->getAttribute($context["enseignant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseignant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_6b0f7eaf746f6f1caeda897b589bf81eb550ac676fd5e8b9d59457c98a26b26a->leave($__internal_6b0f7eaf746f6f1caeda897b589bf81eb550ac676fd5e8b9d59457c98a26b26a_prof);

        
        $__internal_89ed08e3c90843141acc2909122e242ff299bd4885e554633eb4183f50fbc7b9->leave($__internal_89ed08e3c90843141acc2909122e242ff299bd4885e554633eb4183f50fbc7b9_prof);

    }

    public function getTemplateName()
    {
        return "enseignantsViews/listEnseignants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'teachers'|trans}}</h1>
\t<ol>
\t\t{% for enseignant in enseignants %}
\t\t\t<li>{{ enseignant.nom}} {{ enseignant.prenom}} <a href=\"{{ path('editEnseignant',{'id':enseignant.id})}}\">{{'edit'|trans}}</a> <a href=\"{{ path('removeEnseignant',{'id':enseignant.id})}}\">{{'delete'|trans}}</a> <a href=\"{{ path('profileEnseignant',{'id':enseignant.id})}}\">{{'profile'|trans}}</a></li>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "enseignantsViews/listEnseignants.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\enseignantsViews\\listEnseignants.html.twig");
    }
}
