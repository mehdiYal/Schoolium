<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0ef46ff3e00be850b375145c4de69a72941605b1b30816a42d1a36aa92bc080f extends Twig_Template
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
        $__internal_764bbff6ec3d74ea6c4d250799372491d0eb022cb74618c6be46d2c8def5cc59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_764bbff6ec3d74ea6c4d250799372491d0eb022cb74618c6be46d2c8def5cc59->enter($__internal_764bbff6ec3d74ea6c4d250799372491d0eb022cb74618c6be46d2c8def5cc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b363a86dcca94a1690b63fe6e25e049bfe4ebd7e58f5eccc618e8609544cf534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b363a86dcca94a1690b63fe6e25e049bfe4ebd7e58f5eccc618e8609544cf534->enter($__internal_b363a86dcca94a1690b63fe6e25e049bfe4ebd7e58f5eccc618e8609544cf534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_764bbff6ec3d74ea6c4d250799372491d0eb022cb74618c6be46d2c8def5cc59->leave($__internal_764bbff6ec3d74ea6c4d250799372491d0eb022cb74618c6be46d2c8def5cc59_prof);

        
        $__internal_b363a86dcca94a1690b63fe6e25e049bfe4ebd7e58f5eccc618e8609544cf534->leave($__internal_b363a86dcca94a1690b63fe6e25e049bfe4ebd7e58f5eccc618e8609544cf534_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a92923c955bd59c614034c141cce375208d9e828efe82a81aab2ee757132eae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a92923c955bd59c614034c141cce375208d9e828efe82a81aab2ee757132eae->enter($__internal_8a92923c955bd59c614034c141cce375208d9e828efe82a81aab2ee757132eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_06c3f14e0ff86574ebd626d5aeece6f5c40fa52e8034e824a45659e03aa5179a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c3f14e0ff86574ebd626d5aeece6f5c40fa52e8034e824a45659e03aa5179a->enter($__internal_06c3f14e0ff86574ebd626d5aeece6f5c40fa52e8034e824a45659e03aa5179a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_06c3f14e0ff86574ebd626d5aeece6f5c40fa52e8034e824a45659e03aa5179a->leave($__internal_06c3f14e0ff86574ebd626d5aeece6f5c40fa52e8034e824a45659e03aa5179a_prof);

        
        $__internal_8a92923c955bd59c614034c141cce375208d9e828efe82a81aab2ee757132eae->leave($__internal_8a92923c955bd59c614034c141cce375208d9e828efe82a81aab2ee757132eae_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_81c72420ba676a0d10739611b585ec3bca9eca16c22a8d248cb95d939c1ac643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81c72420ba676a0d10739611b585ec3bca9eca16c22a8d248cb95d939c1ac643->enter($__internal_81c72420ba676a0d10739611b585ec3bca9eca16c22a8d248cb95d939c1ac643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_99ba288b78f58605b93a476220362132933405f2b89b8d728c88c84010052909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ba288b78f58605b93a476220362132933405f2b89b8d728c88c84010052909->enter($__internal_99ba288b78f58605b93a476220362132933405f2b89b8d728c88c84010052909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_99ba288b78f58605b93a476220362132933405f2b89b8d728c88c84010052909->leave($__internal_99ba288b78f58605b93a476220362132933405f2b89b8d728c88c84010052909_prof);

        
        $__internal_81c72420ba676a0d10739611b585ec3bca9eca16c22a8d248cb95d939c1ac643->leave($__internal_81c72420ba676a0d10739611b585ec3bca9eca16c22a8d248cb95d939c1ac643_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_69d4f976cbab6206ea3796462a19d5dd1a476f9ef4bf797bd34bea0fbd0db77f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d4f976cbab6206ea3796462a19d5dd1a476f9ef4bf797bd34bea0fbd0db77f->enter($__internal_69d4f976cbab6206ea3796462a19d5dd1a476f9ef4bf797bd34bea0fbd0db77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d71500a1442eb53663887af26be09fbed584ca81369e68be69d090ed8092ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d71500a1442eb53663887af26be09fbed584ca81369e68be69d090ed8092ef6->enter($__internal_1d71500a1442eb53663887af26be09fbed584ca81369e68be69d090ed8092ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1d71500a1442eb53663887af26be09fbed584ca81369e68be69d090ed8092ef6->leave($__internal_1d71500a1442eb53663887af26be09fbed584ca81369e68be69d090ed8092ef6_prof);

        
        $__internal_69d4f976cbab6206ea3796462a19d5dd1a476f9ef4bf797bd34bea0fbd0db77f->leave($__internal_69d4f976cbab6206ea3796462a19d5dd1a476f9ef4bf797bd34bea0fbd0db77f_prof);

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
", "@Twig/layout.html.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
