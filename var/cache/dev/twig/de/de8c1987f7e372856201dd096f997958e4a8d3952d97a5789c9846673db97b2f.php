<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_010742bacd7922f8c0ef3868b50c1fd85132c12a1b910d45f0522f422e756bf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69211bae57353e70363bedefb51f6eb7e45d3795afe8d644f4d98c3401cb6f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69211bae57353e70363bedefb51f6eb7e45d3795afe8d644f4d98c3401cb6f0d->enter($__internal_69211bae57353e70363bedefb51f6eb7e45d3795afe8d644f4d98c3401cb6f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_604a131f44d727a6fec7846ff5cb68266382e4291e972273b036d87fc283f608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604a131f44d727a6fec7846ff5cb68266382e4291e972273b036d87fc283f608->enter($__internal_604a131f44d727a6fec7846ff5cb68266382e4291e972273b036d87fc283f608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69211bae57353e70363bedefb51f6eb7e45d3795afe8d644f4d98c3401cb6f0d->leave($__internal_69211bae57353e70363bedefb51f6eb7e45d3795afe8d644f4d98c3401cb6f0d_prof);

        
        $__internal_604a131f44d727a6fec7846ff5cb68266382e4291e972273b036d87fc283f608->leave($__internal_604a131f44d727a6fec7846ff5cb68266382e4291e972273b036d87fc283f608_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_892681d09213b08e7a237b063678ed5b2f8795f48ab356c3afabd26fe51fc162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892681d09213b08e7a237b063678ed5b2f8795f48ab356c3afabd26fe51fc162->enter($__internal_892681d09213b08e7a237b063678ed5b2f8795f48ab356c3afabd26fe51fc162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8391fc9fa1713f6944ae607141137af2fb5fa342883d0a7b89109c25c1abb973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8391fc9fa1713f6944ae607141137af2fb5fa342883d0a7b89109c25c1abb973->enter($__internal_8391fc9fa1713f6944ae607141137af2fb5fa342883d0a7b89109c25c1abb973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8391fc9fa1713f6944ae607141137af2fb5fa342883d0a7b89109c25c1abb973->leave($__internal_8391fc9fa1713f6944ae607141137af2fb5fa342883d0a7b89109c25c1abb973_prof);

        
        $__internal_892681d09213b08e7a237b063678ed5b2f8795f48ab356c3afabd26fe51fc162->leave($__internal_892681d09213b08e7a237b063678ed5b2f8795f48ab356c3afabd26fe51fc162_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_756371f746345553d3e0683832e77f3ab66284408ef072923e46194679bbcba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_756371f746345553d3e0683832e77f3ab66284408ef072923e46194679bbcba7->enter($__internal_756371f746345553d3e0683832e77f3ab66284408ef072923e46194679bbcba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f8fdddc29b45c81e97c68518aaf6afbf9f459e4add25f8e8e5ac2015dbbf79bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8fdddc29b45c81e97c68518aaf6afbf9f459e4add25f8e8e5ac2015dbbf79bc->enter($__internal_f8fdddc29b45c81e97c68518aaf6afbf9f459e4add25f8e8e5ac2015dbbf79bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f8fdddc29b45c81e97c68518aaf6afbf9f459e4add25f8e8e5ac2015dbbf79bc->leave($__internal_f8fdddc29b45c81e97c68518aaf6afbf9f459e4add25f8e8e5ac2015dbbf79bc_prof);

        
        $__internal_756371f746345553d3e0683832e77f3ab66284408ef072923e46194679bbcba7->leave($__internal_756371f746345553d3e0683832e77f3ab66284408ef072923e46194679bbcba7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_41f9c7168e79fe2ba797994b8a53492832ca349162c11fe4765333d500b041fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f9c7168e79fe2ba797994b8a53492832ca349162c11fe4765333d500b041fc->enter($__internal_41f9c7168e79fe2ba797994b8a53492832ca349162c11fe4765333d500b041fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aec23db3c7f337c021839cdb05d9a77d507c3c2db7c699f31493c04c350aa865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec23db3c7f337c021839cdb05d9a77d507c3c2db7c699f31493c04c350aa865->enter($__internal_aec23db3c7f337c021839cdb05d9a77d507c3c2db7c699f31493c04c350aa865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aec23db3c7f337c021839cdb05d9a77d507c3c2db7c699f31493c04c350aa865->leave($__internal_aec23db3c7f337c021839cdb05d9a77d507c3c2db7c699f31493c04c350aa865_prof);

        
        $__internal_41f9c7168e79fe2ba797994b8a53492832ca349162c11fe4765333d500b041fc->leave($__internal_41f9c7168e79fe2ba797994b8a53492832ca349162c11fe4765333d500b041fc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
