<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_a0884b6f078c15924d0a6c228c19cfb7876a60a8da1fe1868aebc9c9300f5a0a extends Twig_Template
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
        $__internal_eae0f2e1c1a055c60adc4cb2516cbadf0cc6e39953d791fb22617bcdc41218c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eae0f2e1c1a055c60adc4cb2516cbadf0cc6e39953d791fb22617bcdc41218c8->enter($__internal_eae0f2e1c1a055c60adc4cb2516cbadf0cc6e39953d791fb22617bcdc41218c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f81764e377265732059241e42524d580ea08c6010485701f33b4b1531c0b4d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81764e377265732059241e42524d580ea08c6010485701f33b4b1531c0b4d44->enter($__internal_f81764e377265732059241e42524d580ea08c6010485701f33b4b1531c0b4d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_eae0f2e1c1a055c60adc4cb2516cbadf0cc6e39953d791fb22617bcdc41218c8->leave($__internal_eae0f2e1c1a055c60adc4cb2516cbadf0cc6e39953d791fb22617bcdc41218c8_prof);

        
        $__internal_f81764e377265732059241e42524d580ea08c6010485701f33b4b1531c0b4d44->leave($__internal_f81764e377265732059241e42524d580ea08c6010485701f33b4b1531c0b4d44_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f681b7950d789046849045f94e14758315f2840b1c7fe0a92cec109ba8be8a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f681b7950d789046849045f94e14758315f2840b1c7fe0a92cec109ba8be8a9a->enter($__internal_f681b7950d789046849045f94e14758315f2840b1c7fe0a92cec109ba8be8a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2051c320e2f1f588e71501394f2da6ba649c321111a114d12e5956cf15c7628c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2051c320e2f1f588e71501394f2da6ba649c321111a114d12e5956cf15c7628c->enter($__internal_2051c320e2f1f588e71501394f2da6ba649c321111a114d12e5956cf15c7628c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2051c320e2f1f588e71501394f2da6ba649c321111a114d12e5956cf15c7628c->leave($__internal_2051c320e2f1f588e71501394f2da6ba649c321111a114d12e5956cf15c7628c_prof);

        
        $__internal_f681b7950d789046849045f94e14758315f2840b1c7fe0a92cec109ba8be8a9a->leave($__internal_f681b7950d789046849045f94e14758315f2840b1c7fe0a92cec109ba8be8a9a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9536c3c507d5b0d5744d6fc60a63fce6c35751c43987a0b2a7e0793c0977cd20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9536c3c507d5b0d5744d6fc60a63fce6c35751c43987a0b2a7e0793c0977cd20->enter($__internal_9536c3c507d5b0d5744d6fc60a63fce6c35751c43987a0b2a7e0793c0977cd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8c7dc4970fa1afce77b035d2aac00c864c26246a7265ddf202a690904d7bb56d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7dc4970fa1afce77b035d2aac00c864c26246a7265ddf202a690904d7bb56d->enter($__internal_8c7dc4970fa1afce77b035d2aac00c864c26246a7265ddf202a690904d7bb56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8c7dc4970fa1afce77b035d2aac00c864c26246a7265ddf202a690904d7bb56d->leave($__internal_8c7dc4970fa1afce77b035d2aac00c864c26246a7265ddf202a690904d7bb56d_prof);

        
        $__internal_9536c3c507d5b0d5744d6fc60a63fce6c35751c43987a0b2a7e0793c0977cd20->leave($__internal_9536c3c507d5b0d5744d6fc60a63fce6c35751c43987a0b2a7e0793c0977cd20_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_32bbbe3fd0971f5d399908875b37c2e7a65e29c64eec9f7f79a66963731ddc07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32bbbe3fd0971f5d399908875b37c2e7a65e29c64eec9f7f79a66963731ddc07->enter($__internal_32bbbe3fd0971f5d399908875b37c2e7a65e29c64eec9f7f79a66963731ddc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_836810c9278d2572087986faae5cca18163c6e28ab8d477c464af6b7b4ff95ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836810c9278d2572087986faae5cca18163c6e28ab8d477c464af6b7b4ff95ff->enter($__internal_836810c9278d2572087986faae5cca18163c6e28ab8d477c464af6b7b4ff95ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_836810c9278d2572087986faae5cca18163c6e28ab8d477c464af6b7b4ff95ff->leave($__internal_836810c9278d2572087986faae5cca18163c6e28ab8d477c464af6b7b4ff95ff_prof);

        
        $__internal_32bbbe3fd0971f5d399908875b37c2e7a65e29c64eec9f7f79a66963731ddc07->leave($__internal_32bbbe3fd0971f5d399908875b37c2e7a65e29c64eec9f7f79a66963731ddc07_prof);

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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\Schoolium\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
