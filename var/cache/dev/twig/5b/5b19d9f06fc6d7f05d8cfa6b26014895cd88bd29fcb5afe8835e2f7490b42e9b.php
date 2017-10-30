<?php

/* absence/add.html.twig */
class __TwigTemplate_0b4948f5498c08137228d00d660f17818cee1655d2f617421d7418b7b1b3a3f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "absence/add.html.twig", 1);
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
        $__internal_d977c561a3f47670e03eea4e476e7ed4e9114ffd3cb252d22226fe3fedbfc680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d977c561a3f47670e03eea4e476e7ed4e9114ffd3cb252d22226fe3fedbfc680->enter($__internal_d977c561a3f47670e03eea4e476e7ed4e9114ffd3cb252d22226fe3fedbfc680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "absence/add.html.twig"));

        $__internal_0dbe68604c6c97b1c8c25a3a0a293d2eacc070fa32ede23b61269dd51ebf8938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbe68604c6c97b1c8c25a3a0a293d2eacc070fa32ede23b61269dd51ebf8938->enter($__internal_0dbe68604c6c97b1c8c25a3a0a293d2eacc070fa32ede23b61269dd51ebf8938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "absence/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d977c561a3f47670e03eea4e476e7ed4e9114ffd3cb252d22226fe3fedbfc680->leave($__internal_d977c561a3f47670e03eea4e476e7ed4e9114ffd3cb252d22226fe3fedbfc680_prof);

        
        $__internal_0dbe68604c6c97b1c8c25a3a0a293d2eacc070fa32ede23b61269dd51ebf8938->leave($__internal_0dbe68604c6c97b1c8c25a3a0a293d2eacc070fa32ede23b61269dd51ebf8938_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ea268219e659df60acd1263a8257712a42164c5c24a7852cbffc68c5d80acaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea268219e659df60acd1263a8257712a42164c5c24a7852cbffc68c5d80acaf->enter($__internal_8ea268219e659df60acd1263a8257712a42164c5c24a7852cbffc68c5d80acaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a920d760d2bc00a9e9a9ccf3be1bac415fbda57bfab2ab4a719a0c7f2d685d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a920d760d2bc00a9e9a9ccf3be1bac415fbda57bfab2ab4a719a0c7f2d685d59->enter($__internal_a920d760d2bc00a9e9a9ccf3be1bac415fbda57bfab2ab4a719a0c7f2d685d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
\t";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "eleve", array()), 'label');
        echo "
\t\t    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "eleve", array()), 'widget');
        echo "
\t\t    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "eleve", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'label');
        echo "
\t\t    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
\t\t    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "commentaire", array()), 'label');
        echo "
\t\t    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "commentaire", array()), 'widget');
        echo "
\t\t    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
\t\t</div>
\t\t
\t\t<button type=\"submit\">Chercher</button>
\t";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_a920d760d2bc00a9e9a9ccf3be1bac415fbda57bfab2ab4a719a0c7f2d685d59->leave($__internal_a920d760d2bc00a9e9a9ccf3be1bac415fbda57bfab2ab4a719a0c7f2d685d59_prof);

        
        $__internal_8ea268219e659df60acd1263a8257712a42164c5c24a7852cbffc68c5d80acaf->leave($__internal_8ea268219e659df60acd1263a8257712a42164c5c24a7852cbffc68c5d80acaf_prof);

    }

    public function getTemplateName()
    {
        return "absence/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 23,  93 => 19,  89 => 18,  85 => 17,  79 => 14,  75 => 13,  71 => 12,  65 => 9,  61 => 8,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t{{ form_label(form.eleve) }}
\t\t    {{ form_widget(form.eleve) }}
\t\t    {{ form_errors(form.eleve) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.date) }}
\t\t    {{ form_widget(form.date) }}
\t\t    {{ form_errors(form.date) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.commentaire) }}
\t\t    {{ form_widget(form.commentaire) }}
\t\t    {{ form_errors(form.commentaire) }}
\t\t</div>
\t\t
\t\t<button type=\"submit\">Chercher</button>
\t{{ form_end(form) }}
</div>

{% endblock %}", "absence/add.html.twig", "C:\\wamp64\\www\\Schoolium\\app\\Resources\\views\\absence\\add.html.twig");
    }
}
