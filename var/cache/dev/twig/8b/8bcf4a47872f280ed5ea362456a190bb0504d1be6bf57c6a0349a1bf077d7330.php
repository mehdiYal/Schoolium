<?php

/* :matieresViews:addMatiere.html.twig */
class __TwigTemplate_efdb7cd2a22902db84cc9ad89bc605bfd403aa12922f6d2c29bd0525f7915b09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":matieresViews:addMatiere.html.twig", 1);
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
        $__internal_5e40cae1f375fe0e897185348535a4495219ff12fafd7a474e895ea1836a4317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e40cae1f375fe0e897185348535a4495219ff12fafd7a474e895ea1836a4317->enter($__internal_5e40cae1f375fe0e897185348535a4495219ff12fafd7a474e895ea1836a4317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:addMatiere.html.twig"));

        $__internal_bd62110fe0cc6e09ff7ce45a0c44bff082f72e4179ab23dc07902b5c31fa53c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd62110fe0cc6e09ff7ce45a0c44bff082f72e4179ab23dc07902b5c31fa53c4->enter($__internal_bd62110fe0cc6e09ff7ce45a0c44bff082f72e4179ab23dc07902b5c31fa53c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:addMatiere.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e40cae1f375fe0e897185348535a4495219ff12fafd7a474e895ea1836a4317->leave($__internal_5e40cae1f375fe0e897185348535a4495219ff12fafd7a474e895ea1836a4317_prof);

        
        $__internal_bd62110fe0cc6e09ff7ce45a0c44bff082f72e4179ab23dc07902b5c31fa53c4->leave($__internal_bd62110fe0cc6e09ff7ce45a0c44bff082f72e4179ab23dc07902b5c31fa53c4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11c018202a9111554ebf86a0f2896a36426ba82acdcad21c970df3b9f9f452b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c018202a9111554ebf86a0f2896a36426ba82acdcad21c970df3b9f9f452b2->enter($__internal_11c018202a9111554ebf86a0f2896a36426ba82acdcad21c970df3b9f9f452b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23c7753c7a2eb461a76e2eca41dc64d4a7dec794c195dc5721abc4d2590f71fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c7753c7a2eb461a76e2eca41dc64d4a7dec794c195dc5721abc4d2590f71fc->enter($__internal_23c7753c7a2eb461a76e2eca41dc64d4a7dec794c195dc5721abc4d2590f71fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'label');
        echo "
\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'errors');
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
        
        $__internal_23c7753c7a2eb461a76e2eca41dc64d4a7dec794c195dc5721abc4d2590f71fc->leave($__internal_23c7753c7a2eb461a76e2eca41dc64d4a7dec794c195dc5721abc4d2590f71fc_prof);

        
        $__internal_11c018202a9111554ebf86a0f2896a36426ba82acdcad21c970df3b9f9f452b2->leave($__internal_11c018202a9111554ebf86a0f2896a36426ba82acdcad21c970df3b9f9f452b2_prof);

    }

    public function getTemplateName()
    {
        return ":matieresViews:addMatiere.html.twig";
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
<h1>{% if edit %}{{'edit'|trans}}{% else %}{{'add'|trans}}{% endif %} {{'matiere'|trans}}</h1>
<div class=\"container\">
\t{{ form_start(form) }}
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.nom) }}
\t\t    {{ form_widget(form.nom ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.nom) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.description) }}
\t\t    {{ form_widget(form.description ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.description) }}
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t{{ form_end(form) }}
</div>
</div>
{% endblock %}", ":matieresViews:addMatiere.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources\\views/matieresViews/addMatiere.html.twig");
    }
}
