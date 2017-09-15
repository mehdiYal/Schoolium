<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d1dfbc545999c961ea51c4573e762c043572812bf8db887f2229c0de9a3ca07a extends Twig_Template
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
        $__internal_091cf3b861ee5341d6e0f596b1bfaeaec7117dd7e5b54cbe2c9b4150e794f099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_091cf3b861ee5341d6e0f596b1bfaeaec7117dd7e5b54cbe2c9b4150e794f099->enter($__internal_091cf3b861ee5341d6e0f596b1bfaeaec7117dd7e5b54cbe2c9b4150e794f099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_643f4ef126a57229d45e148ac2b06483a2e3aa18f1116d506e219f9d0f28648a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643f4ef126a57229d45e148ac2b06483a2e3aa18f1116d506e219f9d0f28648a->enter($__internal_643f4ef126a57229d45e148ac2b06483a2e3aa18f1116d506e219f9d0f28648a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_091cf3b861ee5341d6e0f596b1bfaeaec7117dd7e5b54cbe2c9b4150e794f099->leave($__internal_091cf3b861ee5341d6e0f596b1bfaeaec7117dd7e5b54cbe2c9b4150e794f099_prof);

        
        $__internal_643f4ef126a57229d45e148ac2b06483a2e3aa18f1116d506e219f9d0f28648a->leave($__internal_643f4ef126a57229d45e148ac2b06483a2e3aa18f1116d506e219f9d0f28648a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
