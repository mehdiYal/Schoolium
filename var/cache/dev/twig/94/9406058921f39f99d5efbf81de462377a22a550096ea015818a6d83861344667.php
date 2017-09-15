<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_5d8f2302a224331be1af27aa4a3fc4d3710de1ad21a1c679d43bd098478eecd8 extends Twig_Template
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
        $__internal_3fb7c6885314e02d6f448b4a73d97fa5386e235c11216b4c6bc6e8994cad5c33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fb7c6885314e02d6f448b4a73d97fa5386e235c11216b4c6bc6e8994cad5c33->enter($__internal_3fb7c6885314e02d6f448b4a73d97fa5386e235c11216b4c6bc6e8994cad5c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_bdafc5bb842eb771dce53d4ad57e925d684fa3dddbd8eb60c5065b97adefd3a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdafc5bb842eb771dce53d4ad57e925d684fa3dddbd8eb60c5065b97adefd3a2->enter($__internal_bdafc5bb842eb771dce53d4ad57e925d684fa3dddbd8eb60c5065b97adefd3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fb7c6885314e02d6f448b4a73d97fa5386e235c11216b4c6bc6e8994cad5c33->leave($__internal_3fb7c6885314e02d6f448b4a73d97fa5386e235c11216b4c6bc6e8994cad5c33_prof);

        
        $__internal_bdafc5bb842eb771dce53d4ad57e925d684fa3dddbd8eb60c5065b97adefd3a2->leave($__internal_bdafc5bb842eb771dce53d4ad57e925d684fa3dddbd8eb60c5065b97adefd3a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b3435867f10dfd6812296f13e0473ca9bc7a5ed4197ad8928f4a954af0a621d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b3435867f10dfd6812296f13e0473ca9bc7a5ed4197ad8928f4a954af0a621d->enter($__internal_8b3435867f10dfd6812296f13e0473ca9bc7a5ed4197ad8928f4a954af0a621d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2f05d67b0c9dc890b6481f5bd0f5d000e733dbf2fc697e14fded61d3b350b580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f05d67b0c9dc890b6481f5bd0f5d000e733dbf2fc697e14fded61d3b350b580->enter($__internal_2f05d67b0c9dc890b6481f5bd0f5d000e733dbf2fc697e14fded61d3b350b580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_2f05d67b0c9dc890b6481f5bd0f5d000e733dbf2fc697e14fded61d3b350b580->leave($__internal_2f05d67b0c9dc890b6481f5bd0f5d000e733dbf2fc697e14fded61d3b350b580_prof);

        
        $__internal_8b3435867f10dfd6812296f13e0473ca9bc7a5ed4197ad8928f4a954af0a621d->leave($__internal_8b3435867f10dfd6812296f13e0473ca9bc7a5ed4197ad8928f4a954af0a621d_prof);

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
", "FOSUserBundle:Group:list.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
