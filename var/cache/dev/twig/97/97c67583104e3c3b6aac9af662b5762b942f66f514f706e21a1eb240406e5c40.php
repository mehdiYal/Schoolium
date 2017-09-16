<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_9b37f72f66e4d553931736c3db95cb08ec235abfc47ccfa65ae8abef5ab3bc42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_e51d0f7b49bb446bd978eba5b8515b3233a07c0d00dc63e3f16f50abb8aab935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e51d0f7b49bb446bd978eba5b8515b3233a07c0d00dc63e3f16f50abb8aab935->enter($__internal_e51d0f7b49bb446bd978eba5b8515b3233a07c0d00dc63e3f16f50abb8aab935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_fbd302be35fa1aa7c443ed84713a70753b51aabe75c558bcd5a61a4880ac4e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd302be35fa1aa7c443ed84713a70753b51aabe75c558bcd5a61a4880ac4e17->enter($__internal_fbd302be35fa1aa7c443ed84713a70753b51aabe75c558bcd5a61a4880ac4e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e51d0f7b49bb446bd978eba5b8515b3233a07c0d00dc63e3f16f50abb8aab935->leave($__internal_e51d0f7b49bb446bd978eba5b8515b3233a07c0d00dc63e3f16f50abb8aab935_prof);

        
        $__internal_fbd302be35fa1aa7c443ed84713a70753b51aabe75c558bcd5a61a4880ac4e17->leave($__internal_fbd302be35fa1aa7c443ed84713a70753b51aabe75c558bcd5a61a4880ac4e17_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a4da9feffb0f840fdba9edfe05df7c2d8c5cb580f09c5d8e50a519ec122f573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4da9feffb0f840fdba9edfe05df7c2d8c5cb580f09c5d8e50a519ec122f573->enter($__internal_9a4da9feffb0f840fdba9edfe05df7c2d8c5cb580f09c5d8e50a519ec122f573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_714ae748e2f709d8d354ba41ebf2e8c0615793b9e8f70e41da8d12fe643a22fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714ae748e2f709d8d354ba41ebf2e8c0615793b9e8f70e41da8d12fe643a22fb->enter($__internal_714ae748e2f709d8d354ba41ebf2e8c0615793b9e8f70e41da8d12fe643a22fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_714ae748e2f709d8d354ba41ebf2e8c0615793b9e8f70e41da8d12fe643a22fb->leave($__internal_714ae748e2f709d8d354ba41ebf2e8c0615793b9e8f70e41da8d12fe643a22fb_prof);

        
        $__internal_9a4da9feffb0f840fdba9edfe05df7c2d8c5cb580f09c5d8e50a519ec122f573->leave($__internal_9a4da9feffb0f840fdba9edfe05df7c2d8c5cb580f09c5d8e50a519ec122f573_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
