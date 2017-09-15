<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f1375f2854ee9c43923ee702f6f1c76072318d7fe79fcd15d2f2b0e72c516968 extends Twig_Template
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
        $__internal_ab52c32f0f830c22cf08a7c9b985c166533254f586e8867d55920c269fbca474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab52c32f0f830c22cf08a7c9b985c166533254f586e8867d55920c269fbca474->enter($__internal_ab52c32f0f830c22cf08a7c9b985c166533254f586e8867d55920c269fbca474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_a013c213eef00347a29708f77925e5bce9d8907be15de438e87de991ff80c456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a013c213eef00347a29708f77925e5bce9d8907be15de438e87de991ff80c456->enter($__internal_a013c213eef00347a29708f77925e5bce9d8907be15de438e87de991ff80c456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ab52c32f0f830c22cf08a7c9b985c166533254f586e8867d55920c269fbca474->leave($__internal_ab52c32f0f830c22cf08a7c9b985c166533254f586e8867d55920c269fbca474_prof);

        
        $__internal_a013c213eef00347a29708f77925e5bce9d8907be15de438e87de991ff80c456->leave($__internal_a013c213eef00347a29708f77925e5bce9d8907be15de438e87de991ff80c456_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
