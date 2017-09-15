<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_d9a1c5760e8ab440660050033bac0e83c4329a3e05ef58e8ffe2e24e17714e79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_fc58f5d2fef3b3404f18adf313a75166f336d181d161f92c6a984b9d5895695c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc58f5d2fef3b3404f18adf313a75166f336d181d161f92c6a984b9d5895695c->enter($__internal_fc58f5d2fef3b3404f18adf313a75166f336d181d161f92c6a984b9d5895695c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_e4cbfb3bc3e5e904f8da2d2c89df90a2e983db0cbf77de510dcf2a592cdbe57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4cbfb3bc3e5e904f8da2d2c89df90a2e983db0cbf77de510dcf2a592cdbe57a->enter($__internal_e4cbfb3bc3e5e904f8da2d2c89df90a2e983db0cbf77de510dcf2a592cdbe57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc58f5d2fef3b3404f18adf313a75166f336d181d161f92c6a984b9d5895695c->leave($__internal_fc58f5d2fef3b3404f18adf313a75166f336d181d161f92c6a984b9d5895695c_prof);

        
        $__internal_e4cbfb3bc3e5e904f8da2d2c89df90a2e983db0cbf77de510dcf2a592cdbe57a->leave($__internal_e4cbfb3bc3e5e904f8da2d2c89df90a2e983db0cbf77de510dcf2a592cdbe57a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51129139f7adaeec6b180d767a8fa59ab81eb8a99651af9696b9e93cc07781bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51129139f7adaeec6b180d767a8fa59ab81eb8a99651af9696b9e93cc07781bb->enter($__internal_51129139f7adaeec6b180d767a8fa59ab81eb8a99651af9696b9e93cc07781bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_707b1db74ca52c024cef32ca8f1d20cb7eead03063ddd873927f6d74d252b490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_707b1db74ca52c024cef32ca8f1d20cb7eead03063ddd873927f6d74d252b490->enter($__internal_707b1db74ca52c024cef32ca8f1d20cb7eead03063ddd873927f6d74d252b490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_707b1db74ca52c024cef32ca8f1d20cb7eead03063ddd873927f6d74d252b490->leave($__internal_707b1db74ca52c024cef32ca8f1d20cb7eead03063ddd873927f6d74d252b490_prof);

        
        $__internal_51129139f7adaeec6b180d767a8fa59ab81eb8a99651af9696b9e93cc07781bb->leave($__internal_51129139f7adaeec6b180d767a8fa59ab81eb8a99651af9696b9e93cc07781bb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
