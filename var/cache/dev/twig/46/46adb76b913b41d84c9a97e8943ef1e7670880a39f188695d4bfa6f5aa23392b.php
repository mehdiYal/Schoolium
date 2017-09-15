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
        $__internal_9d311a628e8caa279fb1eccb14479781e8e64255d65987244042305bfea63cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d311a628e8caa279fb1eccb14479781e8e64255d65987244042305bfea63cd4->enter($__internal_9d311a628e8caa279fb1eccb14479781e8e64255d65987244042305bfea63cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_604025438e546d660a3d2a49a68b270f07c43edc4ec9a256941de112cc299e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604025438e546d660a3d2a49a68b270f07c43edc4ec9a256941de112cc299e96->enter($__internal_604025438e546d660a3d2a49a68b270f07c43edc4ec9a256941de112cc299e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d311a628e8caa279fb1eccb14479781e8e64255d65987244042305bfea63cd4->leave($__internal_9d311a628e8caa279fb1eccb14479781e8e64255d65987244042305bfea63cd4_prof);

        
        $__internal_604025438e546d660a3d2a49a68b270f07c43edc4ec9a256941de112cc299e96->leave($__internal_604025438e546d660a3d2a49a68b270f07c43edc4ec9a256941de112cc299e96_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_667b8e5f047fc6395fe5f175a2c990c67bae97bbaa0f6ad791a4ef2a9e5ff6ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_667b8e5f047fc6395fe5f175a2c990c67bae97bbaa0f6ad791a4ef2a9e5ff6ff->enter($__internal_667b8e5f047fc6395fe5f175a2c990c67bae97bbaa0f6ad791a4ef2a9e5ff6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1fd06578a6783fb9529675b02df187b76768a2ae8da22f36c77b7ccbec5830c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd06578a6783fb9529675b02df187b76768a2ae8da22f36c77b7ccbec5830c9->enter($__internal_1fd06578a6783fb9529675b02df187b76768a2ae8da22f36c77b7ccbec5830c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1fd06578a6783fb9529675b02df187b76768a2ae8da22f36c77b7ccbec5830c9->leave($__internal_1fd06578a6783fb9529675b02df187b76768a2ae8da22f36c77b7ccbec5830c9_prof);

        
        $__internal_667b8e5f047fc6395fe5f175a2c990c67bae97bbaa0f6ad791a4ef2a9e5ff6ff->leave($__internal_667b8e5f047fc6395fe5f175a2c990c67bae97bbaa0f6ad791a4ef2a9e5ff6ff_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5474c9ab9d0d63c0e57d48d20a0f03c258dc4c99660ef31b48b8c9b9b03d528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5474c9ab9d0d63c0e57d48d20a0f03c258dc4c99660ef31b48b8c9b9b03d528->enter($__internal_c5474c9ab9d0d63c0e57d48d20a0f03c258dc4c99660ef31b48b8c9b9b03d528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_429ede8b4614f2c2315475e89dd78d6cd1478c7f33a5add7a2d1e803a4f5ab89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429ede8b4614f2c2315475e89dd78d6cd1478c7f33a5add7a2d1e803a4f5ab89->enter($__internal_429ede8b4614f2c2315475e89dd78d6cd1478c7f33a5add7a2d1e803a4f5ab89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_429ede8b4614f2c2315475e89dd78d6cd1478c7f33a5add7a2d1e803a4f5ab89->leave($__internal_429ede8b4614f2c2315475e89dd78d6cd1478c7f33a5add7a2d1e803a4f5ab89_prof);

        
        $__internal_c5474c9ab9d0d63c0e57d48d20a0f03c258dc4c99660ef31b48b8c9b9b03d528->leave($__internal_c5474c9ab9d0d63c0e57d48d20a0f03c258dc4c99660ef31b48b8c9b9b03d528_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b502ae7ce7b6c93c8cf557056c27339a15e8e59e79014a553a7e678c68995a08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b502ae7ce7b6c93c8cf557056c27339a15e8e59e79014a553a7e678c68995a08->enter($__internal_b502ae7ce7b6c93c8cf557056c27339a15e8e59e79014a553a7e678c68995a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae21b4f6f97abe50e4437350c34e29f23c762dc04da99bc1b169cb220c6a5686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae21b4f6f97abe50e4437350c34e29f23c762dc04da99bc1b169cb220c6a5686->enter($__internal_ae21b4f6f97abe50e4437350c34e29f23c762dc04da99bc1b169cb220c6a5686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ae21b4f6f97abe50e4437350c34e29f23c762dc04da99bc1b169cb220c6a5686->leave($__internal_ae21b4f6f97abe50e4437350c34e29f23c762dc04da99bc1b169cb220c6a5686_prof);

        
        $__internal_b502ae7ce7b6c93c8cf557056c27339a15e8e59e79014a553a7e678c68995a08->leave($__internal_b502ae7ce7b6c93c8cf557056c27339a15e8e59e79014a553a7e678c68995a08_prof);

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
