<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f483fb8eb43fd5139bc5a55397d4158c4140f40505b81b81151a3f167637455b extends Twig_Template
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
        $__internal_657283037871915149ccb3c49adc30d7ca2024695aac9eea8b01af6771d386dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657283037871915149ccb3c49adc30d7ca2024695aac9eea8b01af6771d386dd->enter($__internal_657283037871915149ccb3c49adc30d7ca2024695aac9eea8b01af6771d386dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_420fb6f5466af2408c83a6dc4197cb0bd5c6bfd047efb6fad9122e21f24d91de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420fb6f5466af2408c83a6dc4197cb0bd5c6bfd047efb6fad9122e21f24d91de->enter($__internal_420fb6f5466af2408c83a6dc4197cb0bd5c6bfd047efb6fad9122e21f24d91de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_657283037871915149ccb3c49adc30d7ca2024695aac9eea8b01af6771d386dd->leave($__internal_657283037871915149ccb3c49adc30d7ca2024695aac9eea8b01af6771d386dd_prof);

        
        $__internal_420fb6f5466af2408c83a6dc4197cb0bd5c6bfd047efb6fad9122e21f24d91de->leave($__internal_420fb6f5466af2408c83a6dc4197cb0bd5c6bfd047efb6fad9122e21f24d91de_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f0d28b6d1d3c64d97613a49089373b512acd6915fbb1808d375c8efe621e3124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d28b6d1d3c64d97613a49089373b512acd6915fbb1808d375c8efe621e3124->enter($__internal_f0d28b6d1d3c64d97613a49089373b512acd6915fbb1808d375c8efe621e3124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d2dd1a368a0ec002b190ffc3448cd5a78cb18d3f3c337b25ec1b3cec558e6739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2dd1a368a0ec002b190ffc3448cd5a78cb18d3f3c337b25ec1b3cec558e6739->enter($__internal_d2dd1a368a0ec002b190ffc3448cd5a78cb18d3f3c337b25ec1b3cec558e6739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d2dd1a368a0ec002b190ffc3448cd5a78cb18d3f3c337b25ec1b3cec558e6739->leave($__internal_d2dd1a368a0ec002b190ffc3448cd5a78cb18d3f3c337b25ec1b3cec558e6739_prof);

        
        $__internal_f0d28b6d1d3c64d97613a49089373b512acd6915fbb1808d375c8efe621e3124->leave($__internal_f0d28b6d1d3c64d97613a49089373b512acd6915fbb1808d375c8efe621e3124_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_38c43702f9750147636293347af177dc7c3460998fb30d5b565ea148284b3265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c43702f9750147636293347af177dc7c3460998fb30d5b565ea148284b3265->enter($__internal_38c43702f9750147636293347af177dc7c3460998fb30d5b565ea148284b3265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf92a6185d45620bf6e52d802dd12d5cae53c6656c1d9858fa44935331ea7e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf92a6185d45620bf6e52d802dd12d5cae53c6656c1d9858fa44935331ea7e33->enter($__internal_cf92a6185d45620bf6e52d802dd12d5cae53c6656c1d9858fa44935331ea7e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cf92a6185d45620bf6e52d802dd12d5cae53c6656c1d9858fa44935331ea7e33->leave($__internal_cf92a6185d45620bf6e52d802dd12d5cae53c6656c1d9858fa44935331ea7e33_prof);

        
        $__internal_38c43702f9750147636293347af177dc7c3460998fb30d5b565ea148284b3265->leave($__internal_38c43702f9750147636293347af177dc7c3460998fb30d5b565ea148284b3265_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0557d3e92bbae56d61b470b92f4d474c9d1ca0fa1542df862c7a8b51dd40679b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0557d3e92bbae56d61b470b92f4d474c9d1ca0fa1542df862c7a8b51dd40679b->enter($__internal_0557d3e92bbae56d61b470b92f4d474c9d1ca0fa1542df862c7a8b51dd40679b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_522ec5be2f0b2d3020fbf986c056c59d5b9295b180d8d1db7d3ee850a0eb5c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_522ec5be2f0b2d3020fbf986c056c59d5b9295b180d8d1db7d3ee850a0eb5c6c->enter($__internal_522ec5be2f0b2d3020fbf986c056c59d5b9295b180d8d1db7d3ee850a0eb5c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_522ec5be2f0b2d3020fbf986c056c59d5b9295b180d8d1db7d3ee850a0eb5c6c->leave($__internal_522ec5be2f0b2d3020fbf986c056c59d5b9295b180d8d1db7d3ee850a0eb5c6c_prof);

        
        $__internal_0557d3e92bbae56d61b470b92f4d474c9d1ca0fa1542df862c7a8b51dd40679b->leave($__internal_0557d3e92bbae56d61b470b92f4d474c9d1ca0fa1542df862c7a8b51dd40679b_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
