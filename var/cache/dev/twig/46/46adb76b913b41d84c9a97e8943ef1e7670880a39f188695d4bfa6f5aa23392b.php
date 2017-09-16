<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_126f9d29f853e2cae2b1b3eae1a15db7b503b27c39443e9259a0801a9aea4fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_688ca5be6ff308bba02fdda37484bee32b80b9f4a5d51e913339579ac01ed221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_688ca5be6ff308bba02fdda37484bee32b80b9f4a5d51e913339579ac01ed221->enter($__internal_688ca5be6ff308bba02fdda37484bee32b80b9f4a5d51e913339579ac01ed221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3192a0b77be14fe414ba484e69f080e0d2bd3112743ea6e519ec6e9268230e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3192a0b77be14fe414ba484e69f080e0d2bd3112743ea6e519ec6e9268230e31->enter($__internal_3192a0b77be14fe414ba484e69f080e0d2bd3112743ea6e519ec6e9268230e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_688ca5be6ff308bba02fdda37484bee32b80b9f4a5d51e913339579ac01ed221->leave($__internal_688ca5be6ff308bba02fdda37484bee32b80b9f4a5d51e913339579ac01ed221_prof);

        
        $__internal_3192a0b77be14fe414ba484e69f080e0d2bd3112743ea6e519ec6e9268230e31->leave($__internal_3192a0b77be14fe414ba484e69f080e0d2bd3112743ea6e519ec6e9268230e31_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0249858b94942fb3ad0214e05b2ce32026fcbbe6afbdda83ffdb8794b8dfc9fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0249858b94942fb3ad0214e05b2ce32026fcbbe6afbdda83ffdb8794b8dfc9fe->enter($__internal_0249858b94942fb3ad0214e05b2ce32026fcbbe6afbdda83ffdb8794b8dfc9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aebcdd62229ddba2fe0d8dd5d872ce04cbbea22f65cb414c9900de56caca7f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebcdd62229ddba2fe0d8dd5d872ce04cbbea22f65cb414c9900de56caca7f15->enter($__internal_aebcdd62229ddba2fe0d8dd5d872ce04cbbea22f65cb414c9900de56caca7f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_aebcdd62229ddba2fe0d8dd5d872ce04cbbea22f65cb414c9900de56caca7f15->leave($__internal_aebcdd62229ddba2fe0d8dd5d872ce04cbbea22f65cb414c9900de56caca7f15_prof);

        
        $__internal_0249858b94942fb3ad0214e05b2ce32026fcbbe6afbdda83ffdb8794b8dfc9fe->leave($__internal_0249858b94942fb3ad0214e05b2ce32026fcbbe6afbdda83ffdb8794b8dfc9fe_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e8710dfdd78c6d2d6aa140a46a6f6108fad38899d48acd1a17e0a5bda265c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e8710dfdd78c6d2d6aa140a46a6f6108fad38899d48acd1a17e0a5bda265c3b->enter($__internal_0e8710dfdd78c6d2d6aa140a46a6f6108fad38899d48acd1a17e0a5bda265c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5eb1f63f2e8811d320525649c2173b0f2310dd045d334fc615b78479855cfdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5eb1f63f2e8811d320525649c2173b0f2310dd045d334fc615b78479855cfdc->enter($__internal_c5eb1f63f2e8811d320525649c2173b0f2310dd045d334fc615b78479855cfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c5eb1f63f2e8811d320525649c2173b0f2310dd045d334fc615b78479855cfdc->leave($__internal_c5eb1f63f2e8811d320525649c2173b0f2310dd045d334fc615b78479855cfdc_prof);

        
        $__internal_0e8710dfdd78c6d2d6aa140a46a6f6108fad38899d48acd1a17e0a5bda265c3b->leave($__internal_0e8710dfdd78c6d2d6aa140a46a6f6108fad38899d48acd1a17e0a5bda265c3b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_aaa72b38f5d2dcafcfa46c401e72530b34a434de57448c78431aa99d1271b93d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa72b38f5d2dcafcfa46c401e72530b34a434de57448c78431aa99d1271b93d->enter($__internal_aaa72b38f5d2dcafcfa46c401e72530b34a434de57448c78431aa99d1271b93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52c8249dc0c1fbefc424c35fc3552848434330a6a9336ca37ecda9578a41e4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c8249dc0c1fbefc424c35fc3552848434330a6a9336ca37ecda9578a41e4a3->enter($__internal_52c8249dc0c1fbefc424c35fc3552848434330a6a9336ca37ecda9578a41e4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_52c8249dc0c1fbefc424c35fc3552848434330a6a9336ca37ecda9578a41e4a3->leave($__internal_52c8249dc0c1fbefc424c35fc3552848434330a6a9336ca37ecda9578a41e4a3_prof);

        
        $__internal_aaa72b38f5d2dcafcfa46c401e72530b34a434de57448c78431aa99d1271b93d->leave($__internal_aaa72b38f5d2dcafcfa46c401e72530b34a434de57448c78431aa99d1271b93d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
