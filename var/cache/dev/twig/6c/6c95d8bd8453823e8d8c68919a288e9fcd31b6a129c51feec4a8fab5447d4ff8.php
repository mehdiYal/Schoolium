<?php

/* :transportsViews:listTransports.html.twig */
class __TwigTemplate_632db5c5d7be6616116f518fe72ca2136187a09f9fc8f3c1be742bf51c72c1d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":transportsViews:listTransports.html.twig", 1);
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
        $__internal_6ecef978744069ff257cebff4822e4bdce8a49f6fbee3b0d38a7f4cb24318725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ecef978744069ff257cebff4822e4bdce8a49f6fbee3b0d38a7f4cb24318725->enter($__internal_6ecef978744069ff257cebff4822e4bdce8a49f6fbee3b0d38a7f4cb24318725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transportsViews:listTransports.html.twig"));

        $__internal_b9051266db7db839ff6d09162905642089dc3e0e20aefd37c9ddf39925aa6f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9051266db7db839ff6d09162905642089dc3e0e20aefd37c9ddf39925aa6f86->enter($__internal_b9051266db7db839ff6d09162905642089dc3e0e20aefd37c9ddf39925aa6f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transportsViews:listTransports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ecef978744069ff257cebff4822e4bdce8a49f6fbee3b0d38a7f4cb24318725->leave($__internal_6ecef978744069ff257cebff4822e4bdce8a49f6fbee3b0d38a7f4cb24318725_prof);

        
        $__internal_b9051266db7db839ff6d09162905642089dc3e0e20aefd37c9ddf39925aa6f86->leave($__internal_b9051266db7db839ff6d09162905642089dc3e0e20aefd37c9ddf39925aa6f86_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_26eaa597a829e9b04ac3cabec8acd0fe4952eb9b0ede50a7993f4b6fd3187f61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26eaa597a829e9b04ac3cabec8acd0fe4952eb9b0ede50a7993f4b6fd3187f61->enter($__internal_26eaa597a829e9b04ac3cabec8acd0fe4952eb9b0ede50a7993f4b6fd3187f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e43d5eeab414522ab852e6a44105548e5c4c0bea6021e38276aa34c1ddea0ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e43d5eeab414522ab852e6a44105548e5c4c0bea6021e38276aa34c1ddea0ac->enter($__internal_5e43d5eeab414522ab852e6a44105548e5c4c0bea6021e38276aa34c1ddea0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["transports"]) ? $context["transports"] : $this->getContext($context, "transports")));
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
        
        $__internal_5e43d5eeab414522ab852e6a44105548e5c4c0bea6021e38276aa34c1ddea0ac->leave($__internal_5e43d5eeab414522ab852e6a44105548e5c4c0bea6021e38276aa34c1ddea0ac_prof);

        
        $__internal_26eaa597a829e9b04ac3cabec8acd0fe4952eb9b0ede50a7993f4b6fd3187f61->leave($__internal_26eaa597a829e9b04ac3cabec8acd0fe4952eb9b0ede50a7993f4b6fd3187f61_prof);

    }

    public function getTemplateName()
    {
        return ":transportsViews:listTransports.html.twig";
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
{% endblock %}", ":transportsViews:listTransports.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/transportsViews/listTransports.html.twig");
    }
}
