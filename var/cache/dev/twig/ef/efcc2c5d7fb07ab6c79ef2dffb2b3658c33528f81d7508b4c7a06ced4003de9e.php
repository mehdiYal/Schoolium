<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b66f22fd44260057ad8a62d65396cda02d7fb901f9acd2668bf860bda94b2b82 extends Twig_Template
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
        $__internal_8e44e70f26f129a4de266079de3fc708cd527d19d05cc754c8b9028d1ddfd0e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e44e70f26f129a4de266079de3fc708cd527d19d05cc754c8b9028d1ddfd0e5->enter($__internal_8e44e70f26f129a4de266079de3fc708cd527d19d05cc754c8b9028d1ddfd0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_9b1b644264ef0a8d78e954431e6cce59f80f6cb75cfb8110ec7b2d5dbdd08515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1b644264ef0a8d78e954431e6cce59f80f6cb75cfb8110ec7b2d5dbdd08515->enter($__internal_9b1b644264ef0a8d78e954431e6cce59f80f6cb75cfb8110ec7b2d5dbdd08515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8e44e70f26f129a4de266079de3fc708cd527d19d05cc754c8b9028d1ddfd0e5->leave($__internal_8e44e70f26f129a4de266079de3fc708cd527d19d05cc754c8b9028d1ddfd0e5_prof);

        
        $__internal_9b1b644264ef0a8d78e954431e6cce59f80f6cb75cfb8110ec7b2d5dbdd08515->leave($__internal_9b1b644264ef0a8d78e954431e6cce59f80f6cb75cfb8110ec7b2d5dbdd08515_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
