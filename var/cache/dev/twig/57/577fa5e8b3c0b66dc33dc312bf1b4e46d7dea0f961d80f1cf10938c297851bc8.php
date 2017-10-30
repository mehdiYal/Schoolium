<?php

/* anneesViews/addAnnee.html.twig */
class __TwigTemplate_3534c2a607b7237846f50e737369f2ac5f8446aa761802d5243f57e4a7af3f82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "anneesViews/addAnnee.html.twig", 1);
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
        $__internal_49073d2094870daab38a18fdef7ca94b7697fe94067b030eb8a0b5ac1ba11e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49073d2094870daab38a18fdef7ca94b7697fe94067b030eb8a0b5ac1ba11e39->enter($__internal_49073d2094870daab38a18fdef7ca94b7697fe94067b030eb8a0b5ac1ba11e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anneesViews/addAnnee.html.twig"));

        $__internal_56b9dc566f74ea61b99290f4c81e7ebccce3be9f6b228cf4e63c28d9e7babdb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b9dc566f74ea61b99290f4c81e7ebccce3be9f6b228cf4e63c28d9e7babdb0->enter($__internal_56b9dc566f74ea61b99290f4c81e7ebccce3be9f6b228cf4e63c28d9e7babdb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "anneesViews/addAnnee.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49073d2094870daab38a18fdef7ca94b7697fe94067b030eb8a0b5ac1ba11e39->leave($__internal_49073d2094870daab38a18fdef7ca94b7697fe94067b030eb8a0b5ac1ba11e39_prof);

        
        $__internal_56b9dc566f74ea61b99290f4c81e7ebccce3be9f6b228cf4e63c28d9e7babdb0->leave($__internal_56b9dc566f74ea61b99290f4c81e7ebccce3be9f6b228cf4e63c28d9e7babdb0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e51d0814940593ba3946350bd8fe6dd36f4305e1a70259057d04e7b5773ab6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e51d0814940593ba3946350bd8fe6dd36f4305e1a70259057d04e7b5773ab6a->enter($__internal_0e51d0814940593ba3946350bd8fe6dd36f4305e1a70259057d04e7b5773ab6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ed8c91156676202de8bb6a54e5532ee11064248152ff1667103d7faa422cdaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed8c91156676202de8bb6a54e5532ee11064248152ff1667103d7faa422cdaf->enter($__internal_0ed8c91156676202de8bb6a54e5532ee11064248152ff1667103d7faa422cdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("annee"), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "niveau", array()), 'label');
        echo "
\t\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "niveau", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "niveau", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "specialite", array()), 'label');
        echo "
\t\t    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "specialite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "specialite", array()), 'errors');
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
        
        $__internal_0ed8c91156676202de8bb6a54e5532ee11064248152ff1667103d7faa422cdaf->leave($__internal_0ed8c91156676202de8bb6a54e5532ee11064248152ff1667103d7faa422cdaf_prof);

        
        $__internal_0e51d0814940593ba3946350bd8fe6dd36f4305e1a70259057d04e7b5773ab6a->leave($__internal_0e51d0814940593ba3946350bd8fe6dd36f4305e1a70259057d04e7b5773ab6a_prof);

    }

    public function getTemplateName()
    {
        return "anneesViews/addAnnee.html.twig";
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
<h1>{% if edit %}{{'edit'|trans}}{% else %}{{'add'|trans}}{% endif %} {{'annee'|trans}}</h1>
<div class=\"container\">
\t{{ form_start(form) }}
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.nom) }}
\t\t    {{ form_widget(form.nom ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.nom) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.niveau) }}
\t\t    {{ form_widget(form.niveau ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.niveau) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(form.specialite) }}
\t\t    {{ form_widget(form.specialite ,{ 'attr': {'class': 'form-control'} }) }}
\t\t    {{ form_errors(form.specialite) }}
\t\t</div>
\t\t<button type=\"submit\">Valider</button>
\t{{ form_end(form) }}
</div>
</div>
{% endblock %}", "anneesViews/addAnnee.html.twig", "C:\\wamp64\\www\\Schoolium\\app\\Resources\\views\\anneesViews\\addAnnee.html.twig");
    }
}
