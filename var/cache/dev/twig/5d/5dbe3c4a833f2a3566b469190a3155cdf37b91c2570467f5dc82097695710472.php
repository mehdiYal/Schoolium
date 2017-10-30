<?php

/* cours/add.html.twig */
class __TwigTemplate_dc2acffb61950a5ab9b8ccd04990bbee8ca58f562e91415da4aede810f96b446 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cours/add.html.twig", 1);
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
        $__internal_9f5e868209f811987324d579710429d4ebaeece58e7aeb0181ef8d1cfeeacc5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f5e868209f811987324d579710429d4ebaeece58e7aeb0181ef8d1cfeeacc5b->enter($__internal_9f5e868209f811987324d579710429d4ebaeece58e7aeb0181ef8d1cfeeacc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cours/add.html.twig"));

        $__internal_74ec40f3186cd76dbec752b919ec44716c468cc261129d5d755c721eece19db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ec40f3186cd76dbec752b919ec44716c468cc261129d5d755c721eece19db0->enter($__internal_74ec40f3186cd76dbec752b919ec44716c468cc261129d5d755c721eece19db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cours/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f5e868209f811987324d579710429d4ebaeece58e7aeb0181ef8d1cfeeacc5b->leave($__internal_9f5e868209f811987324d579710429d4ebaeece58e7aeb0181ef8d1cfeeacc5b_prof);

        
        $__internal_74ec40f3186cd76dbec752b919ec44716c468cc261129d5d755c721eece19db0->leave($__internal_74ec40f3186cd76dbec752b919ec44716c468cc261129d5d755c721eece19db0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_776b2cf2eac8c7440679c8fc8d9279bb16ef92e6e33e111388cf902170198ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_776b2cf2eac8c7440679c8fc8d9279bb16ef92e6e33e111388cf902170198ce4->enter($__internal_776b2cf2eac8c7440679c8fc8d9279bb16ef92e6e33e111388cf902170198ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46ce28c8e08363ecd795585d4bc354591c7b76214eb9cca8a0466f759fa23474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ce28c8e08363ecd795585d4bc354591c7b76214eb9cca8a0466f759fa23474->enter($__internal_46ce28c8e08363ecd795585d4bc354591c7b76214eb9cca8a0466f759fa23474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">
\t";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'label');
        echo "
\t\t    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'widget');
        echo "
\t\t    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devoir", array()), 'label');
        echo "
\t\t    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devoir", array()), 'widget');
        echo "
\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "devoir", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "support", array()), 'label');
        echo "
\t\t    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "support", array()), 'widget');
        echo "
\t\t    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "support", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annexe", array()), 'label');
        echo "
\t\t    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annexe", array()), 'widget');
        echo "
\t\t    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annexe", array()), 'errors');
        echo "
\t\t</div>
\t\t<input type=\"hidden\" name=\"idClasse\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["idClasse"] ?? $this->getContext($context, "idClasse")), "html", null, true);
        echo "\">
\t\t<input type=\"hidden\" name=\"idMatiere\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["idMatiere"] ?? $this->getContext($context, "idMatiere")), "html", null, true);
        echo "\">
\t\t<button type=\"submit\">Valider</button>
\t";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_46ce28c8e08363ecd795585d4bc354591c7b76214eb9cca8a0466f759fa23474->leave($__internal_46ce28c8e08363ecd795585d4bc354591c7b76214eb9cca8a0466f759fa23474_prof);

        
        $__internal_776b2cf2eac8c7440679c8fc8d9279bb16ef92e6e33e111388cf902170198ce4->leave($__internal_776b2cf2eac8c7440679c8fc8d9279bb16ef92e6e33e111388cf902170198ce4_prof);

    }

    public function getTemplateName()
    {
        return "cours/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 30,  116 => 28,  112 => 27,  107 => 25,  103 => 24,  99 => 23,  93 => 20,  89 => 19,  85 => 18,  79 => 15,  75 => 14,  71 => 13,  65 => 10,  61 => 9,  57 => 8,  52 => 6,  49 => 5,  40 => 4,  11 => 1,);
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
\t{{ form_start(form) }}
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.titre) }}
\t\t    {{ form_widget(form.titre) }}
\t\t    {{ form_errors(form.titre) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.devoir) }}
\t\t    {{ form_widget(form.devoir) }}
\t\t    {{ form_errors(form.devoir) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.support) }}
\t\t    {{ form_widget(form.support) }}
\t\t    {{ form_errors(form.support) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.annexe) }}
\t\t    {{ form_widget(form.annexe) }}
\t\t    {{ form_errors(form.annexe) }}
\t\t</div>
\t\t<input type=\"hidden\" name=\"idClasse\" value=\"{{idClasse}}\">
\t\t<input type=\"hidden\" name=\"idMatiere\" value=\"{{idMatiere}}\">
\t\t<button type=\"submit\">Valider</button>
\t{{ form_end(form) }}
</div>

{% endblock %}", "cours/add.html.twig", "C:\\wamp64\\www\\Schoolium\\app\\Resources\\views\\cours\\add.html.twig");
    }
}
