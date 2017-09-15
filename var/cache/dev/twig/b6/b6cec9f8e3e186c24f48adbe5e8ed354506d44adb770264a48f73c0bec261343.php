<?php

/* parentsViews/addParent.html.twig */
class __TwigTemplate_da48b57887f0b61c8686d14671950666d48aed1f8a95be0040fa654c69886cc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "parentsViews/addParent.html.twig", 1);
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
        $__internal_26f4e45c1bd0ccd9c127ab27ba75694113bca12b9eb4bad252669e5dc1c89e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f4e45c1bd0ccd9c127ab27ba75694113bca12b9eb4bad252669e5dc1c89e40->enter($__internal_26f4e45c1bd0ccd9c127ab27ba75694113bca12b9eb4bad252669e5dc1c89e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/addParent.html.twig"));

        $__internal_b380a8c41a0d7d8218fe92f9a6ff15622200d47088fcfde85dfe4099807ce536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b380a8c41a0d7d8218fe92f9a6ff15622200d47088fcfde85dfe4099807ce536->enter($__internal_b380a8c41a0d7d8218fe92f9a6ff15622200d47088fcfde85dfe4099807ce536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/addParent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26f4e45c1bd0ccd9c127ab27ba75694113bca12b9eb4bad252669e5dc1c89e40->leave($__internal_26f4e45c1bd0ccd9c127ab27ba75694113bca12b9eb4bad252669e5dc1c89e40_prof);

        
        $__internal_b380a8c41a0d7d8218fe92f9a6ff15622200d47088fcfde85dfe4099807ce536->leave($__internal_b380a8c41a0d7d8218fe92f9a6ff15622200d47088fcfde85dfe4099807ce536_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d36eb23d130ac0483a28b835ce9bc9a9e34582988d102694b22e6eeb4b8082b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d36eb23d130ac0483a28b835ce9bc9a9e34582988d102694b22e6eeb4b8082b->enter($__internal_2d36eb23d130ac0483a28b835ce9bc9a9e34582988d102694b22e6eeb4b8082b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04c6da5ffbcc1587e10197c284a171a12ecc17f65614847f1cf54d044bfb55c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c6da5ffbcc1587e10197c284a171a12ecc17f65614847f1cf54d044bfb55c5->enter($__internal_04c6da5ffbcc1587e10197c284a171a12ecc17f65614847f1cf54d044bfb55c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parent"), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'label');
        echo "
\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomMere", array()), 'label');
        echo "
\t\t    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomMere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomMere", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenomMere", array()), 'label');
        echo "
\t\t    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenomMere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenomMere", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cIN", array()), 'label');
        echo "
\t\t    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cIN", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cIN", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "professionPere", array()), 'label');
        echo "
\t\t    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "professionPere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "professionPere", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "professionMere", array()), 'label');
        echo "
\t\t    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "professionMere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "professionMere", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'label');
        echo "
\t\t    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codePostal", array()), 'label');
        echo "
\t\t    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codePostal", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codePostal", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'label');
        echo "
\t\t    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mobil", array()), 'label');
        echo "
\t\t    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mobil", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mobil", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label');
        echo "
\t\t    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label');
        echo "
\t\t    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
\t\t</div>
\t";
        // line 73
        if ((($context["edit"] ?? $this->getContext($context, "edit")) == false)) {
            // line 74
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 75
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
            echo "
\t\t    ";
            // line 76
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t    ";
            // line 77
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
            echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
            // line 80
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
            echo "
\t\t    ";
            // line 81
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t    ";
            // line 82
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
            echo "
\t\t</div>
\t";
        } else {
            // line 85
            echo "\t";
            $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "setRendered", array());
            // line 86
            echo "\t";
        }
        echo "\t
\t\t<button type=\"submit\">Valider</button>
\t";
        // line 88
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
";
        
        $__internal_04c6da5ffbcc1587e10197c284a171a12ecc17f65614847f1cf54d044bfb55c5->leave($__internal_04c6da5ffbcc1587e10197c284a171a12ecc17f65614847f1cf54d044bfb55c5_prof);

        
        $__internal_2d36eb23d130ac0483a28b835ce9bc9a9e34582988d102694b22e6eeb4b8082b->leave($__internal_2d36eb23d130ac0483a28b835ce9bc9a9e34582988d102694b22e6eeb4b8082b_prof);

    }

    public function getTemplateName()
    {
        return "parentsViews/addParent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 88,  285 => 86,  282 => 85,  276 => 82,  272 => 81,  268 => 80,  262 => 77,  258 => 76,  254 => 75,  251 => 74,  249 => 73,  244 => 71,  240 => 70,  236 => 69,  230 => 66,  226 => 65,  222 => 64,  216 => 61,  212 => 60,  208 => 59,  202 => 56,  198 => 55,  194 => 54,  188 => 51,  184 => 50,  180 => 49,  174 => 46,  170 => 45,  166 => 44,  160 => 41,  156 => 40,  152 => 39,  146 => 36,  142 => 35,  138 => 34,  132 => 31,  128 => 30,  124 => 29,  118 => 26,  114 => 25,  110 => 24,  104 => 21,  100 => 20,  96 => 19,  90 => 16,  86 => 15,  82 => 14,  76 => 11,  72 => 10,  68 => 9,  63 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{% if edit %}{{'edit'|trans}}{% else %}{{'add'|trans}}{% endif %} {{'parent'|trans}}</h1>
<div class=\"container\">
\t{{ form_start(form) }}
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
\t\t\t{{ form_label(form.nomMere) }}
\t\t    {{ form_widget(form.nomMere ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.nomMere) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.prenomMere) }}
\t\t    {{ form_widget(form.prenomMere ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.prenomMere) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.cIN) }}
\t\t    {{ form_widget(form.cIN ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.cIN) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.professionPere) }}
\t\t    {{ form_widget(form.professionPere ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.professionPere) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.professionMere) }}
\t\t    {{ form_widget(form.professionMere ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.professionMere) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.adresse) }}
\t\t    {{ form_widget(form.adresse ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.adresse) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.codePostal) }}
\t\t    {{ form_widget(form.codePostal ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.codePostal) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.telephone) }}
\t\t    {{ form_widget(form.telephone ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.telephone) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.mobil) }}
\t\t    {{ form_widget(form.mobil ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.mobil) }}
\t\t</div>
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
{% endblock %}", "parentsViews/addParent.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\parentsViews\\addParent.html.twig");
    }
}
