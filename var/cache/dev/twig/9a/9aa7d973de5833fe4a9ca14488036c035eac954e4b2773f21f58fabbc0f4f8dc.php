<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d3704eb0ebf4b97e39b97b5aabbc14addc6dfd675bc12c2079fbf543e8e9673d extends Twig_Template
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
        $__internal_b2f71252fae3bec93ab12dda16923ec2d0a11a2fdea906c99b7892f4fd4d888b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2f71252fae3bec93ab12dda16923ec2d0a11a2fdea906c99b7892f4fd4d888b->enter($__internal_b2f71252fae3bec93ab12dda16923ec2d0a11a2fdea906c99b7892f4fd4d888b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_dbaab6567391a255936e9b1fb58433a67bc8b0b58c1947e097d924314386830b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbaab6567391a255936e9b1fb58433a67bc8b0b58c1947e097d924314386830b->enter($__internal_dbaab6567391a255936e9b1fb58433a67bc8b0b58c1947e097d924314386830b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b2f71252fae3bec93ab12dda16923ec2d0a11a2fdea906c99b7892f4fd4d888b->leave($__internal_b2f71252fae3bec93ab12dda16923ec2d0a11a2fdea906c99b7892f4fd4d888b_prof);

        
        $__internal_dbaab6567391a255936e9b1fb58433a67bc8b0b58c1947e097d924314386830b->leave($__internal_dbaab6567391a255936e9b1fb58433a67bc8b0b58c1947e097d924314386830b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
