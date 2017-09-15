<?php

/* :sallesViews:addSalle.html.twig */
class __TwigTemplate_3b9a37dc6bee1fa791a8cc5b18f512978de352202133250fc6f095a691816d71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":sallesViews:addSalle.html.twig", 1);
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
        $__internal_bb4a011446e1838a34cf12d1ad92c92a2931875f0c99baf03ef2c66f2c70f49b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4a011446e1838a34cf12d1ad92c92a2931875f0c99baf03ef2c66f2c70f49b->enter($__internal_bb4a011446e1838a34cf12d1ad92c92a2931875f0c99baf03ef2c66f2c70f49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:addSalle.html.twig"));

        $__internal_3181abf81fe194d8142ea92ab083d645c13047e6166b808ff03bb7cc6d5ca255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3181abf81fe194d8142ea92ab083d645c13047e6166b808ff03bb7cc6d5ca255->enter($__internal_3181abf81fe194d8142ea92ab083d645c13047e6166b808ff03bb7cc6d5ca255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:addSalle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb4a011446e1838a34cf12d1ad92c92a2931875f0c99baf03ef2c66f2c70f49b->leave($__internal_bb4a011446e1838a34cf12d1ad92c92a2931875f0c99baf03ef2c66f2c70f49b_prof);

        
        $__internal_3181abf81fe194d8142ea92ab083d645c13047e6166b808ff03bb7cc6d5ca255->leave($__internal_3181abf81fe194d8142ea92ab083d645c13047e6166b808ff03bb7cc6d5ca255_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9361f7ca94d7cd1e9ec3bcf8f68fd0978588960132b9fd9ced949629e7370d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9361f7ca94d7cd1e9ec3bcf8f68fd0978588960132b9fd9ced949629e7370d4e->enter($__internal_9361f7ca94d7cd1e9ec3bcf8f68fd0978588960132b9fd9ced949629e7370d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0fea1f60d72f302c67d89eb9a4d9281bb889cf9d2ff59ff831cf8279ec177b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0fea1f60d72f302c67d89eb9a4d9281bb889cf9d2ff59ff831cf8279ec177b1->enter($__internal_c0fea1f60d72f302c67d89eb9a4d9281bb889cf9d2ff59ff831cf8279ec177b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("salle"), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "capacite", array()), 'label');
        echo "
\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "capacite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "capacite", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "equipement", array()), 'label');
        echo "
\t\t    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "equipement", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "equipement", array()), 'errors');
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
        
        $__internal_c0fea1f60d72f302c67d89eb9a4d9281bb889cf9d2ff59ff831cf8279ec177b1->leave($__internal_c0fea1f60d72f302c67d89eb9a4d9281bb889cf9d2ff59ff831cf8279ec177b1_prof);

        
        $__internal_9361f7ca94d7cd1e9ec3bcf8f68fd0978588960132b9fd9ced949629e7370d4e->leave($__internal_9361f7ca94d7cd1e9ec3bcf8f68fd0978588960132b9fd9ced949629e7370d4e_prof);

    }

    public function getTemplateName()
    {
        return ":sallesViews:addSalle.html.twig";
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
<h1>{% if edit %}{{'edit'|trans}}{% else %}{{'add'|trans}}{% endif %} {{'salle'|trans}}</h1>
<div class=\"container\">
\t{{ form_start(form) }}
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.nom) }}
\t\t    {{ form_widget(form.nom ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.nom) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.capacite) }}
\t\t    {{ form_widget(form.capacite ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.capacite) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.equipement) }}
\t\t    {{ form_widget(form.equipement ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.equipement) }}
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t{{ form_end(form) }}
</div>
</div>
{% endblock %}", ":sallesViews:addSalle.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources\\views/sallesViews/addSalle.html.twig");
    }
}
