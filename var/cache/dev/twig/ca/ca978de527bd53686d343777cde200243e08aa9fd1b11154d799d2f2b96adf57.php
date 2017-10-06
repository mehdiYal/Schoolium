<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_975d12f5ed2ddb4482a15bae5c0e6b3fa491bfa0115d3e0e8f6a28c57bbeba33 extends Twig_Template
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
        $__internal_3c035397c8b96bf2f7f796158c17c2996f387c1893e8b9410402554f95493b24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c035397c8b96bf2f7f796158c17c2996f387c1893e8b9410402554f95493b24->enter($__internal_3c035397c8b96bf2f7f796158c17c2996f387c1893e8b9410402554f95493b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e3cc6cb75d6ce51c46039ba295ba58ae14ace41a0c2c2ca48996ecd9d96128a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3cc6cb75d6ce51c46039ba295ba58ae14ace41a0c2c2ca48996ecd9d96128a9->enter($__internal_e3cc6cb75d6ce51c46039ba295ba58ae14ace41a0c2c2ca48996ecd9d96128a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c035397c8b96bf2f7f796158c17c2996f387c1893e8b9410402554f95493b24->leave($__internal_3c035397c8b96bf2f7f796158c17c2996f387c1893e8b9410402554f95493b24_prof);

        
        $__internal_e3cc6cb75d6ce51c46039ba295ba58ae14ace41a0c2c2ca48996ecd9d96128a9->leave($__internal_e3cc6cb75d6ce51c46039ba295ba58ae14ace41a0c2c2ca48996ecd9d96128a9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_13565ecec548361c87a5f3c7cf5355495b526d5fc03bdeebed997321d3bf70ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13565ecec548361c87a5f3c7cf5355495b526d5fc03bdeebed997321d3bf70ff->enter($__internal_13565ecec548361c87a5f3c7cf5355495b526d5fc03bdeebed997321d3bf70ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_45ee906596dd31f63d52992784810813dc5df091639650ac579cc92ede2cbdc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ee906596dd31f63d52992784810813dc5df091639650ac579cc92ede2cbdc9->enter($__internal_45ee906596dd31f63d52992784810813dc5df091639650ac579cc92ede2cbdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_45ee906596dd31f63d52992784810813dc5df091639650ac579cc92ede2cbdc9->leave($__internal_45ee906596dd31f63d52992784810813dc5df091639650ac579cc92ede2cbdc9_prof);

        
        $__internal_13565ecec548361c87a5f3c7cf5355495b526d5fc03bdeebed997321d3bf70ff->leave($__internal_13565ecec548361c87a5f3c7cf5355495b526d5fc03bdeebed997321d3bf70ff_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_96c704b3fa395b0bf1aab4aaae681919d0f4ad3878dd0f16223148c69cab2682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c704b3fa395b0bf1aab4aaae681919d0f4ad3878dd0f16223148c69cab2682->enter($__internal_96c704b3fa395b0bf1aab4aaae681919d0f4ad3878dd0f16223148c69cab2682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_05403c9e523def0c266a44e97fd78ef58bb3d4d445764a798177593f0c600b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05403c9e523def0c266a44e97fd78ef58bb3d4d445764a798177593f0c600b25->enter($__internal_05403c9e523def0c266a44e97fd78ef58bb3d4d445764a798177593f0c600b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_05403c9e523def0c266a44e97fd78ef58bb3d4d445764a798177593f0c600b25->leave($__internal_05403c9e523def0c266a44e97fd78ef58bb3d4d445764a798177593f0c600b25_prof);

        
        $__internal_96c704b3fa395b0bf1aab4aaae681919d0f4ad3878dd0f16223148c69cab2682->leave($__internal_96c704b3fa395b0bf1aab4aaae681919d0f4ad3878dd0f16223148c69cab2682_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_61d045ad80bcf93b575cc9df49cd03810b899fd355b726551122795253561ccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d045ad80bcf93b575cc9df49cd03810b899fd355b726551122795253561ccf->enter($__internal_61d045ad80bcf93b575cc9df49cd03810b899fd355b726551122795253561ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a535a1eaa4a534ba3c7db1fce9ecc3a8ddef851ac0b696256297fa33f273cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a535a1eaa4a534ba3c7db1fce9ecc3a8ddef851ac0b696256297fa33f273cd9->enter($__internal_3a535a1eaa4a534ba3c7db1fce9ecc3a8ddef851ac0b696256297fa33f273cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3a535a1eaa4a534ba3c7db1fce9ecc3a8ddef851ac0b696256297fa33f273cd9->leave($__internal_3a535a1eaa4a534ba3c7db1fce9ecc3a8ddef851ac0b696256297fa33f273cd9_prof);

        
        $__internal_61d045ad80bcf93b575cc9df49cd03810b899fd355b726551122795253561ccf->leave($__internal_61d045ad80bcf93b575cc9df49cd03810b899fd355b726551122795253561ccf_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Schoolium\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
