<?php

/* :menusViews:addMenu.html.twig */
class __TwigTemplate_157e4b695d6d6a0c3336f68d03c0e11998b47fc91d55b6ae3e9fd839239ce2da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":menusViews:addMenu.html.twig", 1);
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
        $__internal_389d008d2a121d981be98796879e0fa2303d9d39b8f50add47b7153665feaf61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_389d008d2a121d981be98796879e0fa2303d9d39b8f50add47b7153665feaf61->enter($__internal_389d008d2a121d981be98796879e0fa2303d9d39b8f50add47b7153665feaf61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:addMenu.html.twig"));

        $__internal_f8b689fc11d868080805069d7477b1379b18bae8b7c914a6e5e42dcab4beb0b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b689fc11d868080805069d7477b1379b18bae8b7c914a6e5e42dcab4beb0b7->enter($__internal_f8b689fc11d868080805069d7477b1379b18bae8b7c914a6e5e42dcab4beb0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:addMenu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_389d008d2a121d981be98796879e0fa2303d9d39b8f50add47b7153665feaf61->leave($__internal_389d008d2a121d981be98796879e0fa2303d9d39b8f50add47b7153665feaf61_prof);

        
        $__internal_f8b689fc11d868080805069d7477b1379b18bae8b7c914a6e5e42dcab4beb0b7->leave($__internal_f8b689fc11d868080805069d7477b1379b18bae8b7c914a6e5e42dcab4beb0b7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53219881a5ba060279d8c5b70e5588df3a161a7ce2e294afb957057a73fb93a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53219881a5ba060279d8c5b70e5588df3a161a7ce2e294afb957057a73fb93a3->enter($__internal_53219881a5ba060279d8c5b70e5588df3a161a7ce2e294afb957057a73fb93a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57159e374ab822694fc443eaa5832b239c0ea76347cd0984fe19c2e1e6096872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57159e374ab822694fc443eaa5832b239c0ea76347cd0984fe19c2e1e6096872->enter($__internal_57159e374ab822694fc443eaa5832b239c0ea76347cd0984fe19c2e1e6096872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Menu"), "html", null, true);
        echo "</h1>
<div class=\"container\">
\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jour", array()), 'label');
        echo "
\t\t    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jour", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jour", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "menu", array()), 'label');
        echo "
\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "menu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "menu", array()), 'errors');
        echo "
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
";
        
        $__internal_57159e374ab822694fc443eaa5832b239c0ea76347cd0984fe19c2e1e6096872->leave($__internal_57159e374ab822694fc443eaa5832b239c0ea76347cd0984fe19c2e1e6096872_prof);

        
        $__internal_53219881a5ba060279d8c5b70e5588df3a161a7ce2e294afb957057a73fb93a3->leave($__internal_53219881a5ba060279d8c5b70e5588df3a161a7ce2e294afb957057a73fb93a3_prof);

    }

    public function getTemplateName()
    {
        return ":menusViews:addMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 19,  90 => 16,  86 => 15,  82 => 14,  76 => 11,  72 => 10,  68 => 9,  63 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{% if edit %}{{'edit'|trans}}{% else %}{{'add'|trans}}{% endif %} {{'Menu'|trans}}</h1>
<div class=\"container\">
\t{{ form_start(form) }}
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.jour) }}
\t\t    {{ form_widget(form.jour ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.jour) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.menu) }}
\t\t    {{ form_widget(form.menu ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.menu) }}
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t{{ form_end(form) }}
</div>
</div>
{% endblock %}", ":menusViews:addMenu.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/menusViews/addMenu.html.twig");
    }
}
