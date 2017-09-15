<?php

/* anneesViews/addAnnee.html.twig */
class __TwigTemplate_9be856805ce84aebd7d6a25152b442ee935441282646b2cfcba8988f7fcc523a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "anneesViews/addAnnee.html.twig", 1);
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
        $__internal_0f2263941cf6a2b5ee12bffa302bcaedcd531c8adf5227bc7b942133488e797a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f2263941cf6a2b5ee12bffa302bcaedcd531c8adf5227bc7b942133488e797a->enter($__internal_0f2263941cf6a2b5ee12bffa302bcaedcd531c8adf5227bc7b942133488e797a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anneesViews/addAnnee.html.twig"));

        $__internal_67a47725a9018c4434bafc7e3699770e9519d571ed0bb2faaa56d49ffbd4fd8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a47725a9018c4434bafc7e3699770e9519d571ed0bb2faaa56d49ffbd4fd8a->enter($__internal_67a47725a9018c4434bafc7e3699770e9519d571ed0bb2faaa56d49ffbd4fd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anneesViews/addAnnee.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f2263941cf6a2b5ee12bffa302bcaedcd531c8adf5227bc7b942133488e797a->leave($__internal_0f2263941cf6a2b5ee12bffa302bcaedcd531c8adf5227bc7b942133488e797a_prof);

        
        $__internal_67a47725a9018c4434bafc7e3699770e9519d571ed0bb2faaa56d49ffbd4fd8a->leave($__internal_67a47725a9018c4434bafc7e3699770e9519d571ed0bb2faaa56d49ffbd4fd8a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a6b84d651890131bb968f613f6e0b1006d4bf3f937d7a2fb1edbe52cd05b198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6b84d651890131bb968f613f6e0b1006d4bf3f937d7a2fb1edbe52cd05b198->enter($__internal_7a6b84d651890131bb968f613f6e0b1006d4bf3f937d7a2fb1edbe52cd05b198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3947e352f9c48e4bc53bc81dadbfe8cc4fa1aa81877c72368deaaef4bc4beb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3947e352f9c48e4bc53bc81dadbfe8cc4fa1aa81877c72368deaaef4bc4beb2->enter($__internal_e3947e352f9c48e4bc53bc81dadbfe8cc4fa1aa81877c72368deaaef4bc4beb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("annee"), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "niveau", array()), 'label');
        echo "
\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "niveau", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "niveau", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "specialite", array()), 'label');
        echo "
\t\t    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "specialite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "specialite", array()), 'errors');
        echo "
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
";
        
        $__internal_e3947e352f9c48e4bc53bc81dadbfe8cc4fa1aa81877c72368deaaef4bc4beb2->leave($__internal_e3947e352f9c48e4bc53bc81dadbfe8cc4fa1aa81877c72368deaaef4bc4beb2_prof);

        
        $__internal_7a6b84d651890131bb968f613f6e0b1006d4bf3f937d7a2fb1edbe52cd05b198->leave($__internal_7a6b84d651890131bb968f613f6e0b1006d4bf3f937d7a2fb1edbe52cd05b198_prof);

    }

    public function getTemplateName()
    {
        return "anneesViews/addAnnee.html.twig";
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
{% endblock %}", "anneesViews/addAnnee.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\anneesViews\\addAnnee.html.twig");
    }
}
