<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_131acd46df1361e24437b3c4010f636882d4df20cc59aa8cd9d0e740d42d50e9 extends Twig_Template
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
        $__internal_02431f10b9a62ba1488bc066ce969388a72dfcfef43d19e96f2c55c27e521fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02431f10b9a62ba1488bc066ce969388a72dfcfef43d19e96f2c55c27e521fd8->enter($__internal_02431f10b9a62ba1488bc066ce969388a72dfcfef43d19e96f2c55c27e521fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_f84a369da816c65641b837107a6356233a82b354332d08f5e4b46c25442cbc36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84a369da816c65641b837107a6356233a82b354332d08f5e4b46c25442cbc36->enter($__internal_f84a369da816c65641b837107a6356233a82b354332d08f5e4b46c25442cbc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_02431f10b9a62ba1488bc066ce969388a72dfcfef43d19e96f2c55c27e521fd8->leave($__internal_02431f10b9a62ba1488bc066ce969388a72dfcfef43d19e96f2c55c27e521fd8_prof);

        
        $__internal_f84a369da816c65641b837107a6356233a82b354332d08f5e4b46c25442cbc36->leave($__internal_f84a369da816c65641b837107a6356233a82b354332d08f5e4b46c25442cbc36_prof);

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
", "FOSUserBundle:Profile:show_content.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
