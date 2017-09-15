<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_c29a65c49824af0f78f8697889790551707d487d98d35e677d2ad7be78848e5d extends Twig_Template
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
        $__internal_fff21ea2681c88f0a67fffbcb904c56f96bdf035ad5c1495f5e57338a23dcca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff21ea2681c88f0a67fffbcb904c56f96bdf035ad5c1495f5e57338a23dcca6->enter($__internal_fff21ea2681c88f0a67fffbcb904c56f96bdf035ad5c1495f5e57338a23dcca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_b98c118a8aec4b49d0a86fd1e3c3c5cd07790418a3987bdaf3c6f625dd2a8c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b98c118a8aec4b49d0a86fd1e3c3c5cd07790418a3987bdaf3c6f625dd2a8c11->enter($__internal_b98c118a8aec4b49d0a86fd1e3c3c5cd07790418a3987bdaf3c6f625dd2a8c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_fff21ea2681c88f0a67fffbcb904c56f96bdf035ad5c1495f5e57338a23dcca6->leave($__internal_fff21ea2681c88f0a67fffbcb904c56f96bdf035ad5c1495f5e57338a23dcca6_prof);

        
        $__internal_b98c118a8aec4b49d0a86fd1e3c3c5cd07790418a3987bdaf3c6f625dd2a8c11->leave($__internal_b98c118a8aec4b49d0a86fd1e3c3c5cd07790418a3987bdaf3c6f625dd2a8c11_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
", "@FOSUser/Group/show_content.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\Group\\show_content.html.twig");
    }
}
