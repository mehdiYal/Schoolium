<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e8a9cfe67bd02507aee8c80f230cd924ceff8cf16d128572660888dac6b41d73 extends Twig_Template
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
        $__internal_4cd55382abcd4a6ce7b9362a7baecfe1dfd900897e7ba275b739073ca2c45b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd55382abcd4a6ce7b9362a7baecfe1dfd900897e7ba275b739073ca2c45b8d->enter($__internal_4cd55382abcd4a6ce7b9362a7baecfe1dfd900897e7ba275b739073ca2c45b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_a920ec7996297ca9d7e31777368873e2dca4ee565b30416748834b606ea820c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a920ec7996297ca9d7e31777368873e2dca4ee565b30416748834b606ea820c3->enter($__internal_a920ec7996297ca9d7e31777368873e2dca4ee565b30416748834b606ea820c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4cd55382abcd4a6ce7b9362a7baecfe1dfd900897e7ba275b739073ca2c45b8d->leave($__internal_4cd55382abcd4a6ce7b9362a7baecfe1dfd900897e7ba275b739073ca2c45b8d_prof);

        
        $__internal_a920ec7996297ca9d7e31777368873e2dca4ee565b30416748834b606ea820c3->leave($__internal_a920ec7996297ca9d7e31777368873e2dca4ee565b30416748834b606ea820c3_prof);

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
", "TwigBundle:Exception:error.json.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
