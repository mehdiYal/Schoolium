<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_a2cc721ae2032a5ae3d414f38791317a38f238fd1f420ef40a9c25e25484c03d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_2d88071bdb8f583b4afe8f049a8767aa9a1cc6f14e78c1fc9120aa7682a625bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d88071bdb8f583b4afe8f049a8767aa9a1cc6f14e78c1fc9120aa7682a625bc->enter($__internal_2d88071bdb8f583b4afe8f049a8767aa9a1cc6f14e78c1fc9120aa7682a625bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_2ddbeaef0593fd836637f184db0c4b480d549fefd55c2ee80669f65815580580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ddbeaef0593fd836637f184db0c4b480d549fefd55c2ee80669f65815580580->enter($__internal_2ddbeaef0593fd836637f184db0c4b480d549fefd55c2ee80669f65815580580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d88071bdb8f583b4afe8f049a8767aa9a1cc6f14e78c1fc9120aa7682a625bc->leave($__internal_2d88071bdb8f583b4afe8f049a8767aa9a1cc6f14e78c1fc9120aa7682a625bc_prof);

        
        $__internal_2ddbeaef0593fd836637f184db0c4b480d549fefd55c2ee80669f65815580580->leave($__internal_2ddbeaef0593fd836637f184db0c4b480d549fefd55c2ee80669f65815580580_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51f1c825ecd87d92f446af827d5be9255e48ec35b77018646b491a8eea6a44c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f1c825ecd87d92f446af827d5be9255e48ec35b77018646b491a8eea6a44c6->enter($__internal_51f1c825ecd87d92f446af827d5be9255e48ec35b77018646b491a8eea6a44c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_862fd99a8ed0571fb17d9907be19032a9beed252da109b8524e56da7af314344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_862fd99a8ed0571fb17d9907be19032a9beed252da109b8524e56da7af314344->enter($__internal_862fd99a8ed0571fb17d9907be19032a9beed252da109b8524e56da7af314344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_862fd99a8ed0571fb17d9907be19032a9beed252da109b8524e56da7af314344->leave($__internal_862fd99a8ed0571fb17d9907be19032a9beed252da109b8524e56da7af314344_prof);

        
        $__internal_51f1c825ecd87d92f446af827d5be9255e48ec35b77018646b491a8eea6a44c6->leave($__internal_51f1c825ecd87d92f446af827d5be9255e48ec35b77018646b491a8eea6a44c6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
