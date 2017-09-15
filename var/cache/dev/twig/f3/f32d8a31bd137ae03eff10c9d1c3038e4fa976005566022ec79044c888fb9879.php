<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_0d10ff10a0e5e4b3d93501aa9f4ffaec72fec04ed8e2180903152c183b3217af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7de23368869b5b29bf413f70f656c3b243193c5a84e8847912ff82deb7ad0f20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de23368869b5b29bf413f70f656c3b243193c5a84e8847912ff82deb7ad0f20->enter($__internal_7de23368869b5b29bf413f70f656c3b243193c5a84e8847912ff82deb7ad0f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_a8304594c5c5c13c0e28007300626d3b26e714a418801ddb79a7ac6cd89cb616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8304594c5c5c13c0e28007300626d3b26e714a418801ddb79a7ac6cd89cb616->enter($__internal_a8304594c5c5c13c0e28007300626d3b26e714a418801ddb79a7ac6cd89cb616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7de23368869b5b29bf413f70f656c3b243193c5a84e8847912ff82deb7ad0f20->leave($__internal_7de23368869b5b29bf413f70f656c3b243193c5a84e8847912ff82deb7ad0f20_prof);

        
        $__internal_a8304594c5c5c13c0e28007300626d3b26e714a418801ddb79a7ac6cd89cb616->leave($__internal_a8304594c5c5c13c0e28007300626d3b26e714a418801ddb79a7ac6cd89cb616_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_01b6b496ed581bcd0e7a7b6a44e73a50d7af9ec91b657a502f079896facd33e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b6b496ed581bcd0e7a7b6a44e73a50d7af9ec91b657a502f079896facd33e5->enter($__internal_01b6b496ed581bcd0e7a7b6a44e73a50d7af9ec91b657a502f079896facd33e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c2dbea8574a96e65fab6ffc7b373b2d547a277ce24ce9acb5daa7f609677dd03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2dbea8574a96e65fab6ffc7b373b2d547a277ce24ce9acb5daa7f609677dd03->enter($__internal_c2dbea8574a96e65fab6ffc7b373b2d547a277ce24ce9acb5daa7f609677dd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_c2dbea8574a96e65fab6ffc7b373b2d547a277ce24ce9acb5daa7f609677dd03->leave($__internal_c2dbea8574a96e65fab6ffc7b373b2d547a277ce24ce9acb5daa7f609677dd03_prof);

        
        $__internal_01b6b496ed581bcd0e7a7b6a44e73a50d7af9ec91b657a502f079896facd33e5->leave($__internal_01b6b496ed581bcd0e7a7b6a44e73a50d7af9ec91b657a502f079896facd33e5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
