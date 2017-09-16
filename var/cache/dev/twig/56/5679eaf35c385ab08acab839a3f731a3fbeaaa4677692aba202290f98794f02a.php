<?php

/* :adminsViews:listAdmins.html.twig */
class __TwigTemplate_eff46449d66b2c9dee34ffcdff53c0b6b9e2dd47b634cd49f3e6b46291abcde9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":adminsViews:listAdmins.html.twig", 1);
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
        $__internal_e18807132a6420a7b3d902218b35b134edd2f72cc2020084a06433af11e14e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18807132a6420a7b3d902218b35b134edd2f72cc2020084a06433af11e14e61->enter($__internal_e18807132a6420a7b3d902218b35b134edd2f72cc2020084a06433af11e14e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:listAdmins.html.twig"));

        $__internal_09f3cb9e1703887ac0ec09b7e74dccb846f39b0349e52537b495ccc8e4737d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f3cb9e1703887ac0ec09b7e74dccb846f39b0349e52537b495ccc8e4737d33->enter($__internal_09f3cb9e1703887ac0ec09b7e74dccb846f39b0349e52537b495ccc8e4737d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:listAdmins.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e18807132a6420a7b3d902218b35b134edd2f72cc2020084a06433af11e14e61->leave($__internal_e18807132a6420a7b3d902218b35b134edd2f72cc2020084a06433af11e14e61_prof);

        
        $__internal_09f3cb9e1703887ac0ec09b7e74dccb846f39b0349e52537b495ccc8e4737d33->leave($__internal_09f3cb9e1703887ac0ec09b7e74dccb846f39b0349e52537b495ccc8e4737d33_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38746cbea561a3215cc699f2cb262af01c2061f7409b17fa4f56a079cd58d10f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38746cbea561a3215cc699f2cb262af01c2061f7409b17fa4f56a079cd58d10f->enter($__internal_38746cbea561a3215cc699f2cb262af01c2061f7409b17fa4f56a079cd58d10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2a4a208fdcda69431d6c45b0d5f9694dfc7a5e697361967c5f36e2a31801128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a4a208fdcda69431d6c45b0d5f9694dfc7a5e697361967c5f36e2a31801128->enter($__internal_f2a4a208fdcda69431d6c45b0d5f9694dfc7a5e697361967c5f36e2a31801128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) ? $context["admins"] : $this->getContext($context, "admins")));
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
        
        $__internal_f2a4a208fdcda69431d6c45b0d5f9694dfc7a5e697361967c5f36e2a31801128->leave($__internal_f2a4a208fdcda69431d6c45b0d5f9694dfc7a5e697361967c5f36e2a31801128_prof);

        
        $__internal_38746cbea561a3215cc699f2cb262af01c2061f7409b17fa4f56a079cd58d10f->leave($__internal_38746cbea561a3215cc699f2cb262af01c2061f7409b17fa4f56a079cd58d10f_prof);

    }

    public function getTemplateName()
    {
        return ":adminsViews:listAdmins.html.twig";
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
{% endblock %}", ":adminsViews:listAdmins.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/adminsViews/listAdmins.html.twig");
    }
}
