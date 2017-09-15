<?php

/* :parentsViews:listParents.html.twig */
class __TwigTemplate_68e4e27253323fc5611e9978bc9fdd5eb6a5c18d9afd186b1c36f2a258305178 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":parentsViews:listParents.html.twig", 1);
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
        $__internal_0f079337b8671db02398c5ccb357a7a3a121ac454d1a6439c899721055e58e34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f079337b8671db02398c5ccb357a7a3a121ac454d1a6439c899721055e58e34->enter($__internal_0f079337b8671db02398c5ccb357a7a3a121ac454d1a6439c899721055e58e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:listParents.html.twig"));

        $__internal_0a9db433944f30cc1fc08307ce53d11f5498b1a61c65cdd318bdc08f4e57acdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9db433944f30cc1fc08307ce53d11f5498b1a61c65cdd318bdc08f4e57acdc->enter($__internal_0a9db433944f30cc1fc08307ce53d11f5498b1a61c65cdd318bdc08f4e57acdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:listParents.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f079337b8671db02398c5ccb357a7a3a121ac454d1a6439c899721055e58e34->leave($__internal_0f079337b8671db02398c5ccb357a7a3a121ac454d1a6439c899721055e58e34_prof);

        
        $__internal_0a9db433944f30cc1fc08307ce53d11f5498b1a61c65cdd318bdc08f4e57acdc->leave($__internal_0a9db433944f30cc1fc08307ce53d11f5498b1a61c65cdd318bdc08f4e57acdc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3214d149daf2fe1aecbac584c98a3beb4f49924f76fbe4b8a1e353481a73ae9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3214d149daf2fe1aecbac584c98a3beb4f49924f76fbe4b8a1e353481a73ae9e->enter($__internal_3214d149daf2fe1aecbac584c98a3beb4f49924f76fbe4b8a1e353481a73ae9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8ed18d6b0b339a82ef69b902bfc23241875fd279d3a2f1be0bca6c6e7496062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ed18d6b0b339a82ef69b902bfc23241875fd279d3a2f1be0bca6c6e7496062->enter($__internal_c8ed18d6b0b339a82ef69b902bfc23241875fd279d3a2f1be0bca6c6e7496062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parents"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["parentals"] ?? $this->getContext($context, "parentals")));
        foreach ($context['_seq'] as $context["_key"] => $context["parant"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parant"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parant"], "prenom", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editParental", array("id" => $this->getAttribute($context["parant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
            echo "</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeParental", array("id" => $this->getAttribute($context["parant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
            echo "</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileParental", array("id" => $this->getAttribute($context["parant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_c8ed18d6b0b339a82ef69b902bfc23241875fd279d3a2f1be0bca6c6e7496062->leave($__internal_c8ed18d6b0b339a82ef69b902bfc23241875fd279d3a2f1be0bca6c6e7496062_prof);

        
        $__internal_3214d149daf2fe1aecbac584c98a3beb4f49924f76fbe4b8a1e353481a73ae9e->leave($__internal_3214d149daf2fe1aecbac584c98a3beb4f49924f76fbe4b8a1e353481a73ae9e_prof);

    }

    public function getTemplateName()
    {
        return ":parentsViews:listParents.html.twig";
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
<h1>{{'list'|trans}} {{'parents'|trans}}</h1>
\t<ol>
\t\t{% for parant in parentals %}
\t\t\t<li>{{ parant.nom}} {{ parant.prenom}} <a href=\"{{ path('editParental',{'id':parant.id})}}\">{{'edit'|trans}}</a> <a href=\"{{ path('removeParental',{'id':parant.id})}}\">{{'delete'|trans}}</a> <a href=\"{{ path('profileParental',{'id':parant.id})}}\">{{'profile'|trans}}</a></li>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", ":parentsViews:listParents.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources\\views/parentsViews/listParents.html.twig");
    }
}
