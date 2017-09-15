<?php

/* :sallesViews:listSalles.html.twig */
class __TwigTemplate_1b6e8adf9971d4d762af32de18b8c9a82ceb95b1f8b7506d1f2c9e5aeea82396 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":sallesViews:listSalles.html.twig", 1);
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
        $__internal_46555791f708b8191e9cabe18c67d11716fbbfe53dc06eac60e1b1ba99d4a794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46555791f708b8191e9cabe18c67d11716fbbfe53dc06eac60e1b1ba99d4a794->enter($__internal_46555791f708b8191e9cabe18c67d11716fbbfe53dc06eac60e1b1ba99d4a794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:listSalles.html.twig"));

        $__internal_b1c779bc5cbe574028183425e4410c2110869ee7adf0eb290c45854126ba8c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c779bc5cbe574028183425e4410c2110869ee7adf0eb290c45854126ba8c16->enter($__internal_b1c779bc5cbe574028183425e4410c2110869ee7adf0eb290c45854126ba8c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:listSalles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46555791f708b8191e9cabe18c67d11716fbbfe53dc06eac60e1b1ba99d4a794->leave($__internal_46555791f708b8191e9cabe18c67d11716fbbfe53dc06eac60e1b1ba99d4a794_prof);

        
        $__internal_b1c779bc5cbe574028183425e4410c2110869ee7adf0eb290c45854126ba8c16->leave($__internal_b1c779bc5cbe574028183425e4410c2110869ee7adf0eb290c45854126ba8c16_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_51ecb600a2ea5d93bff53c83d7a1465fbcfbbe2e1577131724b6100c82f2b1d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51ecb600a2ea5d93bff53c83d7a1465fbcfbbe2e1577131724b6100c82f2b1d0->enter($__internal_51ecb600a2ea5d93bff53c83d7a1465fbcfbbe2e1577131724b6100c82f2b1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_87def053d246f253c43d66b75445622c0f27f416d9bf71899d155a4f8bc4e72f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87def053d246f253c43d66b75445622c0f27f416d9bf71899d155a4f8bc4e72f->enter($__internal_87def053d246f253c43d66b75445622c0f27f416d9bf71899d155a4f8bc4e72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("salles"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["salles"] ?? $this->getContext($context, "salles")));
        foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "capacite", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "equipement", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editSalle", array("id" => $this->getAttribute($context["salle"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeSalle", array("id" => $this->getAttribute($context["salle"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_87def053d246f253c43d66b75445622c0f27f416d9bf71899d155a4f8bc4e72f->leave($__internal_87def053d246f253c43d66b75445622c0f27f416d9bf71899d155a4f8bc4e72f_prof);

        
        $__internal_51ecb600a2ea5d93bff53c83d7a1465fbcfbbe2e1577131724b6100c82f2b1d0->leave($__internal_51ecb600a2ea5d93bff53c83d7a1465fbcfbbe2e1577131724b6100c82f2b1d0_prof);

    }

    public function getTemplateName()
    {
        return ":sallesViews:listSalles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'salles'|trans}}</h1>
\t<ol>
\t\t{% for salle in salles %}
\t\t\t<li>{{ salle.nom}} {{ salle.capacite}} {{ salle.equipement}} <a href=\"{{ path('editSalle',{'id':salle.id})}}\">Modifier</a> <a href=\"{{ path('removeSalle',{'id':salle.id})}}\">Supprimer</a>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", ":sallesViews:listSalles.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources\\views/sallesViews/listSalles.html.twig");
    }
}
