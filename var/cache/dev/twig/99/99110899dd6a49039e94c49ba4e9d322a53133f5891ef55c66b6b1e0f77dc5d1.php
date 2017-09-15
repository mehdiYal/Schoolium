<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0447a5b26578c982271d3959bc31fe1d29de4baea38b3240c66ed77af9056adc extends Twig_Template
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
        $__internal_535fede03cecdc52649cfe564624a517dcebe450e1b3c73e66eee8451055f984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_535fede03cecdc52649cfe564624a517dcebe450e1b3c73e66eee8451055f984->enter($__internal_535fede03cecdc52649cfe564624a517dcebe450e1b3c73e66eee8451055f984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d935fac768ebca4d9de1d8a637fa3bd40eba214e21e825f2b26c30f5fbdea352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d935fac768ebca4d9de1d8a637fa3bd40eba214e21e825f2b26c30f5fbdea352->enter($__internal_d935fac768ebca4d9de1d8a637fa3bd40eba214e21e825f2b26c30f5fbdea352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_535fede03cecdc52649cfe564624a517dcebe450e1b3c73e66eee8451055f984->leave($__internal_535fede03cecdc52649cfe564624a517dcebe450e1b3c73e66eee8451055f984_prof);

        
        $__internal_d935fac768ebca4d9de1d8a637fa3bd40eba214e21e825f2b26c30f5fbdea352->leave($__internal_d935fac768ebca4d9de1d8a637fa3bd40eba214e21e825f2b26c30f5fbdea352_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1046f7f9caa8f8765011a2ef1e89953060c715cdbac23638eeeac7d377178f35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1046f7f9caa8f8765011a2ef1e89953060c715cdbac23638eeeac7d377178f35->enter($__internal_1046f7f9caa8f8765011a2ef1e89953060c715cdbac23638eeeac7d377178f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9db0ed5880eac90f3ddd89ee41f2e5da8f32d40f93b0e9337f17491314706c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db0ed5880eac90f3ddd89ee41f2e5da8f32d40f93b0e9337f17491314706c06->enter($__internal_9db0ed5880eac90f3ddd89ee41f2e5da8f32d40f93b0e9337f17491314706c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9db0ed5880eac90f3ddd89ee41f2e5da8f32d40f93b0e9337f17491314706c06->leave($__internal_9db0ed5880eac90f3ddd89ee41f2e5da8f32d40f93b0e9337f17491314706c06_prof);

        
        $__internal_1046f7f9caa8f8765011a2ef1e89953060c715cdbac23638eeeac7d377178f35->leave($__internal_1046f7f9caa8f8765011a2ef1e89953060c715cdbac23638eeeac7d377178f35_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
