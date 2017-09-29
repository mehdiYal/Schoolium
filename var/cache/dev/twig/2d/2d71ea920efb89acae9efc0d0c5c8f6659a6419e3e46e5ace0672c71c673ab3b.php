<?php

/* classesViews/addClasse.html.twig */
class __TwigTemplate_c0102410c9610dc7c5a7880255996fb1cd906748cc7f47b7c037d8e99ac5891a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "classesViews/addClasse.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_952bcede03468d523335b196fa526f94de0e13cb6352860d23deeffae4b55a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952bcede03468d523335b196fa526f94de0e13cb6352860d23deeffae4b55a58->enter($__internal_952bcede03468d523335b196fa526f94de0e13cb6352860d23deeffae4b55a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/addClasse.html.twig"));

        $__internal_7d921a5e20a6be5bf8eb36fc0dd7abff68288f9cdf9a63c33ff610b0b7eeb207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d921a5e20a6be5bf8eb36fc0dd7abff68288f9cdf9a63c33ff610b0b7eeb207->enter($__internal_7d921a5e20a6be5bf8eb36fc0dd7abff68288f9cdf9a63c33ff610b0b7eeb207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/addClasse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_952bcede03468d523335b196fa526f94de0e13cb6352860d23deeffae4b55a58->leave($__internal_952bcede03468d523335b196fa526f94de0e13cb6352860d23deeffae4b55a58_prof);

        
        $__internal_7d921a5e20a6be5bf8eb36fc0dd7abff68288f9cdf9a63c33ff610b0b7eeb207->leave($__internal_7d921a5e20a6be5bf8eb36fc0dd7abff68288f9cdf9a63c33ff610b0b7eeb207_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e98394449d2429e7c63ac50a582bad6ddff33fca92994f12f54795a48dfe7f87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e98394449d2429e7c63ac50a582bad6ddff33fca92994f12f54795a48dfe7f87->enter($__internal_e98394449d2429e7c63ac50a582bad6ddff33fca92994f12f54795a48dfe7f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3494edae7fc7b31a511ea17149f988dc21bbff281fc68ffee9d10408cc78d6ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3494edae7fc7b31a511ea17149f988dc21bbff281fc68ffee9d10408cc78d6ee->enter($__internal_3494edae7fc7b31a511ea17149f988dc21bbff281fc68ffee9d10408cc78d6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.tagsinput.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_3494edae7fc7b31a511ea17149f988dc21bbff281fc68ffee9d10408cc78d6ee->leave($__internal_3494edae7fc7b31a511ea17149f988dc21bbff281fc68ffee9d10408cc78d6ee_prof);

        
        $__internal_e98394449d2429e7c63ac50a582bad6ddff33fca92994f12f54795a48dfe7f87->leave($__internal_e98394449d2429e7c63ac50a582bad6ddff33fca92994f12f54795a48dfe7f87_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f57270f8287d4763ed83668f913f193ed8c021f12dedea99f7f51c1d47739fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f57270f8287d4763ed83668f913f193ed8c021f12dedea99f7f51c1d47739fa->enter($__internal_3f57270f8287d4763ed83668f913f193ed8c021f12dedea99f7f51c1d47739fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c803fc6aaed6d9322b3e0a33cbbc3172bb705f08fb6b11fb970fe49896ea89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c803fc6aaed6d9322b3e0a33cbbc3172bb705f08fb6b11fb970fe49896ea89d->enter($__internal_4c803fc6aaed6d9322b3e0a33cbbc3172bb705f08fb6b11fb970fe49896ea89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"container\">
<h1>";
        // line 9
        if (($context["edit"] ?? $this->getContext($context, "edit"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add"), "html", null, true);
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classe"), "html", null, true);
        echo "</h1>
<div class=\"container\">
\t";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
\t\t    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annee", array()), 'label');
        echo "
\t\t    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annee", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annee", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'label');
        echo "
\t\t    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "responsable", array()), 'label');
        echo "
\t\t    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "responsable", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "responsable", array()), 'errors');
        echo "
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
";
        
        $__internal_4c803fc6aaed6d9322b3e0a33cbbc3172bb705f08fb6b11fb970fe49896ea89d->leave($__internal_4c803fc6aaed6d9322b3e0a33cbbc3172bb705f08fb6b11fb970fe49896ea89d_prof);

        
        $__internal_3f57270f8287d4763ed83668f913f193ed8c021f12dedea99f7f51c1d47739fa->leave($__internal_3f57270f8287d4763ed83668f913f193ed8c021f12dedea99f7f51c1d47739fa_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_67048d14ca501ddd5464a3918be5bfb8acaf8c78152493231272d9b0494592ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67048d14ca501ddd5464a3918be5bfb8acaf8c78152493231272d9b0494592ad->enter($__internal_67048d14ca501ddd5464a3918be5bfb8acaf8c78152493231272d9b0494592ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_16f7b281c9d24f74a59cfc897a43c5959628c360c4691b5ff6920c1c24b6044b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f7b281c9d24f74a59cfc897a43c5959628c360c4691b5ff6920c1c24b6044b->enter($__internal_16f7b281c9d24f74a59cfc897a43c5959628c360c4691b5ff6920c1c24b6044b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\tmsg_add_tag=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.add_tag"), "html", null, true);
        echo "\";
    \t\$('.tags').tagsInput({width:'100%', 'defaultText':msg_add_tag});
\t</script>
";
        
        $__internal_16f7b281c9d24f74a59cfc897a43c5959628c360c4691b5ff6920c1c24b6044b->leave($__internal_16f7b281c9d24f74a59cfc897a43c5959628c360c4691b5ff6920c1c24b6044b_prof);

        
        $__internal_67048d14ca501ddd5464a3918be5bfb8acaf8c78152493231272d9b0494592ad->leave($__internal_67048d14ca501ddd5464a3918be5bfb8acaf8c78152493231272d9b0494592ad_prof);

    }

    public function getTemplateName()
    {
        return "classesViews/addClasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 41,  171 => 39,  162 => 38,  148 => 33,  142 => 30,  138 => 29,  134 => 28,  128 => 25,  124 => 24,  120 => 23,  114 => 20,  110 => 19,  106 => 18,  100 => 15,  96 => 14,  92 => 13,  87 => 11,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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

{% block stylesheets %}
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/jquery.tagsinput.css') }}\" />
{% endblock %}

{% block body %}
<div class=\"container\">
<h1>{% if edit %}{{'edit'|trans}}{% else %}{{'add'|trans}}{% endif %} {{'classe'|trans}}</h1>
<div class=\"container\">
\t{{ form_start(form) }}
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.nom) }}
\t\t    {{ form_widget(form.nom ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.nom) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.annee) }}
\t\t    {{ form_widget(form.annee ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.annee) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.description) }}
\t\t    {{ form_widget(form.description ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.description) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.responsable) }}
\t\t    {{ form_widget(form.responsable ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.responsable) }}
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t{{ form_end(form) }}
</div>
</div>
{% endblock %}

{% block javascripts %}
\t<script src=\"{{ asset('js/jquery.tagsinput.js') }}\"></script>
\t<script>
\t\tmsg_add_tag=\"{{'global.add_tag'|trans()}}\";
    \t\$('.tags').tagsInput({width:'100%', 'defaultText':msg_add_tag});
\t</script>
{% endblock %}", "classesViews/addClasse.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/classesViews/addClasse.html.twig");
    }
}
