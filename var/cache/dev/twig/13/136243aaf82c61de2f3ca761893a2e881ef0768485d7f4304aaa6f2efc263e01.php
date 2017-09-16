<?php

/* :sallesViews:listSalles.html.twig */
class __TwigTemplate_2685e871f4532b092a31cb422f61b7134dfd967592325234a0e771c5e34f8e77 extends Twig_Template
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
        $__internal_7f4008be38bc41c322eea289b951e900d93caef5cb078dc19b709174c53445de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4008be38bc41c322eea289b951e900d93caef5cb078dc19b709174c53445de->enter($__internal_7f4008be38bc41c322eea289b951e900d93caef5cb078dc19b709174c53445de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:listSalles.html.twig"));

        $__internal_005ec3dae7443b1d9e382d1162a9c75adc25b8ef648b20446c900cb520935004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005ec3dae7443b1d9e382d1162a9c75adc25b8ef648b20446c900cb520935004->enter($__internal_005ec3dae7443b1d9e382d1162a9c75adc25b8ef648b20446c900cb520935004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sallesViews:listSalles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f4008be38bc41c322eea289b951e900d93caef5cb078dc19b709174c53445de->leave($__internal_7f4008be38bc41c322eea289b951e900d93caef5cb078dc19b709174c53445de_prof);

        
        $__internal_005ec3dae7443b1d9e382d1162a9c75adc25b8ef648b20446c900cb520935004->leave($__internal_005ec3dae7443b1d9e382d1162a9c75adc25b8ef648b20446c900cb520935004_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_73937b8a1637b411f3d402a680c20ed8abb546a0686f439740340d465dd5fee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73937b8a1637b411f3d402a680c20ed8abb546a0686f439740340d465dd5fee7->enter($__internal_73937b8a1637b411f3d402a680c20ed8abb546a0686f439740340d465dd5fee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f95c3c36872716032327c79342e442053441d141d7dae9f47c20219423b0bd64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95c3c36872716032327c79342e442053441d141d7dae9f47c20219423b0bd64->enter($__internal_f95c3c36872716032327c79342e442053441d141d7dae9f47c20219423b0bd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["salles"]) ? $context["salles"] : $this->getContext($context, "salles")));
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
        
        $__internal_f95c3c36872716032327c79342e442053441d141d7dae9f47c20219423b0bd64->leave($__internal_f95c3c36872716032327c79342e442053441d141d7dae9f47c20219423b0bd64_prof);

        
        $__internal_73937b8a1637b411f3d402a680c20ed8abb546a0686f439740340d465dd5fee7->leave($__internal_73937b8a1637b411f3d402a680c20ed8abb546a0686f439740340d465dd5fee7_prof);

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
{% endblock %}", ":sallesViews:listSalles.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/sallesViews/listSalles.html.twig");
    }
}
