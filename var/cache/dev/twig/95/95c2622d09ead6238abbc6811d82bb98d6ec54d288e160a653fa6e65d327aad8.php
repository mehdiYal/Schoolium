<?php

/* :anneesViews:addAnnee.html.twig */
class __TwigTemplate_c341b7fd7efd66acaad962726b7db62b8f77b242596631ee0a877bcfe705c29e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":anneesViews:addAnnee.html.twig", 1);
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
        $__internal_345aeeb2d8e951d016fc61ea30d60a7e0c314e2d6a085ed68420c014b700ecfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_345aeeb2d8e951d016fc61ea30d60a7e0c314e2d6a085ed68420c014b700ecfb->enter($__internal_345aeeb2d8e951d016fc61ea30d60a7e0c314e2d6a085ed68420c014b700ecfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:addAnnee.html.twig"));

        $__internal_9fed9fbb6143f379c60f874d0189a128e9c5720688672383c6fd4ed23805af60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fed9fbb6143f379c60f874d0189a128e9c5720688672383c6fd4ed23805af60->enter($__internal_9fed9fbb6143f379c60f874d0189a128e9c5720688672383c6fd4ed23805af60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:addAnnee.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_345aeeb2d8e951d016fc61ea30d60a7e0c314e2d6a085ed68420c014b700ecfb->leave($__internal_345aeeb2d8e951d016fc61ea30d60a7e0c314e2d6a085ed68420c014b700ecfb_prof);

        
        $__internal_9fed9fbb6143f379c60f874d0189a128e9c5720688672383c6fd4ed23805af60->leave($__internal_9fed9fbb6143f379c60f874d0189a128e9c5720688672383c6fd4ed23805af60_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ed4f4d00adb5c36c0d9e6305a94af5ed1e8bda7f1de7c873916bb10d3cbfc05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ed4f4d00adb5c36c0d9e6305a94af5ed1e8bda7f1de7c873916bb10d3cbfc05->enter($__internal_8ed4f4d00adb5c36c0d9e6305a94af5ed1e8bda7f1de7c873916bb10d3cbfc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c585b8ea331306b6061a58fdeb7e1ca13af6fbe79a28578ed5962026c5aa4a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c585b8ea331306b6061a58fdeb7e1ca13af6fbe79a28578ed5962026c5aa4a5->enter($__internal_7c585b8ea331306b6061a58fdeb7e1ca13af6fbe79a28578ed5962026c5aa4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
<h1>";
        // line 5
        if ((isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add"), "html", null, true);
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("annee"), "html", null, true);
        echo "</h1>
<div class=\"container\">
\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
\t\t    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'label');
        echo "
\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialite", array()), 'label');
        echo "
\t\t    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialite", array()), 'errors');
        echo "
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
";
        
        $__internal_7c585b8ea331306b6061a58fdeb7e1ca13af6fbe79a28578ed5962026c5aa4a5->leave($__internal_7c585b8ea331306b6061a58fdeb7e1ca13af6fbe79a28578ed5962026c5aa4a5_prof);

        
        $__internal_8ed4f4d00adb5c36c0d9e6305a94af5ed1e8bda7f1de7c873916bb10d3cbfc05->leave($__internal_8ed4f4d00adb5c36c0d9e6305a94af5ed1e8bda7f1de7c873916bb10d3cbfc05_prof);

    }

    public function getTemplateName()
    {
        return ":anneesViews:addAnnee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 24,  104 => 21,  100 => 20,  96 => 19,  90 => 16,  86 => 15,  82 => 14,  76 => 11,  72 => 10,  68 => 9,  63 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"container\">
<h1>{% if edit %}{{'edit'|trans}}{% else %}{{'add'|trans}}{% endif %} {{'annee'|trans}}</h1>
<div class=\"container\">
\t{{ form_start(form) }}
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.nom) }}
\t\t    {{ form_widget(form.nom ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.nom) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.niveau) }}
\t\t    {{ form_widget(form.niveau ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.niveau) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.specialite) }}
\t\t    {{ form_widget(form.specialite ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.specialite) }}
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t{{ form_end(form) }}
</div>
</div>
{% endblock %}", ":anneesViews:addAnnee.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/anneesViews/addAnnee.html.twig");
    }
}
