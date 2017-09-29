<?php

/* elevesViews/addEleve.html.twig */
class __TwigTemplate_c84c25fd1a955cf55edc1516753f08a134fa0602e116271bc2db15803e32c681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "elevesViews/addEleve.html.twig", 1);
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
        $__internal_c181df15c50fb972b7b01032ebed71429ca0c6e0264a84059a8a3bfb9826901b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c181df15c50fb972b7b01032ebed71429ca0c6e0264a84059a8a3bfb9826901b->enter($__internal_c181df15c50fb972b7b01032ebed71429ca0c6e0264a84059a8a3bfb9826901b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/addEleve.html.twig"));

        $__internal_08e7971b910c67b55a1c9c1031d687cd51bc3fe37f2b1e0e06b154116ac9b01d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e7971b910c67b55a1c9c1031d687cd51bc3fe37f2b1e0e06b154116ac9b01d->enter($__internal_08e7971b910c67b55a1c9c1031d687cd51bc3fe37f2b1e0e06b154116ac9b01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/addEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c181df15c50fb972b7b01032ebed71429ca0c6e0264a84059a8a3bfb9826901b->leave($__internal_c181df15c50fb972b7b01032ebed71429ca0c6e0264a84059a8a3bfb9826901b_prof);

        
        $__internal_08e7971b910c67b55a1c9c1031d687cd51bc3fe37f2b1e0e06b154116ac9b01d->leave($__internal_08e7971b910c67b55a1c9c1031d687cd51bc3fe37f2b1e0e06b154116ac9b01d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25a2a008e4d8c398f65e37a232e1425f09aaf58a9476283e6592848142ba125d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a2a008e4d8c398f65e37a232e1425f09aaf58a9476283e6592848142ba125d->enter($__internal_25a2a008e4d8c398f65e37a232e1425f09aaf58a9476283e6592848142ba125d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a2b0a41d13f8b6672d053cbc24c067dd34d92fb6895f84f1a3924a6d74763c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2b0a41d13f8b6672d053cbc24c067dd34d92fb6895f84f1a3924a6d74763c5->enter($__internal_0a2b0a41d13f8b6672d053cbc24c067dd34d92fb6895f84f1a3924a6d74763c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("student"), "html", null, true);
        echo "</h1>
<div class=\"container\">
\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t
\t\t<div class=\"form-group\">
\t\t\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
\t\t    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'label');
        echo "
\t\t    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annee", array()), 'label');
        echo "
\t\t    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annee", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annee", array()), 'errors');
        echo "
\t\t</div>\t\t
\t\t<div class=\"form-group\">
\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label');
        echo "
\t\t    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label');
        echo "
\t\t    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
\t\t</div>
\t";
        // line 34
        if ((($context["edit"] ?? $this->getContext($context, "edit")) == false)) {
            // line 35
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 36
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
            echo "
\t\t    ";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t    ";
            // line 38
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
            echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
            // line 41
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
            echo "
\t\t    ";
            // line 42
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t    ";
            // line 43
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
            echo "
\t\t</div>
\t";
        } else {
            // line 46
            echo "\t";
            $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "setRendered", array());
            // line 47
            echo "\t";
        }
        echo "\t
\t\t<button type=\"submit\">Valider</button>
\t";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
";
        
        $__internal_0a2b0a41d13f8b6672d053cbc24c067dd34d92fb6895f84f1a3924a6d74763c5->leave($__internal_0a2b0a41d13f8b6672d053cbc24c067dd34d92fb6895f84f1a3924a6d74763c5_prof);

        
        $__internal_25a2a008e4d8c398f65e37a232e1425f09aaf58a9476283e6592848142ba125d->leave($__internal_25a2a008e4d8c398f65e37a232e1425f09aaf58a9476283e6592848142ba125d_prof);

    }

    public function getTemplateName()
    {
        return "elevesViews/addEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 49,  174 => 47,  171 => 46,  165 => 43,  161 => 42,  157 => 41,  151 => 38,  147 => 37,  143 => 36,  140 => 35,  138 => 34,  133 => 32,  129 => 31,  125 => 30,  119 => 27,  115 => 26,  111 => 25,  105 => 22,  101 => 21,  97 => 20,  91 => 17,  87 => 16,  83 => 15,  77 => 12,  73 => 11,  69 => 10,  63 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{% if edit %}{{'edit'|trans}}{% else %}{{'add'|trans}}{% endif %} {{'student'|trans}}</h1>
<div class=\"container\">
\t{{ form_start(form) }}
\t\t
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.nom) }}
\t\t    {{ form_widget(form.nom ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.nom) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.prenom) }}
\t\t    {{ form_widget(form.prenom ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.prenom) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.annee) }}
\t\t    {{ form_widget(form.annee ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.annee) }}
\t\t</div>\t\t
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.email) }}
\t\t    {{ form_widget(form.email ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.email) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.username) }}
\t\t    {{ form_widget(form.username ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.username) }}
\t\t</div>
\t{% if edit==false %}
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.plainPassword.first) }}
\t\t    {{ form_widget(form.plainPassword.first ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.plainPassword.first) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.plainPassword.second) }}
\t\t    {{ form_widget(form.plainPassword.second ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.plainPassword.second) }}
\t\t</div>
\t{% else %}
\t{% do form.plainPassword.setRendered %}
\t{% endif %}\t
\t\t<button type=\"submit\">Valider</button>
\t{{ form_end(form) }}
</div>
</div>
{% endblock %}", "elevesViews/addEleve.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/elevesViews/addEleve.html.twig");
    }
}
