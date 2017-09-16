<?php

/* transportsViews/listTransports.html.twig */
class __TwigTemplate_d09fdcd7f0555d55f8fe5100bebd475c46c7dd5ebf6c95fec832e48fc7dc7779 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "transportsViews/listTransports.html.twig", 1);
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
        $__internal_bbfdbf5bc049457cc5b55485200ea587120b1aaf435e58b2b8647969e06a0f87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbfdbf5bc049457cc5b55485200ea587120b1aaf435e58b2b8647969e06a0f87->enter($__internal_bbfdbf5bc049457cc5b55485200ea587120b1aaf435e58b2b8647969e06a0f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transportsViews/listTransports.html.twig"));

        $__internal_2c8ca5bc1b02cd520d9c418d8e092247564d1ef4f9237c73285a95e00f6d1a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8ca5bc1b02cd520d9c418d8e092247564d1ef4f9237c73285a95e00f6d1a48->enter($__internal_2c8ca5bc1b02cd520d9c418d8e092247564d1ef4f9237c73285a95e00f6d1a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transportsViews/listTransports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbfdbf5bc049457cc5b55485200ea587120b1aaf435e58b2b8647969e06a0f87->leave($__internal_bbfdbf5bc049457cc5b55485200ea587120b1aaf435e58b2b8647969e06a0f87_prof);

        
        $__internal_2c8ca5bc1b02cd520d9c418d8e092247564d1ef4f9237c73285a95e00f6d1a48->leave($__internal_2c8ca5bc1b02cd520d9c418d8e092247564d1ef4f9237c73285a95e00f6d1a48_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d72e7c1eb56b75627d205c28b5ac5fcafa158b0b95201290810171534ed33a69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d72e7c1eb56b75627d205c28b5ac5fcafa158b0b95201290810171534ed33a69->enter($__internal_d72e7c1eb56b75627d205c28b5ac5fcafa158b0b95201290810171534ed33a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9d3e598f7e4597f08e9181336cec3fed8f0b1515080d9fd94f3e6b7793201a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d3e598f7e4597f08e9181336cec3fed8f0b1515080d9fd94f3e6b7793201a3->enter($__internal_c9d3e598f7e4597f08e9181336cec3fed8f0b1515080d9fd94f3e6b7793201a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("lignes"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ecole", array()), "transports", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trans"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "depart", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "trajet", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["trans"], "heureDepart", array()), "h:m"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "capacite", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editTransport", array("id" => $this->getAttribute($context["trans"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeTransport", array("id" => $this->getAttribute($context["trans"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trans'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_c9d3e598f7e4597f08e9181336cec3fed8f0b1515080d9fd94f3e6b7793201a3->leave($__internal_c9d3e598f7e4597f08e9181336cec3fed8f0b1515080d9fd94f3e6b7793201a3_prof);

        
        $__internal_d72e7c1eb56b75627d205c28b5ac5fcafa158b0b95201290810171534ed33a69->leave($__internal_d72e7c1eb56b75627d205c28b5ac5fcafa158b0b95201290810171534ed33a69_prof);

    }

    public function getTemplateName()
    {
        return "transportsViews/listTransports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'lignes'|trans}}</h1>
\t<ol>
\t\t{% for trans in app.user.ecole.transports %}
\t\t\t<li>{{ trans.nom}} {{ trans.depart}} {{ trans.trajet}} {{ trans.heureDepart|date('h:m')}} {{ trans.capacite}} <a href=\"{{ path('editTransport',{'id':trans.id})}}\">Modifier</a> <a href=\"{{ path('removeTransport',{'id':trans.id})}}\">Supprimer</a>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "transportsViews/listTransports.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/transportsViews/listTransports.html.twig");
    }
}
