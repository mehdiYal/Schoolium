<?php

/* :transportsViews:addTransport.html.twig */
class __TwigTemplate_b762dfbca0d481d2a6b11e0babfa1963b7b00de25e8aabd9346481cb59d69504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":transportsViews:addTransport.html.twig", 1);
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
        $__internal_ebd09c99fc851bfed5664df5c98ecfa86c6cf8a1d31bdc07f63be05efb6abc31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd09c99fc851bfed5664df5c98ecfa86c6cf8a1d31bdc07f63be05efb6abc31->enter($__internal_ebd09c99fc851bfed5664df5c98ecfa86c6cf8a1d31bdc07f63be05efb6abc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transportsViews:addTransport.html.twig"));

        $__internal_4f011a962b06bfa5885ab8017016ce0cda911714f46125d84cec82f485288f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f011a962b06bfa5885ab8017016ce0cda911714f46125d84cec82f485288f60->enter($__internal_4f011a962b06bfa5885ab8017016ce0cda911714f46125d84cec82f485288f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transportsViews:addTransport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebd09c99fc851bfed5664df5c98ecfa86c6cf8a1d31bdc07f63be05efb6abc31->leave($__internal_ebd09c99fc851bfed5664df5c98ecfa86c6cf8a1d31bdc07f63be05efb6abc31_prof);

        
        $__internal_4f011a962b06bfa5885ab8017016ce0cda911714f46125d84cec82f485288f60->leave($__internal_4f011a962b06bfa5885ab8017016ce0cda911714f46125d84cec82f485288f60_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2d7cb96964b454c4152ebd2d788877a8dd4b012452e5f0a42aac29065ad979f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2d7cb96964b454c4152ebd2d788877a8dd4b012452e5f0a42aac29065ad979f->enter($__internal_f2d7cb96964b454c4152ebd2d788877a8dd4b012452e5f0a42aac29065ad979f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_387871c48c207b3e106bbc6849adfc589583e262a16122bbb15188a484c1f89f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387871c48c207b3e106bbc6849adfc589583e262a16122bbb15188a484c1f89f->enter($__internal_387871c48c207b3e106bbc6849adfc589583e262a16122bbb15188a484c1f89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ligne"), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depart", array()), 'label');
        echo "
\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depart", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depart", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trajet", array()), 'label');
        echo "
\t\t    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trajet", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trajet", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "heureDepart", array()), 'label');
        echo "
\t\t    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "heureDepart", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "heureDepart", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacite", array()), 'label');
        echo "
\t\t    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacite", array()), 'errors');
        echo "
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
";
        
        $__internal_387871c48c207b3e106bbc6849adfc589583e262a16122bbb15188a484c1f89f->leave($__internal_387871c48c207b3e106bbc6849adfc589583e262a16122bbb15188a484c1f89f_prof);

        
        $__internal_f2d7cb96964b454c4152ebd2d788877a8dd4b012452e5f0a42aac29065ad979f->leave($__internal_f2d7cb96964b454c4152ebd2d788877a8dd4b012452e5f0a42aac29065ad979f_prof);

    }

    public function getTemplateName()
    {
        return ":transportsViews:addTransport.html.twig";
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
{% endblock %}", ":transportsViews:addTransport.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/transportsViews/addTransport.html.twig");
    }
}
