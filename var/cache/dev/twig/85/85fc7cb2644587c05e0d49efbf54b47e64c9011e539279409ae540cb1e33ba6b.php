<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d062b445c20abe69baf6a85aa7c9daef6e66deb746c21301a07d6ed8823cdc84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_17520ba251bfbaaea753aa206aa9ae9d1a6bc411041356f0e4d2025d8aabe16a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17520ba251bfbaaea753aa206aa9ae9d1a6bc411041356f0e4d2025d8aabe16a->enter($__internal_17520ba251bfbaaea753aa206aa9ae9d1a6bc411041356f0e4d2025d8aabe16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_037ef1410042341a3dff4a9808a233b431c9c961d8ab4b2f198a83566e22eebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037ef1410042341a3dff4a9808a233b431c9c961d8ab4b2f198a83566e22eebf->enter($__internal_037ef1410042341a3dff4a9808a233b431c9c961d8ab4b2f198a83566e22eebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17520ba251bfbaaea753aa206aa9ae9d1a6bc411041356f0e4d2025d8aabe16a->leave($__internal_17520ba251bfbaaea753aa206aa9ae9d1a6bc411041356f0e4d2025d8aabe16a_prof);

        
        $__internal_037ef1410042341a3dff4a9808a233b431c9c961d8ab4b2f198a83566e22eebf->leave($__internal_037ef1410042341a3dff4a9808a233b431c9c961d8ab4b2f198a83566e22eebf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae9bf0691eee7be83e9ca451d7d24fdbb3e501e9c3acc119191e36da4b1aa012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9bf0691eee7be83e9ca451d7d24fdbb3e501e9c3acc119191e36da4b1aa012->enter($__internal_ae9bf0691eee7be83e9ca451d7d24fdbb3e501e9c3acc119191e36da4b1aa012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_426609e1d01dc5111b865a3c581114186b455cd3572822e6b561eb9ea58b9781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426609e1d01dc5111b865a3c581114186b455cd3572822e6b561eb9ea58b9781->enter($__internal_426609e1d01dc5111b865a3c581114186b455cd3572822e6b561eb9ea58b9781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_426609e1d01dc5111b865a3c581114186b455cd3572822e6b561eb9ea58b9781->leave($__internal_426609e1d01dc5111b865a3c581114186b455cd3572822e6b561eb9ea58b9781_prof);

        
        $__internal_ae9bf0691eee7be83e9ca451d7d24fdbb3e501e9c3acc119191e36da4b1aa012->leave($__internal_ae9bf0691eee7be83e9ca451d7d24fdbb3e501e9c3acc119191e36da4b1aa012_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
