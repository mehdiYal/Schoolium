<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_cc1701f716ab3d8bad0bcf45c14162bdc869fb090b799ab9d29904c6de899182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc36a1f241b042a0fa31cf3de6f6d3ce0f00fea8623c55c445dac6c34314f58d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc36a1f241b042a0fa31cf3de6f6d3ce0f00fea8623c55c445dac6c34314f58d->enter($__internal_bc36a1f241b042a0fa31cf3de6f6d3ce0f00fea8623c55c445dac6c34314f58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_ba546bb969109061eb73ae21a05ca7ea9b78d3396adb6ab0b9a351878bb3b209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba546bb969109061eb73ae21a05ca7ea9b78d3396adb6ab0b9a351878bb3b209->enter($__internal_ba546bb969109061eb73ae21a05ca7ea9b78d3396adb6ab0b9a351878bb3b209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_bc36a1f241b042a0fa31cf3de6f6d3ce0f00fea8623c55c445dac6c34314f58d->leave($__internal_bc36a1f241b042a0fa31cf3de6f6d3ce0f00fea8623c55c445dac6c34314f58d_prof);

        
        $__internal_ba546bb969109061eb73ae21a05ca7ea9b78d3396adb6ab0b9a351878bb3b209->leave($__internal_ba546bb969109061eb73ae21a05ca7ea9b78d3396adb6ab0b9a351878bb3b209_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
