<?php

/* :menusViews:listMenus.html.twig */
class __TwigTemplate_4691fdb056ba570498a3c455c256b7d13683873fccf42f3bff7dc7b98175f109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":menusViews:listMenus.html.twig", 1);
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
        $__internal_a97a8bac5bcfb6eb37fe840644c37b0f8d7aad9ce28b7c9285cb9041d4faeb74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97a8bac5bcfb6eb37fe840644c37b0f8d7aad9ce28b7c9285cb9041d4faeb74->enter($__internal_a97a8bac5bcfb6eb37fe840644c37b0f8d7aad9ce28b7c9285cb9041d4faeb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:listMenus.html.twig"));

        $__internal_18ec297ffcabc6ead6657adc56173ab159a28e48e26cd9813ffc85eb9c11bff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ec297ffcabc6ead6657adc56173ab159a28e48e26cd9813ffc85eb9c11bff7->enter($__internal_18ec297ffcabc6ead6657adc56173ab159a28e48e26cd9813ffc85eb9c11bff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menusViews:listMenus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a97a8bac5bcfb6eb37fe840644c37b0f8d7aad9ce28b7c9285cb9041d4faeb74->leave($__internal_a97a8bac5bcfb6eb37fe840644c37b0f8d7aad9ce28b7c9285cb9041d4faeb74_prof);

        
        $__internal_18ec297ffcabc6ead6657adc56173ab159a28e48e26cd9813ffc85eb9c11bff7->leave($__internal_18ec297ffcabc6ead6657adc56173ab159a28e48e26cd9813ffc85eb9c11bff7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c60b7dc0d54517622a8e2fab26777f3fbe752943fbcec837f8896bb200a3f170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c60b7dc0d54517622a8e2fab26777f3fbe752943fbcec837f8896bb200a3f170->enter($__internal_c60b7dc0d54517622a8e2fab26777f3fbe752943fbcec837f8896bb200a3f170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_566f7392d37a18a9dd4ce8ef727e5ccd65971ac01a9ca48fcd33e87d92e52d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566f7392d37a18a9dd4ce8ef727e5ccd65971ac01a9ca48fcd33e87d92e52d04->enter($__internal_566f7392d37a18a9dd4ce8ef727e5ccd65971ac01a9ca48fcd33e87d92e52d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
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
        
        $__internal_566f7392d37a18a9dd4ce8ef727e5ccd65971ac01a9ca48fcd33e87d92e52d04->leave($__internal_566f7392d37a18a9dd4ce8ef727e5ccd65971ac01a9ca48fcd33e87d92e52d04_prof);

        
        $__internal_c60b7dc0d54517622a8e2fab26777f3fbe752943fbcec837f8896bb200a3f170->leave($__internal_c60b7dc0d54517622a8e2fab26777f3fbe752943fbcec837f8896bb200a3f170_prof);

    }

    public function getTemplateName()
    {
        return ":menusViews:listMenus.html.twig";
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
{% endblock %}", ":menusViews:listMenus.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/menusViews/listMenus.html.twig");
    }
}
