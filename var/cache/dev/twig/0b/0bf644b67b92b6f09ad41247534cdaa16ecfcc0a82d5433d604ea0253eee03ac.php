<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c5a266016a1d0e31b6ee35f11dd88d3af10e1e671c98326d11002466de91cf50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bb2bc518ffebbbec6f980c19e5fe086c78023aab5646623413569832364de32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bb2bc518ffebbbec6f980c19e5fe086c78023aab5646623413569832364de32->enter($__internal_8bb2bc518ffebbbec6f980c19e5fe086c78023aab5646623413569832364de32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_1d30eb45941633a670c82f8bbd6fd9934d5e7d80b609287d92137211b371ed19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d30eb45941633a670c82f8bbd6fd9934d5e7d80b609287d92137211b371ed19->enter($__internal_1d30eb45941633a670c82f8bbd6fd9934d5e7d80b609287d92137211b371ed19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bb2bc518ffebbbec6f980c19e5fe086c78023aab5646623413569832364de32->leave($__internal_8bb2bc518ffebbbec6f980c19e5fe086c78023aab5646623413569832364de32_prof);

        
        $__internal_1d30eb45941633a670c82f8bbd6fd9934d5e7d80b609287d92137211b371ed19->leave($__internal_1d30eb45941633a670c82f8bbd6fd9934d5e7d80b609287d92137211b371ed19_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c46392b9e5800515a822c9ba41fb51b31f0cd90af6c1e2c8d3cf667f9d4afaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c46392b9e5800515a822c9ba41fb51b31f0cd90af6c1e2c8d3cf667f9d4afaf->enter($__internal_5c46392b9e5800515a822c9ba41fb51b31f0cd90af6c1e2c8d3cf667f9d4afaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d10147ea89efbff64a0c5e1f7c278b329cde74b86d1eff8e587352f76f6346f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10147ea89efbff64a0c5e1f7c278b329cde74b86d1eff8e587352f76f6346f8->enter($__internal_d10147ea89efbff64a0c5e1f7c278b329cde74b86d1eff8e587352f76f6346f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d10147ea89efbff64a0c5e1f7c278b329cde74b86d1eff8e587352f76f6346f8->leave($__internal_d10147ea89efbff64a0c5e1f7c278b329cde74b86d1eff8e587352f76f6346f8_prof);

        
        $__internal_5c46392b9e5800515a822c9ba41fb51b31f0cd90af6c1e2c8d3cf667f9d4afaf->leave($__internal_5c46392b9e5800515a822c9ba41fb51b31f0cd90af6c1e2c8d3cf667f9d4afaf_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c45adc3f8ce8ee8091a6b27a3ed9e8ee8f82224bea1a89e0d909d656d622b01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c45adc3f8ce8ee8091a6b27a3ed9e8ee8f82224bea1a89e0d909d656d622b01->enter($__internal_1c45adc3f8ce8ee8091a6b27a3ed9e8ee8f82224bea1a89e0d909d656d622b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c63e4a8c6a27a9b71f11ba2b19c2e05cd31f45c5dfbc7a02f82de1d2c3c002a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c63e4a8c6a27a9b71f11ba2b19c2e05cd31f45c5dfbc7a02f82de1d2c3c002a->enter($__internal_1c63e4a8c6a27a9b71f11ba2b19c2e05cd31f45c5dfbc7a02f82de1d2c3c002a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1c63e4a8c6a27a9b71f11ba2b19c2e05cd31f45c5dfbc7a02f82de1d2c3c002a->leave($__internal_1c63e4a8c6a27a9b71f11ba2b19c2e05cd31f45c5dfbc7a02f82de1d2c3c002a_prof);

        
        $__internal_1c45adc3f8ce8ee8091a6b27a3ed9e8ee8f82224bea1a89e0d909d656d622b01->leave($__internal_1c45adc3f8ce8ee8091a6b27a3ed9e8ee8f82224bea1a89e0d909d656d622b01_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a452a701341debc14270a66e0926e9376e0c5664e1c8f739872ba33b49475bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a452a701341debc14270a66e0926e9376e0c5664e1c8f739872ba33b49475bb->enter($__internal_5a452a701341debc14270a66e0926e9376e0c5664e1c8f739872ba33b49475bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_873b972962b6fb89e249d17d20a8bb27b0931b2f14e1ec52a386bdc925915ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873b972962b6fb89e249d17d20a8bb27b0931b2f14e1ec52a386bdc925915ecb->enter($__internal_873b972962b6fb89e249d17d20a8bb27b0931b2f14e1ec52a386bdc925915ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_873b972962b6fb89e249d17d20a8bb27b0931b2f14e1ec52a386bdc925915ecb->leave($__internal_873b972962b6fb89e249d17d20a8bb27b0931b2f14e1ec52a386bdc925915ecb_prof);

        
        $__internal_5a452a701341debc14270a66e0926e9376e0c5664e1c8f739872ba33b49475bb->leave($__internal_5a452a701341debc14270a66e0926e9376e0c5664e1c8f739872ba33b49475bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
