<?php

/* :classesViews:listClasses.html.twig */
class __TwigTemplate_4e90bdb109140e24e239a8ff2e661848f77fbdc75d232586e58ba75f0ae91ae4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":classesViews:listClasses.html.twig", 1);
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
        $__internal_31eeb81f9e26d664d432463336b43c8dcf9ac4cdd00ed903ea1324f74738298f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31eeb81f9e26d664d432463336b43c8dcf9ac4cdd00ed903ea1324f74738298f->enter($__internal_31eeb81f9e26d664d432463336b43c8dcf9ac4cdd00ed903ea1324f74738298f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:listClasses.html.twig"));

        $__internal_571220406ce0b87566992599b47c5627e7b72932fd94afa8a3108f0b9da1a833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571220406ce0b87566992599b47c5627e7b72932fd94afa8a3108f0b9da1a833->enter($__internal_571220406ce0b87566992599b47c5627e7b72932fd94afa8a3108f0b9da1a833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":classesViews:listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31eeb81f9e26d664d432463336b43c8dcf9ac4cdd00ed903ea1324f74738298f->leave($__internal_31eeb81f9e26d664d432463336b43c8dcf9ac4cdd00ed903ea1324f74738298f_prof);

        
        $__internal_571220406ce0b87566992599b47c5627e7b72932fd94afa8a3108f0b9da1a833->leave($__internal_571220406ce0b87566992599b47c5627e7b72932fd94afa8a3108f0b9da1a833_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2d193a12c3c3c15e5f84db9b0de7a6156179a61b4ec2cef4041c6963c152845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d193a12c3c3c15e5f84db9b0de7a6156179a61b4ec2cef4041c6963c152845->enter($__internal_e2d193a12c3c3c15e5f84db9b0de7a6156179a61b4ec2cef4041c6963c152845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42dcc8a7689942f08876955cb744bc68294a69b76cdec8139dd752150b6d6d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42dcc8a7689942f08876955cb744bc68294a69b76cdec8139dd752150b6d6d0e->enter($__internal_42dcc8a7689942f08876955cb744bc68294a69b76cdec8139dd752150b6d6d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classe"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classes"] ?? $this->getContext($context, "classes")));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "description", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "annee", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["classe"], "eleves", array())), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editClasse", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeClasse", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_42dcc8a7689942f08876955cb744bc68294a69b76cdec8139dd752150b6d6d0e->leave($__internal_42dcc8a7689942f08876955cb744bc68294a69b76cdec8139dd752150b6d6d0e_prof);

        
        $__internal_e2d193a12c3c3c15e5f84db9b0de7a6156179a61b4ec2cef4041c6963c152845->leave($__internal_e2d193a12c3c3c15e5f84db9b0de7a6156179a61b4ec2cef4041c6963c152845_prof);

    }

    public function getTemplateName()
    {
        return ":classesViews:listClasses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'classe'|trans}}</h1>
\t<ol>
\t\t{% for classe in classes %}
\t\t\t<li>{{ classe.nom}} {{ classe.description}} {{ classe.annee.nom}} {{ classe.eleves|length}} <a href=\"{{ path('editClasse',{'id':classe.id})}}\">Modifier</a> <a href=\"{{ path('removeClasse',{'id':classe.id})}}\">Supprimer</a>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", ":classesViews:listClasses.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources\\views/classesViews/listClasses.html.twig");
    }
}
