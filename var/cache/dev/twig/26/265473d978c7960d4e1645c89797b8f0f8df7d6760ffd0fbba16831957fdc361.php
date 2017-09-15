<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_91f21fe98e56a2179ff71b260100b32d91fe3fcf667f4be31affaf37ab45bd13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd3e66d3445a39add753bf00073e03ff98eb8d2c27dc32bfa46ef1342adce359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd3e66d3445a39add753bf00073e03ff98eb8d2c27dc32bfa46ef1342adce359->enter($__internal_bd3e66d3445a39add753bf00073e03ff98eb8d2c27dc32bfa46ef1342adce359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_7043ce7b7d0b2c3714efedba26721dbc4b726703b6b7a828c6c2723ac57b88e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7043ce7b7d0b2c3714efedba26721dbc4b726703b6b7a828c6c2723ac57b88e6->enter($__internal_7043ce7b7d0b2c3714efedba26721dbc4b726703b6b7a828c6c2723ac57b88e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_bd3e66d3445a39add753bf00073e03ff98eb8d2c27dc32bfa46ef1342adce359->leave($__internal_bd3e66d3445a39add753bf00073e03ff98eb8d2c27dc32bfa46ef1342adce359_prof);

        
        $__internal_7043ce7b7d0b2c3714efedba26721dbc4b726703b6b7a828c6c2723ac57b88e6->leave($__internal_7043ce7b7d0b2c3714efedba26721dbc4b726703b6b7a828c6c2723ac57b88e6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
