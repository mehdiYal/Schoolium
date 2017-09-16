<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ac11290e59d19f4e4685744d9601a8b8c6ca0799da926f1efe665399bc939cd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f120b06f7d2044ed657822a250f02e7ff224cb837205914f4245748000e4f587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f120b06f7d2044ed657822a250f02e7ff224cb837205914f4245748000e4f587->enter($__internal_f120b06f7d2044ed657822a250f02e7ff224cb837205914f4245748000e4f587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_502d626a9088a69d11d3efc3deec3f1ebeebf5ce082f9402b44497562b16c9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_502d626a9088a69d11d3efc3deec3f1ebeebf5ce082f9402b44497562b16c9b1->enter($__internal_502d626a9088a69d11d3efc3deec3f1ebeebf5ce082f9402b44497562b16c9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f120b06f7d2044ed657822a250f02e7ff224cb837205914f4245748000e4f587->leave($__internal_f120b06f7d2044ed657822a250f02e7ff224cb837205914f4245748000e4f587_prof);

        
        $__internal_502d626a9088a69d11d3efc3deec3f1ebeebf5ce082f9402b44497562b16c9b1->leave($__internal_502d626a9088a69d11d3efc3deec3f1ebeebf5ce082f9402b44497562b16c9b1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_eecde5d63a820f4c8c5e57518e4fc247f83ae4d0741f8a23d7d37ea3cd8867a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eecde5d63a820f4c8c5e57518e4fc247f83ae4d0741f8a23d7d37ea3cd8867a9->enter($__internal_eecde5d63a820f4c8c5e57518e4fc247f83ae4d0741f8a23d7d37ea3cd8867a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bf35211f8c68afa6b198daf8f548333a6b1a8a5c720a727911ba9d3479a39004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf35211f8c68afa6b198daf8f548333a6b1a8a5c720a727911ba9d3479a39004->enter($__internal_bf35211f8c68afa6b198daf8f548333a6b1a8a5c720a727911ba9d3479a39004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bf35211f8c68afa6b198daf8f548333a6b1a8a5c720a727911ba9d3479a39004->leave($__internal_bf35211f8c68afa6b198daf8f548333a6b1a8a5c720a727911ba9d3479a39004_prof);

        
        $__internal_eecde5d63a820f4c8c5e57518e4fc247f83ae4d0741f8a23d7d37ea3cd8867a9->leave($__internal_eecde5d63a820f4c8c5e57518e4fc247f83ae4d0741f8a23d7d37ea3cd8867a9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
