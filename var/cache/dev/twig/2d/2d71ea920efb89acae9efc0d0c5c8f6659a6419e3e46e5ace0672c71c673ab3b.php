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
        $__internal_a4a993ff2fa225ae9af8e2b95aa8108ff1991158f36459b6787f6301a9353802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a993ff2fa225ae9af8e2b95aa8108ff1991158f36459b6787f6301a9353802->enter($__internal_a4a993ff2fa225ae9af8e2b95aa8108ff1991158f36459b6787f6301a9353802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/addClasse.html.twig"));

        $__internal_750b4e34f4237845646f5f13582d7ed74009f25c7fed1ef4f3e37761fd35444f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750b4e34f4237845646f5f13582d7ed74009f25c7fed1ef4f3e37761fd35444f->enter($__internal_750b4e34f4237845646f5f13582d7ed74009f25c7fed1ef4f3e37761fd35444f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/addClasse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4a993ff2fa225ae9af8e2b95aa8108ff1991158f36459b6787f6301a9353802->leave($__internal_a4a993ff2fa225ae9af8e2b95aa8108ff1991158f36459b6787f6301a9353802_prof);

        
        $__internal_750b4e34f4237845646f5f13582d7ed74009f25c7fed1ef4f3e37761fd35444f->leave($__internal_750b4e34f4237845646f5f13582d7ed74009f25c7fed1ef4f3e37761fd35444f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_28f5bb0f9e404835ec12eac7a65fafbba78e20af2cb70c2e494856d72c5805fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28f5bb0f9e404835ec12eac7a65fafbba78e20af2cb70c2e494856d72c5805fd->enter($__internal_28f5bb0f9e404835ec12eac7a65fafbba78e20af2cb70c2e494856d72c5805fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e5f3487f33a531789d4672795e1f3cdda60d0948073fe83acee43c7c43913c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f3487f33a531789d4672795e1f3cdda60d0948073fe83acee43c7c43913c0c->enter($__internal_e5f3487f33a531789d4672795e1f3cdda60d0948073fe83acee43c7c43913c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.tagsinput.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e5f3487f33a531789d4672795e1f3cdda60d0948073fe83acee43c7c43913c0c->leave($__internal_e5f3487f33a531789d4672795e1f3cdda60d0948073fe83acee43c7c43913c0c_prof);

        
        $__internal_28f5bb0f9e404835ec12eac7a65fafbba78e20af2cb70c2e494856d72c5805fd->leave($__internal_28f5bb0f9e404835ec12eac7a65fafbba78e20af2cb70c2e494856d72c5805fd_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebda60822e62f80f871a89f3782bbe0ea6e0b26b4273686e84ab2a1420c12353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebda60822e62f80f871a89f3782bbe0ea6e0b26b4273686e84ab2a1420c12353->enter($__internal_ebda60822e62f80f871a89f3782bbe0ea6e0b26b4273686e84ab2a1420c12353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_061042e0ef82e5bbc4019775c83b6e17ef932e7aac9370487940bca2e556b37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061042e0ef82e5bbc4019775c83b6e17ef932e7aac9370487940bca2e556b37d->enter($__internal_061042e0ef82e5bbc4019775c83b6e17ef932e7aac9370487940bca2e556b37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t<div class=\"form-group\">
\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "matieres", array()), 'label');
        echo "
\t\t    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "matieres", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "matieres", array()), 'errors');
        echo "
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
";
        
        $__internal_061042e0ef82e5bbc4019775c83b6e17ef932e7aac9370487940bca2e556b37d->leave($__internal_061042e0ef82e5bbc4019775c83b6e17ef932e7aac9370487940bca2e556b37d_prof);

        
        $__internal_ebda60822e62f80f871a89f3782bbe0ea6e0b26b4273686e84ab2a1420c12353->leave($__internal_ebda60822e62f80f871a89f3782bbe0ea6e0b26b4273686e84ab2a1420c12353_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_693b247273bb7df6ba701dfd338f87221b084dff019a3d097c48400d8711a8ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693b247273bb7df6ba701dfd338f87221b084dff019a3d097c48400d8711a8ea->enter($__internal_693b247273bb7df6ba701dfd338f87221b084dff019a3d097c48400d8711a8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8e9289d02503c070778280983ff03c24702d59b14441a0d8f5ce20ec8794dc4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e9289d02503c070778280983ff03c24702d59b14441a0d8f5ce20ec8794dc4d->enter($__internal_8e9289d02503c070778280983ff03c24702d59b14441a0d8f5ce20ec8794dc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\tmsg_add_tag=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.add_tag"), "html", null, true);
        echo "\";
    \t\$('.tags').tagsInput({width:'100%', 'defaultText':msg_add_tag});
\t</script>
";
        
        $__internal_8e9289d02503c070778280983ff03c24702d59b14441a0d8f5ce20ec8794dc4d->leave($__internal_8e9289d02503c070778280983ff03c24702d59b14441a0d8f5ce20ec8794dc4d_prof);

        
        $__internal_693b247273bb7df6ba701dfd338f87221b084dff019a3d097c48400d8711a8ea->leave($__internal_693b247273bb7df6ba701dfd338f87221b084dff019a3d097c48400d8711a8ea_prof);

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
        return array (  191 => 46,  185 => 44,  176 => 43,  162 => 38,  156 => 35,  152 => 34,  148 => 33,  142 => 30,  138 => 29,  134 => 28,  128 => 25,  124 => 24,  120 => 23,  114 => 20,  110 => 19,  106 => 18,  100 => 15,  96 => 14,  92 => 13,  87 => 11,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.matieres) }}
\t\t    {{ form_widget(form.matieres ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.matieres) }}
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
