<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_992cf07bf0eacc83641b3a5d7d7e7bd789b4c75900cd4aeca5e0c48c2a80acad extends Twig_Template
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
        $__internal_e4a7333facb1fbfbe93295a602c3f44a066191f795d0f563c73330f23b4a5bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a7333facb1fbfbe93295a602c3f44a066191f795d0f563c73330f23b4a5bef->enter($__internal_e4a7333facb1fbfbe93295a602c3f44a066191f795d0f563c73330f23b4a5bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_57323caca2503afe9159f935aab020c0dafbaf4749223cc8161dac9bf296114f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57323caca2503afe9159f935aab020c0dafbaf4749223cc8161dac9bf296114f->enter($__internal_57323caca2503afe9159f935aab020c0dafbaf4749223cc8161dac9bf296114f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_e4a7333facb1fbfbe93295a602c3f44a066191f795d0f563c73330f23b4a5bef->leave($__internal_e4a7333facb1fbfbe93295a602c3f44a066191f795d0f563c73330f23b4a5bef_prof);

        
        $__internal_57323caca2503afe9159f935aab020c0dafbaf4749223cc8161dac9bf296114f->leave($__internal_57323caca2503afe9159f935aab020c0dafbaf4749223cc8161dac9bf296114f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
