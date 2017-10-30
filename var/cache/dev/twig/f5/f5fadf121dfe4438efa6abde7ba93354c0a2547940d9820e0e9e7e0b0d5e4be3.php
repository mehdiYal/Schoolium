<?php

/* enseignantsViews/listClasses.html.twig */
class __TwigTemplate_90a2908c334246f40906650e913acd3166d016714e24053196b6db6ea0d471aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "enseignantsViews/listClasses.html.twig", 1);
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
        $__internal_382eae9895cfd208fdc988db68f6c373b54f1420d5dd35ef7a2e6727724ebffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382eae9895cfd208fdc988db68f6c373b54f1420d5dd35ef7a2e6727724ebffd->enter($__internal_382eae9895cfd208fdc988db68f6c373b54f1420d5dd35ef7a2e6727724ebffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listClasses.html.twig"));

        $__internal_3582fb037eddf6747fb3c73036864f9f9ee61ec9378b99e28ecdda1112b2adea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3582fb037eddf6747fb3c73036864f9f9ee61ec9378b99e28ecdda1112b2adea->enter($__internal_3582fb037eddf6747fb3c73036864f9f9ee61ec9378b99e28ecdda1112b2adea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_382eae9895cfd208fdc988db68f6c373b54f1420d5dd35ef7a2e6727724ebffd->leave($__internal_382eae9895cfd208fdc988db68f6c373b54f1420d5dd35ef7a2e6727724ebffd_prof);

        
        $__internal_3582fb037eddf6747fb3c73036864f9f9ee61ec9378b99e28ecdda1112b2adea->leave($__internal_3582fb037eddf6747fb3c73036864f9f9ee61ec9378b99e28ecdda1112b2adea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d13c32b0e573368bdcc5b83d90ddf0b1993066109a4fc4cd5047455ebf9e844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d13c32b0e573368bdcc5b83d90ddf0b1993066109a4fc4cd5047455ebf9e844->enter($__internal_7d13c32b0e573368bdcc5b83d90ddf0b1993066109a4fc4cd5047455ebf9e844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_029811817b05ae5e12071fca4312bf5d470573ea4aa18a81c1cffc3d8536addf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029811817b05ae5e12071fca4312bf5d470573ea4aa18a81c1cffc3d8536addf->enter($__internal_029811817b05ae5e12071fca4312bf5d470573ea4aa18a81c1cffc3d8536addf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "</h1>
";
        if ($this->env->isDebug()) {
            // line 5
            \Symfony\Component\VarDumper\VarDumper::dump(($context["data"] ?? $this->getContext($context, "data")));
        }
        // line 6
        echo "\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showEnseignant", array("id" => $this->getAttribute($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "enseignant", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.program"), "html", null, true);
        echo "</a>
\t<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("absence_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("absence.manage"), "html", null, true);
        echo "</a>
\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("program_add", array("id" => $this->getAttribute($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "enseignant", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.annual.program"), "html", null, true);
        echo "</a>
\t\t\t
\t<ol>

\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "classes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 13
            echo "\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showEleve", array("idClasse" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()), "idMatiere" => $this->getAttribute($this->getAttribute($context["classe"], "matiere", array()), "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, (((((((($this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "ecole", array()), "nom", array()) . " ") . $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "annee", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "annee", array()), "niveau", array())) . " ") . $this->getAttribute($this->getAttribute($context["classe"], "matiere", array()), "nom", array())), "html", null, true);
            echo "</a>
\t\t\t\t<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showClasse", array("id" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.program"), "html", null, true);
            echo "</a>
\t\t\t\t<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("absence_new", array("id" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("absence.add"), "html", null, true);
            echo "</a>
\t\t\t\t<a href=\"\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message.send"), "html", null, true);
            echo "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
\t</ol>
\t
";
        
        $__internal_029811817b05ae5e12071fca4312bf5d470573ea4aa18a81c1cffc3d8536addf->leave($__internal_029811817b05ae5e12071fca4312bf5d470573ea4aa18a81c1cffc3d8536addf_prof);

        
        $__internal_7d13c32b0e573368bdcc5b83d90ddf0b1993066109a4fc4cd5047455ebf9e844->leave($__internal_7d13c32b0e573368bdcc5b83d90ddf0b1993066109a4fc4cd5047455ebf9e844_prof);

    }

    public function getTemplateName()
    {
        return "enseignantsViews/listClasses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 20,  107 => 17,  101 => 16,  95 => 15,  91 => 14,  86 => 13,  82 => 12,  73 => 8,  67 => 7,  60 => 6,  57 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'teachers'|trans}}</h1>
{% dump(data) %}
\t<a href=\"{{ path('showEnseignant', { 'id': data.enseignant.id}) }}\">{{'global.program'|trans}}</a>
\t<a href=\"{{ path('absence_index')}}\">{{'absence.manage'|trans}}</a>
\t<a href=\"{{path('program_add',{ 'id': data.enseignant.id})}}\">{{'global.annual.program'|trans}}</a>
\t\t\t
\t<ol>

\t\t{% for classe in data.classes %}
\t\t\t<li><a href=\"{{ path('showEleve', { 'idClasse': classe.classe.id, 'idMatiere': classe.matiere.id}) }}\">
\t\t\t\t{{classe.classe.ecole.nom~' '~classe.classe.nom~' '~classe.classe.annee.nom~' '~classe.classe.annee.niveau~' '~classe.matiere.nom}}</a>
\t\t\t\t<a href=\"{{path('showClasse',{ 'id': classe.classe.id})}}\">{{'global.program'|trans}}</a>
\t\t\t\t<a href=\"{{path('absence_new',{ 'id': classe.classe.id})}}\">{{'absence.add'|trans}}</a>
\t\t\t\t<a href=\"\">{{'message.send'|trans}}</a>
\t\t\t</li>
\t\t{% endfor %}

\t</ol>
\t
{% endblock %}", "enseignantsViews/listClasses.html.twig", "C:\\wamp64\\www\\Schoolium\\app\\Resources\\views\\enseignantsViews\\listClasses.html.twig");
    }
}
