<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_2fa20bc883573c5f722ae68cf37e51279c633cedb01a472e85edaec68a9913fb extends Twig_Template
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
        $__internal_b92b990b08858c548e1899b54bce2b58f51628a8db5bae1ade2f8ae4c176cb3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b92b990b08858c548e1899b54bce2b58f51628a8db5bae1ade2f8ae4c176cb3a->enter($__internal_b92b990b08858c548e1899b54bce2b58f51628a8db5bae1ade2f8ae4c176cb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_b8f325c1c0f108b5d355e8e67282f5799cae1fea53db2b26fb32b833ab9f925e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f325c1c0f108b5d355e8e67282f5799cae1fea53db2b26fb32b833ab9f925e->enter($__internal_b8f325c1c0f108b5d355e8e67282f5799cae1fea53db2b26fb32b833ab9f925e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_b92b990b08858c548e1899b54bce2b58f51628a8db5bae1ade2f8ae4c176cb3a->leave($__internal_b92b990b08858c548e1899b54bce2b58f51628a8db5bae1ade2f8ae4c176cb3a_prof);

        
        $__internal_b8f325c1c0f108b5d355e8e67282f5799cae1fea53db2b26fb32b833ab9f925e->leave($__internal_b8f325c1c0f108b5d355e8e67282f5799cae1fea53db2b26fb32b833ab9f925e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
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
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
