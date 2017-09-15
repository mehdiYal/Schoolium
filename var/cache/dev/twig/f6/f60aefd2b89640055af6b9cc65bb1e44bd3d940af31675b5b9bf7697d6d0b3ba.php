<?php

/* menusViews/addMenu.html.twig */
class __TwigTemplate_e91c467b42398808b90d8f2b44db204110727fb1a5b298effd33ca190aa4d961 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "menusViews/addMenu.html.twig", 1);
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
        $__internal_9171965a8e438cf381b20effc588fac5f10d6f82ef7959551c3e491fabc041ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9171965a8e438cf381b20effc588fac5f10d6f82ef7959551c3e491fabc041ad->enter($__internal_9171965a8e438cf381b20effc588fac5f10d6f82ef7959551c3e491fabc041ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menusViews/addMenu.html.twig"));

        $__internal_3c380623c2a9697391b0c6b399cd5d73afd6e3523a42d017801a61e00a1cb408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c380623c2a9697391b0c6b399cd5d73afd6e3523a42d017801a61e00a1cb408->enter($__internal_3c380623c2a9697391b0c6b399cd5d73afd6e3523a42d017801a61e00a1cb408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menusViews/addMenu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9171965a8e438cf381b20effc588fac5f10d6f82ef7959551c3e491fabc041ad->leave($__internal_9171965a8e438cf381b20effc588fac5f10d6f82ef7959551c3e491fabc041ad_prof);

        
        $__internal_3c380623c2a9697391b0c6b399cd5d73afd6e3523a42d017801a61e00a1cb408->leave($__internal_3c380623c2a9697391b0c6b399cd5d73afd6e3523a42d017801a61e00a1cb408_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_31842df99e111970d187f9231752c325c7749d1058348f8a22f2c953a06e7369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31842df99e111970d187f9231752c325c7749d1058348f8a22f2c953a06e7369->enter($__internal_31842df99e111970d187f9231752c325c7749d1058348f8a22f2c953a06e7369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3581ce2142559fc437eb478674294c6b6e2b070ac7dff923603425a74bc1a770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3581ce2142559fc437eb478674294c6b6e2b070ac7dff923603425a74bc1a770->enter($__internal_3581ce2142559fc437eb478674294c6b6e2b070ac7dff923603425a74bc1a770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Menu"), "html", null, true);
        echo "</h1>
<div class=\"container\">
\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "jour", array()), 'label');
        echo "
\t\t    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "jour", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "jour", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "menu", array()), 'label');
        echo "
\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "menu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "menu", array()), 'errors');
        echo "
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
";
        
        $__internal_3581ce2142559fc437eb478674294c6b6e2b070ac7dff923603425a74bc1a770->leave($__internal_3581ce2142559fc437eb478674294c6b6e2b070ac7dff923603425a74bc1a770_prof);

        
        $__internal_31842df99e111970d187f9231752c325c7749d1058348f8a22f2c953a06e7369->leave($__internal_31842df99e111970d187f9231752c325c7749d1058348f8a22f2c953a06e7369_prof);

    }

    public function getTemplateName()
    {
        return "menusViews/addMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 19,  90 => 16,  86 => 15,  82 => 14,  76 => 11,  72 => 10,  68 => 9,  63 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{% if edit %}{{'edit'|trans}}{% else %}{{'add'|trans}}{% endif %} {{'Menu'|trans}}</h1>
<div class=\"container\">
\t{{ form_start(form) }}
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.jour) }}
\t\t    {{ form_widget(form.jour ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.jour) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.menu) }}
\t\t    {{ form_widget(form.menu ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.menu) }}
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t{{ form_end(form) }}
</div>
</div>
{% endblock %}", "menusViews/addMenu.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\menusViews\\addMenu.html.twig");
    }
}
