<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5822d96dc649f46e30dff249a3a71de6a19ae062cb782a290b55e829dac1467e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de0c429ff9701e51da2016e3ef4b49cc61d28158110cb5b97ce7252c3de9da15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de0c429ff9701e51da2016e3ef4b49cc61d28158110cb5b97ce7252c3de9da15->enter($__internal_de0c429ff9701e51da2016e3ef4b49cc61d28158110cb5b97ce7252c3de9da15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4405ea43721f386146118e4db4f94cba0ff93af4b9ad7762ab0a9f27b3fc6123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4405ea43721f386146118e4db4f94cba0ff93af4b9ad7762ab0a9f27b3fc6123->enter($__internal_4405ea43721f386146118e4db4f94cba0ff93af4b9ad7762ab0a9f27b3fc6123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_de0c429ff9701e51da2016e3ef4b49cc61d28158110cb5b97ce7252c3de9da15->leave($__internal_de0c429ff9701e51da2016e3ef4b49cc61d28158110cb5b97ce7252c3de9da15_prof);

        
        $__internal_4405ea43721f386146118e4db4f94cba0ff93af4b9ad7762ab0a9f27b3fc6123->leave($__internal_4405ea43721f386146118e4db4f94cba0ff93af4b9ad7762ab0a9f27b3fc6123_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1791218ce8b02dd43b46a206e88f1940ce3a8daacf9a176cc9280c26f870712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1791218ce8b02dd43b46a206e88f1940ce3a8daacf9a176cc9280c26f870712->enter($__internal_c1791218ce8b02dd43b46a206e88f1940ce3a8daacf9a176cc9280c26f870712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_41b3b35ab7332a1eeb5cc149a8dc583bd5d043573c7153f735eadf1e15d42a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b3b35ab7332a1eeb5cc149a8dc583bd5d043573c7153f735eadf1e15d42a8d->enter($__internal_41b3b35ab7332a1eeb5cc149a8dc583bd5d043573c7153f735eadf1e15d42a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_41b3b35ab7332a1eeb5cc149a8dc583bd5d043573c7153f735eadf1e15d42a8d->leave($__internal_41b3b35ab7332a1eeb5cc149a8dc583bd5d043573c7153f735eadf1e15d42a8d_prof);

        
        $__internal_c1791218ce8b02dd43b46a206e88f1940ce3a8daacf9a176cc9280c26f870712->leave($__internal_c1791218ce8b02dd43b46a206e88f1940ce3a8daacf9a176cc9280c26f870712_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a55337bb777f311596763d202579a52fa811dd2d6a3d606a9ed54ce32d437df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a55337bb777f311596763d202579a52fa811dd2d6a3d606a9ed54ce32d437df7->enter($__internal_a55337bb777f311596763d202579a52fa811dd2d6a3d606a9ed54ce32d437df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_15d8056a38629bcffc906512daab20cfa624b1c2cd9ea0ef9233f74f54e38afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d8056a38629bcffc906512daab20cfa624b1c2cd9ea0ef9233f74f54e38afe->enter($__internal_15d8056a38629bcffc906512daab20cfa624b1c2cd9ea0ef9233f74f54e38afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_15d8056a38629bcffc906512daab20cfa624b1c2cd9ea0ef9233f74f54e38afe->leave($__internal_15d8056a38629bcffc906512daab20cfa624b1c2cd9ea0ef9233f74f54e38afe_prof);

        
        $__internal_a55337bb777f311596763d202579a52fa811dd2d6a3d606a9ed54ce32d437df7->leave($__internal_a55337bb777f311596763d202579a52fa811dd2d6a3d606a9ed54ce32d437df7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf71227934d4c32f68114d3e86bfb7d18a662df56d559d0cfa8383c51b15414f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf71227934d4c32f68114d3e86bfb7d18a662df56d559d0cfa8383c51b15414f->enter($__internal_bf71227934d4c32f68114d3e86bfb7d18a662df56d559d0cfa8383c51b15414f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e6c7f6c4777e3d51e97e558547a9aa06b40df5af49b9a018ea3b6b4a1ce29af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6c7f6c4777e3d51e97e558547a9aa06b40df5af49b9a018ea3b6b4a1ce29af->enter($__internal_0e6c7f6c4777e3d51e97e558547a9aa06b40df5af49b9a018ea3b6b4a1ce29af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0e6c7f6c4777e3d51e97e558547a9aa06b40df5af49b9a018ea3b6b4a1ce29af->leave($__internal_0e6c7f6c4777e3d51e97e558547a9aa06b40df5af49b9a018ea3b6b4a1ce29af_prof);

        
        $__internal_bf71227934d4c32f68114d3e86bfb7d18a662df56d559d0cfa8383c51b15414f->leave($__internal_bf71227934d4c32f68114d3e86bfb7d18a662df56d559d0cfa8383c51b15414f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
