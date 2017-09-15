<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_2f69a5ebf728b3f5acbc706fb1554b7bc1ba7cf8ba31091a7d04b10fd6864fd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_5e26d7135f09bd91b59ceb93883dafffdf64c3cdc5f22f91600b299cb889f614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e26d7135f09bd91b59ceb93883dafffdf64c3cdc5f22f91600b299cb889f614->enter($__internal_5e26d7135f09bd91b59ceb93883dafffdf64c3cdc5f22f91600b299cb889f614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_5ba3e15919121a4be53e6c25ef328790d6f852569c54096dbf381503ff0794a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba3e15919121a4be53e6c25ef328790d6f852569c54096dbf381503ff0794a9->enter($__internal_5ba3e15919121a4be53e6c25ef328790d6f852569c54096dbf381503ff0794a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e26d7135f09bd91b59ceb93883dafffdf64c3cdc5f22f91600b299cb889f614->leave($__internal_5e26d7135f09bd91b59ceb93883dafffdf64c3cdc5f22f91600b299cb889f614_prof);

        
        $__internal_5ba3e15919121a4be53e6c25ef328790d6f852569c54096dbf381503ff0794a9->leave($__internal_5ba3e15919121a4be53e6c25ef328790d6f852569c54096dbf381503ff0794a9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df03e45fb3edcb3c91f2e77dbf8253495b5ac40077607572ec0f1460f326d8ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df03e45fb3edcb3c91f2e77dbf8253495b5ac40077607572ec0f1460f326d8ed->enter($__internal_df03e45fb3edcb3c91f2e77dbf8253495b5ac40077607572ec0f1460f326d8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f8701e245d5969ddfbd7fa59402fca3b871d2aace8c29db305bc941b3375cd05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8701e245d5969ddfbd7fa59402fca3b871d2aace8c29db305bc941b3375cd05->enter($__internal_f8701e245d5969ddfbd7fa59402fca3b871d2aace8c29db305bc941b3375cd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_f8701e245d5969ddfbd7fa59402fca3b871d2aace8c29db305bc941b3375cd05->leave($__internal_f8701e245d5969ddfbd7fa59402fca3b871d2aace8c29db305bc941b3375cd05_prof);

        
        $__internal_df03e45fb3edcb3c91f2e77dbf8253495b5ac40077607572ec0f1460f326d8ed->leave($__internal_df03e45fb3edcb3c91f2e77dbf8253495b5ac40077607572ec0f1460f326d8ed_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
", "FOSUserBundle:Profile:show.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
