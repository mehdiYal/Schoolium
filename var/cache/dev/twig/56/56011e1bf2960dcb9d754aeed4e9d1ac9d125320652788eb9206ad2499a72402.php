<?php

/* adminsViews/listAdmins.html.twig */
class __TwigTemplate_c744230bf41c585b7a5ea869e889e32592f42efc2c955e37bc53fc3619b6b239 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "adminsViews/listAdmins.html.twig", 1);
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
        $__internal_a7f392279ec67ca184a5c4157780b466ecb91ab7d1ec9def89fa6a3107a02809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f392279ec67ca184a5c4157780b466ecb91ab7d1ec9def89fa6a3107a02809->enter($__internal_a7f392279ec67ca184a5c4157780b466ecb91ab7d1ec9def89fa6a3107a02809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/listAdmins.html.twig"));

        $__internal_7d1623b14e33a636c8031d67209b3551a905e6539c6bd6ae77c437c5b9bbacdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1623b14e33a636c8031d67209b3551a905e6539c6bd6ae77c437c5b9bbacdf->enter($__internal_7d1623b14e33a636c8031d67209b3551a905e6539c6bd6ae77c437c5b9bbacdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/listAdmins.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7f392279ec67ca184a5c4157780b466ecb91ab7d1ec9def89fa6a3107a02809->leave($__internal_a7f392279ec67ca184a5c4157780b466ecb91ab7d1ec9def89fa6a3107a02809_prof);

        
        $__internal_7d1623b14e33a636c8031d67209b3551a905e6539c6bd6ae77c437c5b9bbacdf->leave($__internal_7d1623b14e33a636c8031d67209b3551a905e6539c6bd6ae77c437c5b9bbacdf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_79986af90b666700f2d7c2b4f7034ceb6d49ec8ddc53dfa60577530fa0fb068f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79986af90b666700f2d7c2b4f7034ceb6d49ec8ddc53dfa60577530fa0fb068f->enter($__internal_79986af90b666700f2d7c2b4f7034ceb6d49ec8ddc53dfa60577530fa0fb068f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d05a84a9b7455ecb6544ee12c4a7657e1a89fd506f35fd0e1d5a5c49300bfa92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05a84a9b7455ecb6544ee12c4a7657e1a89fd506f35fd0e1d5a5c49300bfa92->enter($__internal_d05a84a9b7455ecb6544ee12c4a7657e1a89fd506f35fd0e1d5a5c49300bfa92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admins"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["admins"] ?? $this->getContext($context, "admins")));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 8
            echo "\t\t\t";
            if (($this->getAttribute($context["admin"], "typeUser", array()) != "SuperAdmin")) {
                // line 9
                echo "\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "prenom", array()), "html", null, true);
                echo " 
\t\t\t\t\t<a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editAdmin", array("id" => $this->getAttribute($context["admin"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
                echo "</a>
\t\t\t\t\t<a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileAdmin", array("id" => $this->getAttribute($context["admin"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
                echo "</a> 
\t\t\t\t\t<a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeAdmin", array("id" => $this->getAttribute($context["admin"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
                echo "</a>
\t\t\t\t\t<a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("schoolAdmin", array("id" => $this->getAttribute($context["admin"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("school"), "html", null, true);
                echo "</a> 
\t\t\t\t</li>
\t\t\t";
            }
            // line 16
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t</ol>
\t
";
        
        $__internal_d05a84a9b7455ecb6544ee12c4a7657e1a89fd506f35fd0e1d5a5c49300bfa92->leave($__internal_d05a84a9b7455ecb6544ee12c4a7657e1a89fd506f35fd0e1d5a5c49300bfa92_prof);

        
        $__internal_79986af90b666700f2d7c2b4f7034ceb6d49ec8ddc53dfa60577530fa0fb068f->leave($__internal_79986af90b666700f2d7c2b4f7034ceb6d49ec8ddc53dfa60577530fa0fb068f_prof);

    }

    public function getTemplateName()
    {
        return "adminsViews/listAdmins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 17,  99 => 16,  91 => 13,  85 => 12,  79 => 11,  73 => 10,  66 => 9,  63 => 8,  59 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

<h1>{{'list'|trans}} {{'admins'|trans}}</h1>
\t<ol>
\t\t{% for admin in admins %}
\t\t\t{% if admin.typeUser != 'SuperAdmin' %}
\t\t\t\t<li>{{ admin.nom}} {{ admin.prenom}} 
\t\t\t\t\t<a href=\"{{ path('editAdmin',{'id':admin.id})}}\">{{'edit'|trans}}</a>
\t\t\t\t\t<a href=\"{{ path('profileAdmin',{'id':admin.id})}}\">{{'profile'|trans}}</a> 
\t\t\t\t\t<a href=\"{{ path('removeAdmin',{'id':admin.id})}}\">{{'delete'|trans}}</a>
\t\t\t\t\t<a href=\"{{ path('schoolAdmin',{'id':admin.id})}}\">{{'school'|trans}}</a> 
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "adminsViews/listAdmins.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\adminsViews\\listAdmins.html.twig");
    }
}
