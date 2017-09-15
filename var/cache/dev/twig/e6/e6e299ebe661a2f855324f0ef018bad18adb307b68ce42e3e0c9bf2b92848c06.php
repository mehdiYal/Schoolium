<?php

/* transportsViews/listTransports.html.twig */
class __TwigTemplate_0de2c9f895dc65e0ea93f52175fbfff251c758a0202a91b2e025018bb41cc615 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "transportsViews/listTransports.html.twig", 1);
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
        $__internal_ce237cee841647a2ff0c285b6473e7f251b973245e7e88df01ed4fd290995827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce237cee841647a2ff0c285b6473e7f251b973245e7e88df01ed4fd290995827->enter($__internal_ce237cee841647a2ff0c285b6473e7f251b973245e7e88df01ed4fd290995827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transportsViews/listTransports.html.twig"));

        $__internal_527ff14b0c1a29764ed7a2b6ac3055917fc3b3007e578ad29764bcf94e38d84a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527ff14b0c1a29764ed7a2b6ac3055917fc3b3007e578ad29764bcf94e38d84a->enter($__internal_527ff14b0c1a29764ed7a2b6ac3055917fc3b3007e578ad29764bcf94e38d84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transportsViews/listTransports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce237cee841647a2ff0c285b6473e7f251b973245e7e88df01ed4fd290995827->leave($__internal_ce237cee841647a2ff0c285b6473e7f251b973245e7e88df01ed4fd290995827_prof);

        
        $__internal_527ff14b0c1a29764ed7a2b6ac3055917fc3b3007e578ad29764bcf94e38d84a->leave($__internal_527ff14b0c1a29764ed7a2b6ac3055917fc3b3007e578ad29764bcf94e38d84a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7594a4dd9ab5ccc0428b3b7eeb5b12ff5de6258b5597f18e1f382a2e9c2a4ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7594a4dd9ab5ccc0428b3b7eeb5b12ff5de6258b5597f18e1f382a2e9c2a4ea0->enter($__internal_7594a4dd9ab5ccc0428b3b7eeb5b12ff5de6258b5597f18e1f382a2e9c2a4ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ad2d1d290991607d4e281cb45ba646d398ebe2b942ee19d38981d365a0ab7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad2d1d290991607d4e281cb45ba646d398ebe2b942ee19d38981d365a0ab7e8->enter($__internal_0ad2d1d290991607d4e281cb45ba646d398ebe2b942ee19d38981d365a0ab7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("lignes"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["transports"] ?? $this->getContext($context, "transports")));
        foreach ($context['_seq'] as $context["_key"] => $context["trans"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "depart", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "trajet", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["trans"], "heureDepart", array()), "h:m"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "capacite", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editTransport", array("id" => $this->getAttribute($context["trans"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeTransport", array("id" => $this->getAttribute($context["trans"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trans'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_0ad2d1d290991607d4e281cb45ba646d398ebe2b942ee19d38981d365a0ab7e8->leave($__internal_0ad2d1d290991607d4e281cb45ba646d398ebe2b942ee19d38981d365a0ab7e8_prof);

        
        $__internal_7594a4dd9ab5ccc0428b3b7eeb5b12ff5de6258b5597f18e1f382a2e9c2a4ea0->leave($__internal_7594a4dd9ab5ccc0428b3b7eeb5b12ff5de6258b5597f18e1f382a2e9c2a4ea0_prof);

    }

    public function getTemplateName()
    {
        return "transportsViews/listTransports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'lignes'|trans}}</h1>
\t<ol>
\t\t{% for trans in transports %}
\t\t\t<li>{{ trans.nom}} {{ trans.depart}} {{ trans.trajet}} {{ trans.heureDepart|date('h:m')}} {{ trans.capacite}} <a href=\"{{ path('editTransport',{'id':trans.id})}}\">Modifier</a> <a href=\"{{ path('removeTransport',{'id':trans.id})}}\">Supprimer</a>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "transportsViews/listTransports.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\transportsViews\\listTransports.html.twig");
    }
}
