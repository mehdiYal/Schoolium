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
        $__internal_7b62dc237622e73758f95e5a880930098e39ddb95b87d2a420b0c782a19ae57d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b62dc237622e73758f95e5a880930098e39ddb95b87d2a420b0c782a19ae57d->enter($__internal_7b62dc237622e73758f95e5a880930098e39ddb95b87d2a420b0c782a19ae57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c47edf3d3e4312dd95d5c70e15ac698d80fb5c829567ae78f453a56404b68c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47edf3d3e4312dd95d5c70e15ac698d80fb5c829567ae78f453a56404b68c3b->enter($__internal_c47edf3d3e4312dd95d5c70e15ac698d80fb5c829567ae78f453a56404b68c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_7b62dc237622e73758f95e5a880930098e39ddb95b87d2a420b0c782a19ae57d->leave($__internal_7b62dc237622e73758f95e5a880930098e39ddb95b87d2a420b0c782a19ae57d_prof);

        
        $__internal_c47edf3d3e4312dd95d5c70e15ac698d80fb5c829567ae78f453a56404b68c3b->leave($__internal_c47edf3d3e4312dd95d5c70e15ac698d80fb5c829567ae78f453a56404b68c3b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fad1241be42172a2892b303018cf79c955d539a151440408792504e9fc48c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fad1241be42172a2892b303018cf79c955d539a151440408792504e9fc48c39->enter($__internal_5fad1241be42172a2892b303018cf79c955d539a151440408792504e9fc48c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b9a2d1889ff245cfa96d0028d639e01ea36e88ba2ba0e87f40ebf1bf0a4fc5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a2d1889ff245cfa96d0028d639e01ea36e88ba2ba0e87f40ebf1bf0a4fc5cc->enter($__internal_b9a2d1889ff245cfa96d0028d639e01ea36e88ba2ba0e87f40ebf1bf0a4fc5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b9a2d1889ff245cfa96d0028d639e01ea36e88ba2ba0e87f40ebf1bf0a4fc5cc->leave($__internal_b9a2d1889ff245cfa96d0028d639e01ea36e88ba2ba0e87f40ebf1bf0a4fc5cc_prof);

        
        $__internal_5fad1241be42172a2892b303018cf79c955d539a151440408792504e9fc48c39->leave($__internal_5fad1241be42172a2892b303018cf79c955d539a151440408792504e9fc48c39_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_032de61dcf56e26fe411fc42020cc0cebe97e1084c28e759912b59ddeb2ac390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032de61dcf56e26fe411fc42020cc0cebe97e1084c28e759912b59ddeb2ac390->enter($__internal_032de61dcf56e26fe411fc42020cc0cebe97e1084c28e759912b59ddeb2ac390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6042cf04c2179359d89f2f2986b894aabb8c436fab52a2050ff596b58a466cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6042cf04c2179359d89f2f2986b894aabb8c436fab52a2050ff596b58a466cd4->enter($__internal_6042cf04c2179359d89f2f2986b894aabb8c436fab52a2050ff596b58a466cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6042cf04c2179359d89f2f2986b894aabb8c436fab52a2050ff596b58a466cd4->leave($__internal_6042cf04c2179359d89f2f2986b894aabb8c436fab52a2050ff596b58a466cd4_prof);

        
        $__internal_032de61dcf56e26fe411fc42020cc0cebe97e1084c28e759912b59ddeb2ac390->leave($__internal_032de61dcf56e26fe411fc42020cc0cebe97e1084c28e759912b59ddeb2ac390_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb157e4265777971ce93d111c9b0742cbeceae3d55c250f94ff675308cee9b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb157e4265777971ce93d111c9b0742cbeceae3d55c250f94ff675308cee9b48->enter($__internal_fb157e4265777971ce93d111c9b0742cbeceae3d55c250f94ff675308cee9b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a580b7a1fe1327525252698e61e803ea4f595df4fbadf00f904da743d6ee0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a580b7a1fe1327525252698e61e803ea4f595df4fbadf00f904da743d6ee0f9->enter($__internal_5a580b7a1fe1327525252698e61e803ea4f595df4fbadf00f904da743d6ee0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5a580b7a1fe1327525252698e61e803ea4f595df4fbadf00f904da743d6ee0f9->leave($__internal_5a580b7a1fe1327525252698e61e803ea4f595df4fbadf00f904da743d6ee0f9_prof);

        
        $__internal_fb157e4265777971ce93d111c9b0742cbeceae3d55c250f94ff675308cee9b48->leave($__internal_fb157e4265777971ce93d111c9b0742cbeceae3d55c250f94ff675308cee9b48_prof);

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
