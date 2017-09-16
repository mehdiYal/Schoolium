<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_88a65bf24b5f4d7dc1acd46d02f37f6f793e5b6c0c20d5c05f43cb0dcbaddfe4 extends Twig_Template
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
        $__internal_1ae1fd64dfb5b12addd40f3d7d24254b60347a04c3d47ef3964bc8b40e05c758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae1fd64dfb5b12addd40f3d7d24254b60347a04c3d47ef3964bc8b40e05c758->enter($__internal_1ae1fd64dfb5b12addd40f3d7d24254b60347a04c3d47ef3964bc8b40e05c758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_4a218e133b9147541441c99b690ee09a1a3a9b87633f6da6fed8b06a9231278b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a218e133b9147541441c99b690ee09a1a3a9b87633f6da6fed8b06a9231278b->enter($__internal_4a218e133b9147541441c99b690ee09a1a3a9b87633f6da6fed8b06a9231278b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_1ae1fd64dfb5b12addd40f3d7d24254b60347a04c3d47ef3964bc8b40e05c758->leave($__internal_1ae1fd64dfb5b12addd40f3d7d24254b60347a04c3d47ef3964bc8b40e05c758_prof);

        
        $__internal_4a218e133b9147541441c99b690ee09a1a3a9b87633f6da6fed8b06a9231278b->leave($__internal_4a218e133b9147541441c99b690ee09a1a3a9b87633f6da6fed8b06a9231278b_prof);

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
", "FOSUserBundle:Group:show_content.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
