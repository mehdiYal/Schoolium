<?php

/* classesViews/affecterProf.html.twig */
class __TwigTemplate_75d070484618549e9130d3c3c5a0cf72d8c8cb750043a40fdd0a26570848d9ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "classesViews/affecterProf.html.twig", 1);
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
        $__internal_9797075073c8c941a089ad217766a2ec63564e57451bcd34c91b43309d805a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9797075073c8c941a089ad217766a2ec63564e57451bcd34c91b43309d805a0f->enter($__internal_9797075073c8c941a089ad217766a2ec63564e57451bcd34c91b43309d805a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/affecterProf.html.twig"));

        $__internal_90fbb6ce0e3bedb44145524557a308e346bac92306902b4896e73021ceeb02fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90fbb6ce0e3bedb44145524557a308e346bac92306902b4896e73021ceeb02fe->enter($__internal_90fbb6ce0e3bedb44145524557a308e346bac92306902b4896e73021ceeb02fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/affecterProf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9797075073c8c941a089ad217766a2ec63564e57451bcd34c91b43309d805a0f->leave($__internal_9797075073c8c941a089ad217766a2ec63564e57451bcd34c91b43309d805a0f_prof);

        
        $__internal_90fbb6ce0e3bedb44145524557a308e346bac92306902b4896e73021ceeb02fe->leave($__internal_90fbb6ce0e3bedb44145524557a308e346bac92306902b4896e73021ceeb02fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_94dda9ae76b8845e26501b804a0857a7c7293b3eea70e9ab5c0ad93d2b744295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94dda9ae76b8845e26501b804a0857a7c7293b3eea70e9ab5c0ad93d2b744295->enter($__internal_94dda9ae76b8845e26501b804a0857a7c7293b3eea70e9ab5c0ad93d2b744295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95bcfdc8aa16f526ae5cb9a5c21bc3f697a7ddb6c9772264506d9bbbb996740b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95bcfdc8aa16f526ae5cb9a5c21bc3f697a7ddb6c9772264506d9bbbb996740b->enter($__internal_95bcfdc8aa16f526ae5cb9a5c21bc3f697a7ddb6c9772264506d9bbbb996740b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["classe"] ?? $this->getContext($context, "classe")), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["classe"] ?? $this->getContext($context, "classe")), "annee", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["classe"] ?? $this->getContext($context, "classe")), "annee", array()), "niveau", array()), "html", null, true);
        echo " </h1>
\t<ol>
\t\t";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "matiere", array()), 'label');
        echo "
\t\t\t    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "matiere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "matiere", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enseignant", array()), 'label');
        echo "
\t\t\t    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enseignant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enseignant", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<button type=\"submit\">Valider</button>
\t\t";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t</ol>
\t
";
        
        $__internal_95bcfdc8aa16f526ae5cb9a5c21bc3f697a7ddb6c9772264506d9bbbb996740b->leave($__internal_95bcfdc8aa16f526ae5cb9a5c21bc3f697a7ddb6c9772264506d9bbbb996740b_prof);

        
        $__internal_94dda9ae76b8845e26501b804a0857a7c7293b3eea70e9ab5c0ad93d2b744295->leave($__internal_94dda9ae76b8845e26501b804a0857a7c7293b3eea70e9ab5c0ad93d2b744295_prof);

    }

    public function getTemplateName()
    {
        return "classesViews/affecterProf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 18,  86 => 15,  82 => 14,  78 => 13,  72 => 10,  68 => 9,  64 => 8,  59 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{classe.nom|trans}} {{classe.annee.nom}} {{classe.annee.niveau}} </h1>
\t<ol>
\t\t{{ form_start(form) }}
\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(form.matiere) }}
\t\t\t    {{ form_widget(form.matiere ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t    {{ form_errors(form.matiere) }}
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(form.enseignant) }}
\t\t\t    {{ form_widget(form.enseignant ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t    {{ form_errors(form.enseignant) }}
\t\t\t</div>
\t\t\t<button type=\"submit\">Valider</button>
\t\t{{ form_end(form) }}
\t</ol>
\t
{% endblock %}", "classesViews/affecterProf.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/classesViews/affecterProf.html.twig");
    }
}
