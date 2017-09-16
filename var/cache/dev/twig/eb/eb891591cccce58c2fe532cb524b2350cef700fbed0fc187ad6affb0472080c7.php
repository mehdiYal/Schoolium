<?php

/* :schoolsViews:listSchools.html.twig */
class __TwigTemplate_b6cf57402e2768e2196990714a310f3dabe988dacccde649b1c26bc4f1794341 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":schoolsViews:listSchools.html.twig", 1);
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
        $__internal_11c22cd52eb5a6b6e20502732466d561a16440fc9fb0b52471b229490bc69110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c22cd52eb5a6b6e20502732466d561a16440fc9fb0b52471b229490bc69110->enter($__internal_11c22cd52eb5a6b6e20502732466d561a16440fc9fb0b52471b229490bc69110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:listSchools.html.twig"));

        $__internal_0bd364a08068dc6de22df6ccb18f7a74f44f4e57fb6316c63ab9672ddad66796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd364a08068dc6de22df6ccb18f7a74f44f4e57fb6316c63ab9672ddad66796->enter($__internal_0bd364a08068dc6de22df6ccb18f7a74f44f4e57fb6316c63ab9672ddad66796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:listSchools.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11c22cd52eb5a6b6e20502732466d561a16440fc9fb0b52471b229490bc69110->leave($__internal_11c22cd52eb5a6b6e20502732466d561a16440fc9fb0b52471b229490bc69110_prof);

        
        $__internal_0bd364a08068dc6de22df6ccb18f7a74f44f4e57fb6316c63ab9672ddad66796->leave($__internal_0bd364a08068dc6de22df6ccb18f7a74f44f4e57fb6316c63ab9672ddad66796_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b30e6a7f2f60eb6a892208bd65facbf8703980c59ccddd609d05db0f3f68e3ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b30e6a7f2f60eb6a892208bd65facbf8703980c59ccddd609d05db0f3f68e3ef->enter($__internal_b30e6a7f2f60eb6a892208bd65facbf8703980c59ccddd609d05db0f3f68e3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c94b01068a010262dff6bef6058a09933b0a8ba5af54e4ee2de21fbf69e64568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94b01068a010262dff6bef6058a09933b0a8ba5af54e4ee2de21fbf69e64568->enter($__internal_c94b01068a010262dff6bef6058a09933b0a8ba5af54e4ee2de21fbf69e64568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("schools"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ecoles"]) ? $context["ecoles"] : $this->getContext($context, "ecoles")));
        foreach ($context['_seq'] as $context["_key"] => $context["ecole"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "ville", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">Profile</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ecole'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_c94b01068a010262dff6bef6058a09933b0a8ba5af54e4ee2de21fbf69e64568->leave($__internal_c94b01068a010262dff6bef6058a09933b0a8ba5af54e4ee2de21fbf69e64568_prof);

        
        $__internal_b30e6a7f2f60eb6a892208bd65facbf8703980c59ccddd609d05db0f3f68e3ef->leave($__internal_b30e6a7f2f60eb6a892208bd65facbf8703980c59ccddd609d05db0f3f68e3ef_prof);

    }

    public function getTemplateName()
    {
        return ":schoolsViews:listSchools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'schools'|trans}}</h1>
\t<ol>
\t\t{% for ecole in ecoles %}
\t\t\t<li>{{ ecole.nom}} {{ ecole.ville}} <a href=\"{{ path('editSchool',{'id':ecole.id})}}\">Modifier</a> <a href=\"{{ path('removeSchool',{'id':ecole.id})}}\">Supprimer</a> <a href=\"{{ path('profileSchool',{'id':ecole.id})}}\">Profile</a></li>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", ":schoolsViews:listSchools.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/schoolsViews/listSchools.html.twig");
    }
}
