<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_40e33a13ef484892b7a77123c0210d79c254d9862d4bb9dfed7d400045ab3e13 extends Twig_Template
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
        $__internal_cc19a2b48e7b34277666c8cfb024ae2fb7e2a0abbf77193dc6bba939788df1f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc19a2b48e7b34277666c8cfb024ae2fb7e2a0abbf77193dc6bba939788df1f7->enter($__internal_cc19a2b48e7b34277666c8cfb024ae2fb7e2a0abbf77193dc6bba939788df1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_b75b2a556468204ea3d9c64fed314ff8f737164754924cd31720d75b641ae1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b75b2a556468204ea3d9c64fed314ff8f737164754924cd31720d75b641ae1e9->enter($__internal_b75b2a556468204ea3d9c64fed314ff8f737164754924cd31720d75b641ae1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_cc19a2b48e7b34277666c8cfb024ae2fb7e2a0abbf77193dc6bba939788df1f7->leave($__internal_cc19a2b48e7b34277666c8cfb024ae2fb7e2a0abbf77193dc6bba939788df1f7_prof);

        
        $__internal_b75b2a556468204ea3d9c64fed314ff8f737164754924cd31720d75b641ae1e9->leave($__internal_b75b2a556468204ea3d9c64fed314ff8f737164754924cd31720d75b641ae1e9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\Profile\\show_content.html.twig");
    }
}
