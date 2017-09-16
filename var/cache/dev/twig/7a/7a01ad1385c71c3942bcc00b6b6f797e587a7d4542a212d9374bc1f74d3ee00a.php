<?php

/* :sallesViews:addSalle.html.twig */
class __TwigTemplate_08b4564dc35876190aed95a7e073732c35a84f2380efc0e7b733c395d1f4a353 extends Twig_Template
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
        $__internal_242b236dff33fc313c952fa3f16f43965e254c4bbdb93fda0ac413e9bb90961c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_242b236dff33fc313c952fa3f16f43965e254c4bbdb93fda0ac413e9bb90961c->enter($__internal_242b236dff33fc313c952fa3f16f43965e254c4bbdb93fda0ac413e9bb90961c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:addSalle.html.twig"));

        $__internal_62167d73c0589e2a1d18236093df62f4ebcd71e9578d0d0c9fe0618715bf364a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62167d73c0589e2a1d18236093df62f4ebcd71e9578d0d0c9fe0618715bf364a->enter($__internal_62167d73c0589e2a1d18236093df62f4ebcd71e9578d0d0c9fe0618715bf364a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:addSalle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_242b236dff33fc313c952fa3f16f43965e254c4bbdb93fda0ac413e9bb90961c->leave($__internal_242b236dff33fc313c952fa3f16f43965e254c4bbdb93fda0ac413e9bb90961c_prof);

        
        $__internal_62167d73c0589e2a1d18236093df62f4ebcd71e9578d0d0c9fe0618715bf364a->leave($__internal_62167d73c0589e2a1d18236093df62f4ebcd71e9578d0d0c9fe0618715bf364a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9220cba1d0b5296820d4256d04b164c1c22f966b5f29f03f2b2426f867a4c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9220cba1d0b5296820d4256d04b164c1c22f966b5f29f03f2b2426f867a4c79->enter($__internal_b9220cba1d0b5296820d4256d04b164c1c22f966b5f29f03f2b2426f867a4c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d00557c488f8be22b65b9c5e2523745d7713ea5a73a56fd7a5487287ad97ba3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00557c488f8be22b65b9c5e2523745d7713ea5a73a56fd7a5487287ad97ba3a->enter($__internal_d00557c488f8be22b65b9c5e2523745d7713ea5a73a56fd7a5487287ad97ba3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("salle"), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacite", array()), 'label');
        echo "
\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacite", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipement", array()), 'label');
        echo "
\t\t    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipement", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipement", array()), 'errors');
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
        
        $__internal_d00557c488f8be22b65b9c5e2523745d7713ea5a73a56fd7a5487287ad97ba3a->leave($__internal_d00557c488f8be22b65b9c5e2523745d7713ea5a73a56fd7a5487287ad97ba3a_prof);

        
        $__internal_b9220cba1d0b5296820d4256d04b164c1c22f966b5f29f03f2b2426f867a4c79->leave($__internal_b9220cba1d0b5296820d4256d04b164c1c22f966b5f29f03f2b2426f867a4c79_prof);

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
{% endblock %}", ":sallesViews:addSalle.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/sallesViews/addSalle.html.twig");
    }
}
