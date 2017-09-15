<?php

/* transportsViews/addTransport.html.twig */
class __TwigTemplate_b175e9cdcf964f37bc19c54b3dd1b959bfa1ca19d0f20cdd543166cfa60f69ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "transportsViews/addTransport.html.twig", 1);
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
        $__internal_5e7f7dea1b34d5b3df518bafc7aa57420e112ca159ffbe7b5f0586036e8d1815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e7f7dea1b34d5b3df518bafc7aa57420e112ca159ffbe7b5f0586036e8d1815->enter($__internal_5e7f7dea1b34d5b3df518bafc7aa57420e112ca159ffbe7b5f0586036e8d1815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transportsViews/addTransport.html.twig"));

        $__internal_8401a169cbcb79472d2550116720eb78f516897a419cd0a963a63ee8620ebfa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8401a169cbcb79472d2550116720eb78f516897a419cd0a963a63ee8620ebfa6->enter($__internal_8401a169cbcb79472d2550116720eb78f516897a419cd0a963a63ee8620ebfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transportsViews/addTransport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e7f7dea1b34d5b3df518bafc7aa57420e112ca159ffbe7b5f0586036e8d1815->leave($__internal_5e7f7dea1b34d5b3df518bafc7aa57420e112ca159ffbe7b5f0586036e8d1815_prof);

        
        $__internal_8401a169cbcb79472d2550116720eb78f516897a419cd0a963a63ee8620ebfa6->leave($__internal_8401a169cbcb79472d2550116720eb78f516897a419cd0a963a63ee8620ebfa6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_548799cd1264e5f3be887f560a531bc898204956b1163c9834fabf2bd5c30570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_548799cd1264e5f3be887f560a531bc898204956b1163c9834fabf2bd5c30570->enter($__internal_548799cd1264e5f3be887f560a531bc898204956b1163c9834fabf2bd5c30570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fa1647676e729a362f62a28213d9777c93ab8af20948eb91af1536ff2c79522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa1647676e729a362f62a28213d9777c93ab8af20948eb91af1536ff2c79522->enter($__internal_1fa1647676e729a362f62a28213d9777c93ab8af20948eb91af1536ff2c79522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
<h1>";
        // line 5
        if (($context["edit"] ?? $this->getContext($context, "edit"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add"), "html", null, true);
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ligne"), "html", null, true);
        echo "</h1>
<div class=\"container\">
\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
\t\t    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "depart", array()), 'label');
        echo "
\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "depart", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "depart", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "trajet", array()), 'label');
        echo "
\t\t    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "trajet", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "trajet", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureDepart", array()), 'label');
        echo "
\t\t    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureDepart", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureDepart", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "capacite", array()), 'label');
        echo "
\t\t    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "capacite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "capacite", array()), 'errors');
        echo "
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
";
        
        $__internal_1fa1647676e729a362f62a28213d9777c93ab8af20948eb91af1536ff2c79522->leave($__internal_1fa1647676e729a362f62a28213d9777c93ab8af20948eb91af1536ff2c79522_prof);

        
        $__internal_548799cd1264e5f3be887f560a531bc898204956b1163c9834fabf2bd5c30570->leave($__internal_548799cd1264e5f3be887f560a531bc898204956b1163c9834fabf2bd5c30570_prof);

    }

    public function getTemplateName()
    {
        return "transportsViews/addTransport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 34,  132 => 31,  128 => 30,  124 => 29,  118 => 26,  114 => 25,  110 => 24,  104 => 21,  100 => 20,  96 => 19,  90 => 16,  86 => 15,  82 => 14,  76 => 11,  72 => 10,  68 => 9,  63 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{% if edit %}{{'edit'|trans}}{% else %}{{'add'|trans}}{% endif %} {{'ligne'|trans}}</h1>
<div class=\"container\">
\t{{ form_start(form) }}
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.nom) }}
\t\t    {{ form_widget(form.nom ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.nom) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.depart) }}
\t\t    {{ form_widget(form.depart ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.depart) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.trajet) }}
\t\t    {{ form_widget(form.trajet ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.trajet) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.heureDepart) }}
\t\t    {{ form_widget(form.heureDepart ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.heureDepart) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.capacite) }}
\t\t    {{ form_widget(form.capacite ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.capacite) }}
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t{{ form_end(form) }}
</div>
</div>
{% endblock %}", "transportsViews/addTransport.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\transportsViews\\addTransport.html.twig");
    }
}
