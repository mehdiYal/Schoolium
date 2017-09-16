<?php

/* schoolsViews/listSchools.html.twig */
class __TwigTemplate_5d8d404ea4870075559bd45882f945368e61f3c2ed6262eb6b1e16f944efe606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "schoolsViews/listSchools.html.twig", 1);
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
        $__internal_afead7f726691d3a9ed7a671d85c020ac8dfd2e0071e521499dd978101ff381f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afead7f726691d3a9ed7a671d85c020ac8dfd2e0071e521499dd978101ff381f->enter($__internal_afead7f726691d3a9ed7a671d85c020ac8dfd2e0071e521499dd978101ff381f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "schoolsViews/listSchools.html.twig"));

        $__internal_291958c2fe39f38c2f3ec7cfeca05c89f7f0022a9f974e02ad102f050cecb75e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291958c2fe39f38c2f3ec7cfeca05c89f7f0022a9f974e02ad102f050cecb75e->enter($__internal_291958c2fe39f38c2f3ec7cfeca05c89f7f0022a9f974e02ad102f050cecb75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "schoolsViews/listSchools.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afead7f726691d3a9ed7a671d85c020ac8dfd2e0071e521499dd978101ff381f->leave($__internal_afead7f726691d3a9ed7a671d85c020ac8dfd2e0071e521499dd978101ff381f_prof);

        
        $__internal_291958c2fe39f38c2f3ec7cfeca05c89f7f0022a9f974e02ad102f050cecb75e->leave($__internal_291958c2fe39f38c2f3ec7cfeca05c89f7f0022a9f974e02ad102f050cecb75e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3f4897d767e70492389f9c16db55717a6863a934560b13f5b233a52001ddf27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f4897d767e70492389f9c16db55717a6863a934560b13f5b233a52001ddf27->enter($__internal_c3f4897d767e70492389f9c16db55717a6863a934560b13f5b233a52001ddf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb2d8a8f4d247259807de1e88decfa26532703b7725febf714ddfdf642d812ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb2d8a8f4d247259807de1e88decfa26532703b7725febf714ddfdf642d812ba->enter($__internal_eb2d8a8f4d247259807de1e88decfa26532703b7725febf714ddfdf642d812ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("schools"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ecoles"] ?? $this->getContext($context, "ecoles")));
        foreach ($context['_seq'] as $context["_key"] => $context["ecole"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecole"], "ville", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileSchool", array("id" => $this->getAttribute($context["ecole"], "id", array()))), "html", null, true);
            echo "\">Profile</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ecole'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_eb2d8a8f4d247259807de1e88decfa26532703b7725febf714ddfdf642d812ba->leave($__internal_eb2d8a8f4d247259807de1e88decfa26532703b7725febf714ddfdf642d812ba_prof);

        
        $__internal_c3f4897d767e70492389f9c16db55717a6863a934560b13f5b233a52001ddf27->leave($__internal_c3f4897d767e70492389f9c16db55717a6863a934560b13f5b233a52001ddf27_prof);

    }

    public function getTemplateName()
    {
        return "schoolsViews/listSchools.html.twig";
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
<h1>{{'list'|trans}} {{'schools'|trans}}</h1>
\t<ol>
\t\t{% for ecole in ecoles %}
\t\t\t<li>{{ ecole.nom}} {{ ecole.ville}} <a href=\"{{ path('editSchool',{'id':ecole.id})}}\">Modifier</a> <a href=\"{{ path('removeSchool',{'id':ecole.id})}}\">Supprimer</a> <a href=\"{{ path('profileSchool',{'id':ecole.id})}}\">Profile</a></li>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "schoolsViews/listSchools.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/schoolsViews/listSchools.html.twig");
    }
}
