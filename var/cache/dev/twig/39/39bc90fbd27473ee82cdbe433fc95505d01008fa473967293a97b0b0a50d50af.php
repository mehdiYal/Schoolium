<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_0fafe7d7e232de4605d49e4efc0f6a4ae9cf74ad303a9e6f0ecb0f941466959a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_f06645e7f0811e1d2f0794c8852fad0c1d4684e776eb925db209d4de15d2a9c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f06645e7f0811e1d2f0794c8852fad0c1d4684e776eb925db209d4de15d2a9c4->enter($__internal_f06645e7f0811e1d2f0794c8852fad0c1d4684e776eb925db209d4de15d2a9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_6d25dc94b27190f2eb8f2106f5df26f784917cf40e46bd785ac248a10bd64562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d25dc94b27190f2eb8f2106f5df26f784917cf40e46bd785ac248a10bd64562->enter($__internal_6d25dc94b27190f2eb8f2106f5df26f784917cf40e46bd785ac248a10bd64562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f06645e7f0811e1d2f0794c8852fad0c1d4684e776eb925db209d4de15d2a9c4->leave($__internal_f06645e7f0811e1d2f0794c8852fad0c1d4684e776eb925db209d4de15d2a9c4_prof);

        
        $__internal_6d25dc94b27190f2eb8f2106f5df26f784917cf40e46bd785ac248a10bd64562->leave($__internal_6d25dc94b27190f2eb8f2106f5df26f784917cf40e46bd785ac248a10bd64562_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd82e0412e2ec4d2c276e3fd1e426874678d2a8a585e3bdad348e80cbfe9a861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd82e0412e2ec4d2c276e3fd1e426874678d2a8a585e3bdad348e80cbfe9a861->enter($__internal_bd82e0412e2ec4d2c276e3fd1e426874678d2a8a585e3bdad348e80cbfe9a861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_063abcf69439e72fee1ed295885c0475c378760b231d74c9a302a2568ce1900c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063abcf69439e72fee1ed295885c0475c378760b231d74c9a302a2568ce1900c->enter($__internal_063abcf69439e72fee1ed295885c0475c378760b231d74c9a302a2568ce1900c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_063abcf69439e72fee1ed295885c0475c378760b231d74c9a302a2568ce1900c->leave($__internal_063abcf69439e72fee1ed295885c0475c378760b231d74c9a302a2568ce1900c_prof);

        
        $__internal_bd82e0412e2ec4d2c276e3fd1e426874678d2a8a585e3bdad348e80cbfe9a861->leave($__internal_bd82e0412e2ec4d2c276e3fd1e426874678d2a8a585e3bdad348e80cbfe9a861_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
