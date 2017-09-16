<?php

/* menusViews/listMenus.html.twig */
class __TwigTemplate_985178522c05141ccda5fc071c46a1f7b294a3f7f0bf78e470fb2bd9353fe5de extends Twig_Template
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
        $__internal_7f39b4a20875c6d42a9d25bd7b09cac6ce9c1a16434bbd2a8465015eb62cd565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f39b4a20875c6d42a9d25bd7b09cac6ce9c1a16434bbd2a8465015eb62cd565->enter($__internal_7f39b4a20875c6d42a9d25bd7b09cac6ce9c1a16434bbd2a8465015eb62cd565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menusViews/listMenus.html.twig"));

        $__internal_dd93d1a6a339715d6faf36f24dea06b111360fa0cb3dee8582cc0dcb7e2f75b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd93d1a6a339715d6faf36f24dea06b111360fa0cb3dee8582cc0dcb7e2f75b8->enter($__internal_dd93d1a6a339715d6faf36f24dea06b111360fa0cb3dee8582cc0dcb7e2f75b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menusViews/listMenus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f39b4a20875c6d42a9d25bd7b09cac6ce9c1a16434bbd2a8465015eb62cd565->leave($__internal_7f39b4a20875c6d42a9d25bd7b09cac6ce9c1a16434bbd2a8465015eb62cd565_prof);

        
        $__internal_dd93d1a6a339715d6faf36f24dea06b111360fa0cb3dee8582cc0dcb7e2f75b8->leave($__internal_dd93d1a6a339715d6faf36f24dea06b111360fa0cb3dee8582cc0dcb7e2f75b8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17577ac5e679acce502a26644b83465bbfaddccdf4524b1505392ad63803966f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17577ac5e679acce502a26644b83465bbfaddccdf4524b1505392ad63803966f->enter($__internal_17577ac5e679acce502a26644b83465bbfaddccdf4524b1505392ad63803966f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ecb3e011f5ec4a4c9b4c0e17026ed4ba1ae18e7bf526de141eb388dc5c20ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ecb3e011f5ec4a4c9b4c0e17026ed4ba1ae18e7bf526de141eb388dc5c20ccb->enter($__internal_7ecb3e011f5ec4a4c9b4c0e17026ed4ba1ae18e7bf526de141eb388dc5c20ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ecole", array()), "menus", array()));
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
        
        $__internal_7ecb3e011f5ec4a4c9b4c0e17026ed4ba1ae18e7bf526de141eb388dc5c20ccb->leave($__internal_7ecb3e011f5ec4a4c9b4c0e17026ed4ba1ae18e7bf526de141eb388dc5c20ccb_prof);

        
        $__internal_17577ac5e679acce502a26644b83465bbfaddccdf4524b1505392ad63803966f->leave($__internal_17577ac5e679acce502a26644b83465bbfaddccdf4524b1505392ad63803966f_prof);

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
\t\t{% for menu in app.user.ecole.menus %}
\t\t\t<li>{{ menu.jour}} {{ menu.menu}} <a href=\"{{ path('editMenu',{'id':menu.id})}}\">Modifier</a> <a href=\"{{ path('removeMenu',{'id':menu.id})}}\">Supprimer</a>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "menusViews/listMenus.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/menusViews/listMenus.html.twig");
    }
}
