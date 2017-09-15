<?php

/* adminsViews/addAdmin.html.twig */
class __TwigTemplate_335d2924e79b4ad1526c0dc5e7589624eb21918c76da39c2d3a644af5c806d01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "adminsViews/addAdmin.html.twig", 1);
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
        $__internal_55bedf1f13b79cf935ca7ef516d22980b7d040e2355f8314005b4550bca2ac4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55bedf1f13b79cf935ca7ef516d22980b7d040e2355f8314005b4550bca2ac4f->enter($__internal_55bedf1f13b79cf935ca7ef516d22980b7d040e2355f8314005b4550bca2ac4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/addAdmin.html.twig"));

        $__internal_cbdca3f20219ae15866e867f2330046ee6c6ea32ecc37ac32bdf73da623b8e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdca3f20219ae15866e867f2330046ee6c6ea32ecc37ac32bdf73da623b8e34->enter($__internal_cbdca3f20219ae15866e867f2330046ee6c6ea32ecc37ac32bdf73da623b8e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/addAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55bedf1f13b79cf935ca7ef516d22980b7d040e2355f8314005b4550bca2ac4f->leave($__internal_55bedf1f13b79cf935ca7ef516d22980b7d040e2355f8314005b4550bca2ac4f_prof);

        
        $__internal_cbdca3f20219ae15866e867f2330046ee6c6ea32ecc37ac32bdf73da623b8e34->leave($__internal_cbdca3f20219ae15866e867f2330046ee6c6ea32ecc37ac32bdf73da623b8e34_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcbd465f77d7ca274302092995aca1c5ab9e58683522d5a75d1d45adfaeab92d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcbd465f77d7ca274302092995aca1c5ab9e58683522d5a75d1d45adfaeab92d->enter($__internal_bcbd465f77d7ca274302092995aca1c5ab9e58683522d5a75d1d45adfaeab92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1574db513e03efa4effdd4bb69ebc7f8c4c75dedd1397de0d1fe0ac7c23dd52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1574db513e03efa4effdd4bb69ebc7f8c4c75dedd1397de0d1fe0ac7c23dd52->enter($__internal_f1574db513e03efa4effdd4bb69ebc7f8c4c75dedd1397de0d1fe0ac7c23dd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin"), "html", null, true);
        echo "</h1>
<div class=\"container\">
\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "photo", array()), 'label');
        echo "
\t\t    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "photo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "photo", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'label');
        echo "
\t\t    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "genre", array()), 'label');
        echo "
\t\t    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "genre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "genre", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateDeNaissance", array()), 'label');
        echo "
\t\t    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateDeNaissance", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateDeNaissance", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lieuDeNaissance", array()), 'label');
        echo "
\t\t    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lieuDeNaissance", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lieuDeNaissance", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cIN", array()), 'label');
        echo "
\t\t    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cIN", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cIN", array()), 'errors');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "commentaire", array()), 'label');
        echo "
\t\t    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "commentaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "commentaire", array()), 'errors');
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
        
        $__internal_f1574db513e03efa4effdd4bb69ebc7f8c4c75dedd1397de0d1fe0ac7c23dd52->leave($__internal_f1574db513e03efa4effdd4bb69ebc7f8c4c75dedd1397de0d1fe0ac7c23dd52_prof);

        
        $__internal_bcbd465f77d7ca274302092995aca1c5ab9e58683522d5a75d1d45adfaeab92d->leave($__internal_bcbd465f77d7ca274302092995aca1c5ab9e58683522d5a75d1d45adfaeab92d_prof);

    }

    public function getTemplateName()
    {
        return "adminsViews/addAdmin.html.twig";
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
<h1>{% if edit %}{{'edit'|trans}}{% else %}{{'add'|trans}}{% endif %} {{'admin'|trans}}</h1>
<div class=\"container\">
\t{{ form_start(form) }}
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.photo) }}
\t\t    {{ form_widget(form.photo ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.photo) }}
\t\t</div>
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
\t\t\t{{ form_label(form.genre) }}
\t\t    {{ form_widget(form.genre ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.genre) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.dateDeNaissance) }}
\t\t    {{ form_widget(form.dateDeNaissance ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.dateDeNaissance) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.lieuDeNaissance) }}
\t\t    {{ form_widget(form.lieuDeNaissance ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.lieuDeNaissance) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.cIN) }}
\t\t    {{ form_widget(form.cIN ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.cIN) }}
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
\t\t\t{{ form_label(form.commentaire) }}
\t\t    {{ form_widget(form.commentaire ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.commentaire) }}
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
{% endblock %}", "adminsViews/addAdmin.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\adminsViews\\addAdmin.html.twig");
    }
}
