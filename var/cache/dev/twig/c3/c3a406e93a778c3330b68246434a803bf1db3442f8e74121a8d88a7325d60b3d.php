<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0774ae5e69511382dced60f906716cabd4efad5932c1aef2c6a680b813a735bc extends Twig_Template
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
        $__internal_6688a0044aea0d4035c45109d4d448919febdff21edb16a678fb529ceb0abc45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6688a0044aea0d4035c45109d4d448919febdff21edb16a678fb529ceb0abc45->enter($__internal_6688a0044aea0d4035c45109d4d448919febdff21edb16a678fb529ceb0abc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_07c3fb183c694b04899e02e185087c608c792fd68e4fd5754f5c8fdc23a8228f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c3fb183c694b04899e02e185087c608c792fd68e4fd5754f5c8fdc23a8228f->enter($__internal_07c3fb183c694b04899e02e185087c608c792fd68e4fd5754f5c8fdc23a8228f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6688a0044aea0d4035c45109d4d448919febdff21edb16a678fb529ceb0abc45->leave($__internal_6688a0044aea0d4035c45109d4d448919febdff21edb16a678fb529ceb0abc45_prof);

        
        $__internal_07c3fb183c694b04899e02e185087c608c792fd68e4fd5754f5c8fdc23a8228f->leave($__internal_07c3fb183c694b04899e02e185087c608c792fd68e4fd5754f5c8fdc23a8228f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
