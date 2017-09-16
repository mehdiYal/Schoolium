<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7fa4700dc56bac756a81bca3b5c33187a8549bd75d0bef0c6f0dae81abb6991a extends Twig_Template
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
        $__internal_0240edb92e77d200697819a938a21f4455987e7185ca70a16075da85997abcfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0240edb92e77d200697819a938a21f4455987e7185ca70a16075da85997abcfd->enter($__internal_0240edb92e77d200697819a938a21f4455987e7185ca70a16075da85997abcfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_da714090470bf4b53b0110d7bf59a40246b1c43a35067c481a2adc5d504890ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da714090470bf4b53b0110d7bf59a40246b1c43a35067c481a2adc5d504890ad->enter($__internal_da714090470bf4b53b0110d7bf59a40246b1c43a35067c481a2adc5d504890ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0240edb92e77d200697819a938a21f4455987e7185ca70a16075da85997abcfd->leave($__internal_0240edb92e77d200697819a938a21f4455987e7185ca70a16075da85997abcfd_prof);

        
        $__internal_da714090470bf4b53b0110d7bf59a40246b1c43a35067c481a2adc5d504890ad->leave($__internal_da714090470bf4b53b0110d7bf59a40246b1c43a35067c481a2adc5d504890ad_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
