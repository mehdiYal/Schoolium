<?php

/* enseignantsViews/listEnseignants.html.twig */
class __TwigTemplate_dad1d01d5e14daae2f1882a572c897088b3e6cb0a7c40ef333877858fbddceb1 extends Twig_Template
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
        $__internal_5d3210c42980a654c1b8f757e54565a0222a2ca77e66bb6a74660d911345c963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d3210c42980a654c1b8f757e54565a0222a2ca77e66bb6a74660d911345c963->enter($__internal_5d3210c42980a654c1b8f757e54565a0222a2ca77e66bb6a74660d911345c963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listEnseignants.html.twig"));

        $__internal_4fb6034a77b44ac676615aea0e15e80bc2696856bfaa413919722bfd5a520159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb6034a77b44ac676615aea0e15e80bc2696856bfaa413919722bfd5a520159->enter($__internal_4fb6034a77b44ac676615aea0e15e80bc2696856bfaa413919722bfd5a520159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listEnseignants.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d3210c42980a654c1b8f757e54565a0222a2ca77e66bb6a74660d911345c963->leave($__internal_5d3210c42980a654c1b8f757e54565a0222a2ca77e66bb6a74660d911345c963_prof);

        
        $__internal_4fb6034a77b44ac676615aea0e15e80bc2696856bfaa413919722bfd5a520159->leave($__internal_4fb6034a77b44ac676615aea0e15e80bc2696856bfaa413919722bfd5a520159_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f02995263dd1609ab49b139415fa86649e7554d45d463299a120501a2c4b2c88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02995263dd1609ab49b139415fa86649e7554d45d463299a120501a2c4b2c88->enter($__internal_f02995263dd1609ab49b139415fa86649e7554d45d463299a120501a2c4b2c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be560366f7593c7b1a95cf42a66d08525a73d372df3c5a1b5c9e078315e856a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be560366f7593c7b1a95cf42a66d08525a73d372df3c5a1b5c9e078315e856a1->enter($__internal_be560366f7593c7b1a95cf42a66d08525a73d372df3c5a1b5c9e078315e856a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_be560366f7593c7b1a95cf42a66d08525a73d372df3c5a1b5c9e078315e856a1->leave($__internal_be560366f7593c7b1a95cf42a66d08525a73d372df3c5a1b5c9e078315e856a1_prof);

        
        $__internal_f02995263dd1609ab49b139415fa86649e7554d45d463299a120501a2c4b2c88->leave($__internal_f02995263dd1609ab49b139415fa86649e7554d45d463299a120501a2c4b2c88_prof);

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
{% endblock %}", "enseignantsViews/listEnseignants.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/enseignantsViews/listEnseignants.html.twig");
    }
}
