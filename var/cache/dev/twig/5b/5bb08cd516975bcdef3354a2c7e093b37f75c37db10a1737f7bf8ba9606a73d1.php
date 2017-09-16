<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_4129159651bf9450ebe7c10965668cc59a49e119d4444f6708463f8175e90f82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_b42854ec90525621d98a45180ea730b9d63ebb0dda2421c0cde5533579036684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b42854ec90525621d98a45180ea730b9d63ebb0dda2421c0cde5533579036684->enter($__internal_b42854ec90525621d98a45180ea730b9d63ebb0dda2421c0cde5533579036684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_3545205969b9d0bacdcefabb21322af1c37641f7878b97742ece4d0fe221535f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3545205969b9d0bacdcefabb21322af1c37641f7878b97742ece4d0fe221535f->enter($__internal_3545205969b9d0bacdcefabb21322af1c37641f7878b97742ece4d0fe221535f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b42854ec90525621d98a45180ea730b9d63ebb0dda2421c0cde5533579036684->leave($__internal_b42854ec90525621d98a45180ea730b9d63ebb0dda2421c0cde5533579036684_prof);

        
        $__internal_3545205969b9d0bacdcefabb21322af1c37641f7878b97742ece4d0fe221535f->leave($__internal_3545205969b9d0bacdcefabb21322af1c37641f7878b97742ece4d0fe221535f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca1a87604b61822d8423d1bb0bebfa8a6f60d4a5fc6b606a15ef1575dec2ffc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca1a87604b61822d8423d1bb0bebfa8a6f60d4a5fc6b606a15ef1575dec2ffc8->enter($__internal_ca1a87604b61822d8423d1bb0bebfa8a6f60d4a5fc6b606a15ef1575dec2ffc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6d9293737277203df16675a9bb4376ca50fcccea24c107daa534e25cb1290f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9293737277203df16675a9bb4376ca50fcccea24c107daa534e25cb1290f7c->enter($__internal_6d9293737277203df16675a9bb4376ca50fcccea24c107daa534e25cb1290f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_6d9293737277203df16675a9bb4376ca50fcccea24c107daa534e25cb1290f7c->leave($__internal_6d9293737277203df16675a9bb4376ca50fcccea24c107daa534e25cb1290f7c_prof);

        
        $__internal_ca1a87604b61822d8423d1bb0bebfa8a6f60d4a5fc6b606a15ef1575dec2ffc8->leave($__internal_ca1a87604b61822d8423d1bb0bebfa8a6f60d4a5fc6b606a15ef1575dec2ffc8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
