<?php

/* menusViews/listMenus.html.twig */
class __TwigTemplate_a18b1e6b833f47a96bf0e16e5f7b1903d110f9573c77b50a07aaee0a5a232d4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "menusViews/listMenus.html.twig", 1);
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
        $__internal_4d8e461d5fe938000707a004c19b8ca387c500c6f07dcdaf22e42969f927a2c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d8e461d5fe938000707a004c19b8ca387c500c6f07dcdaf22e42969f927a2c1->enter($__internal_4d8e461d5fe938000707a004c19b8ca387c500c6f07dcdaf22e42969f927a2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menusViews/listMenus.html.twig"));

        $__internal_ad059fedff7fb0b253ff30002471e6878008b53b9918019bfb87f4b9c0114aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad059fedff7fb0b253ff30002471e6878008b53b9918019bfb87f4b9c0114aee->enter($__internal_ad059fedff7fb0b253ff30002471e6878008b53b9918019bfb87f4b9c0114aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menusViews/listMenus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d8e461d5fe938000707a004c19b8ca387c500c6f07dcdaf22e42969f927a2c1->leave($__internal_4d8e461d5fe938000707a004c19b8ca387c500c6f07dcdaf22e42969f927a2c1_prof);

        
        $__internal_ad059fedff7fb0b253ff30002471e6878008b53b9918019bfb87f4b9c0114aee->leave($__internal_ad059fedff7fb0b253ff30002471e6878008b53b9918019bfb87f4b9c0114aee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4c375d05c9f34caa5dbf7705bc5b2dd408e8788942956f80d91c97252e99283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c375d05c9f34caa5dbf7705bc5b2dd408e8788942956f80d91c97252e99283->enter($__internal_d4c375d05c9f34caa5dbf7705bc5b2dd408e8788942956f80d91c97252e99283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0ac70ad0db9742153d35f5621edfbee0f030ea456231777bd0d2d00dc8562ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ac70ad0db9742153d35f5621edfbee0f030ea456231777bd0d2d00dc8562ae->enter($__internal_e0ac70ad0db9742153d35f5621edfbee0f030ea456231777bd0d2d00dc8562ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menues"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? $this->getContext($context, "menus")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "jour", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "menu", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editMenu", array("id" => $this->getAttribute($context["menu"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeMenu", array("id" => $this->getAttribute($context["menu"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_e0ac70ad0db9742153d35f5621edfbee0f030ea456231777bd0d2d00dc8562ae->leave($__internal_e0ac70ad0db9742153d35f5621edfbee0f030ea456231777bd0d2d00dc8562ae_prof);

        
        $__internal_d4c375d05c9f34caa5dbf7705bc5b2dd408e8788942956f80d91c97252e99283->leave($__internal_d4c375d05c9f34caa5dbf7705bc5b2dd408e8788942956f80d91c97252e99283_prof);

    }

    public function getTemplateName()
    {
        return "menusViews/listMenus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'menues'|trans}}</h1>
\t<ol>
\t\t{% for menu in menus %}
\t\t\t<li>{{ menu.jour}} {{ menu.menu}} <a href=\"{{ path('editMenu',{'id':menu.id})}}\">Modifier</a> <a href=\"{{ path('removeMenu',{'id':menu.id})}}\">Supprimer</a>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "menusViews/listMenus.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\menusViews\\listMenus.html.twig");
    }
}
