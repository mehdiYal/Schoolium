<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_fc9abcb20a4afe17de75a55851aa04d226fae91a9ecf8de642b08493f42edfa9 extends Twig_Template
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
        $__internal_ea9cb3118ed0970a81326f2557cd246f2cef5494bf90681cb1ceb94b0b5e047a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea9cb3118ed0970a81326f2557cd246f2cef5494bf90681cb1ceb94b0b5e047a->enter($__internal_ea9cb3118ed0970a81326f2557cd246f2cef5494bf90681cb1ceb94b0b5e047a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_93d6294c9f0287d2b16799ce80010a7c8344953ea2c01a825cab8800bea5e52f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d6294c9f0287d2b16799ce80010a7c8344953ea2c01a825cab8800bea5e52f->enter($__internal_93d6294c9f0287d2b16799ce80010a7c8344953ea2c01a825cab8800bea5e52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ea9cb3118ed0970a81326f2557cd246f2cef5494bf90681cb1ceb94b0b5e047a->leave($__internal_ea9cb3118ed0970a81326f2557cd246f2cef5494bf90681cb1ceb94b0b5e047a_prof);

        
        $__internal_93d6294c9f0287d2b16799ce80010a7c8344953ea2c01a825cab8800bea5e52f->leave($__internal_93d6294c9f0287d2b16799ce80010a7c8344953ea2c01a825cab8800bea5e52f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc1f3cf7d2a7aa26d081f5806708f62713ef18eae8ceeac7679e7c8be7b8de30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc1f3cf7d2a7aa26d081f5806708f62713ef18eae8ceeac7679e7c8be7b8de30->enter($__internal_bc1f3cf7d2a7aa26d081f5806708f62713ef18eae8ceeac7679e7c8be7b8de30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d579a634861b65b091c43a248b5d9a2c7e4eab8f5e6f39d84828b019367d807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d579a634861b65b091c43a248b5d9a2c7e4eab8f5e6f39d84828b019367d807->enter($__internal_3d579a634861b65b091c43a248b5d9a2c7e4eab8f5e6f39d84828b019367d807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3d579a634861b65b091c43a248b5d9a2c7e4eab8f5e6f39d84828b019367d807->leave($__internal_3d579a634861b65b091c43a248b5d9a2c7e4eab8f5e6f39d84828b019367d807_prof);

        
        $__internal_bc1f3cf7d2a7aa26d081f5806708f62713ef18eae8ceeac7679e7c8be7b8de30->leave($__internal_bc1f3cf7d2a7aa26d081f5806708f62713ef18eae8ceeac7679e7c8be7b8de30_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f488e8344f673d4c923b1fbba293b49468e6d885fb8cab651388c1d45fb5db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f488e8344f673d4c923b1fbba293b49468e6d885fb8cab651388c1d45fb5db3->enter($__internal_0f488e8344f673d4c923b1fbba293b49468e6d885fb8cab651388c1d45fb5db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2f6bccb1d56724ea7cfdbf1e398718540c6d9644cadabc7f10693b24bfd1d3a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6bccb1d56724ea7cfdbf1e398718540c6d9644cadabc7f10693b24bfd1d3a2->enter($__internal_2f6bccb1d56724ea7cfdbf1e398718540c6d9644cadabc7f10693b24bfd1d3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2f6bccb1d56724ea7cfdbf1e398718540c6d9644cadabc7f10693b24bfd1d3a2->leave($__internal_2f6bccb1d56724ea7cfdbf1e398718540c6d9644cadabc7f10693b24bfd1d3a2_prof);

        
        $__internal_0f488e8344f673d4c923b1fbba293b49468e6d885fb8cab651388c1d45fb5db3->leave($__internal_0f488e8344f673d4c923b1fbba293b49468e6d885fb8cab651388c1d45fb5db3_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_26c0b1d6accb201ca207bb043611bd843d9d24c10886983d90ea0ce8593d32f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c0b1d6accb201ca207bb043611bd843d9d24c10886983d90ea0ce8593d32f5->enter($__internal_26c0b1d6accb201ca207bb043611bd843d9d24c10886983d90ea0ce8593d32f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a4df5f0ee9861e2640fc9b72cb14a52a6f3b68ef82858664f40fc844be5c25a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4df5f0ee9861e2640fc9b72cb14a52a6f3b68ef82858664f40fc844be5c25a->enter($__internal_9a4df5f0ee9861e2640fc9b72cb14a52a6f3b68ef82858664f40fc844be5c25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9a4df5f0ee9861e2640fc9b72cb14a52a6f3b68ef82858664f40fc844be5c25a->leave($__internal_9a4df5f0ee9861e2640fc9b72cb14a52a6f3b68ef82858664f40fc844be5c25a_prof);

        
        $__internal_26c0b1d6accb201ca207bb043611bd843d9d24c10886983d90ea0ce8593d32f5->leave($__internal_26c0b1d6accb201ca207bb043611bd843d9d24c10886983d90ea0ce8593d32f5_prof);

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
