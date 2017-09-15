<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_d820b52e09141a15cfa4ddd0827a37effef652934e33db8a7b5ff8de159bc968 extends Twig_Template
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
        $__internal_0ab3e3dbdc74a32d6b26f89a6bb22c3dd8b1c7819b6ca762722c719bcca43b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ab3e3dbdc74a32d6b26f89a6bb22c3dd8b1c7819b6ca762722c719bcca43b3a->enter($__internal_0ab3e3dbdc74a32d6b26f89a6bb22c3dd8b1c7819b6ca762722c719bcca43b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_9b948fd23b2b3e364ac52cca9ed5634386b3ca881ab14f8da5ff37208c625ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b948fd23b2b3e364ac52cca9ed5634386b3ca881ab14f8da5ff37208c625ade->enter($__internal_9b948fd23b2b3e364ac52cca9ed5634386b3ca881ab14f8da5ff37208c625ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0ab3e3dbdc74a32d6b26f89a6bb22c3dd8b1c7819b6ca762722c719bcca43b3a->leave($__internal_0ab3e3dbdc74a32d6b26f89a6bb22c3dd8b1c7819b6ca762722c719bcca43b3a_prof);

        
        $__internal_9b948fd23b2b3e364ac52cca9ed5634386b3ca881ab14f8da5ff37208c625ade->leave($__internal_9b948fd23b2b3e364ac52cca9ed5634386b3ca881ab14f8da5ff37208c625ade_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c6e94570e93f66689a83181cc6b354eeb10a82ff2ca5882b4e23cf23a3c14c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c6e94570e93f66689a83181cc6b354eeb10a82ff2ca5882b4e23cf23a3c14c2->enter($__internal_4c6e94570e93f66689a83181cc6b354eeb10a82ff2ca5882b4e23cf23a3c14c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0b2dcf5107a57e1b431e3a031281c24d4162eb7eca6ef703e6e3cb0d1f2e63c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b2dcf5107a57e1b431e3a031281c24d4162eb7eca6ef703e6e3cb0d1f2e63c5->enter($__internal_0b2dcf5107a57e1b431e3a031281c24d4162eb7eca6ef703e6e3cb0d1f2e63c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0b2dcf5107a57e1b431e3a031281c24d4162eb7eca6ef703e6e3cb0d1f2e63c5->leave($__internal_0b2dcf5107a57e1b431e3a031281c24d4162eb7eca6ef703e6e3cb0d1f2e63c5_prof);

        
        $__internal_4c6e94570e93f66689a83181cc6b354eeb10a82ff2ca5882b4e23cf23a3c14c2->leave($__internal_4c6e94570e93f66689a83181cc6b354eeb10a82ff2ca5882b4e23cf23a3c14c2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
