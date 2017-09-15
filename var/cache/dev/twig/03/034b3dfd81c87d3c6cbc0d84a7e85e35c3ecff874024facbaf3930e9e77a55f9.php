<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_ac12c574132227140b686f2370e565f8f8810500cd69524bf391681d60e32a52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efa0952897ca32f55f8d2c13b7737820573b86c465d81fce0cfd7886929c6d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa0952897ca32f55f8d2c13b7737820573b86c465d81fce0cfd7886929c6d03->enter($__internal_efa0952897ca32f55f8d2c13b7737820573b86c465d81fce0cfd7886929c6d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_3d87a0c6a29652656a3ea3e90bbebd71b4dc55538f51f5414fc906131ccdf4e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d87a0c6a29652656a3ea3e90bbebd71b4dc55538f51f5414fc906131ccdf4e0->enter($__internal_3d87a0c6a29652656a3ea3e90bbebd71b4dc55538f51f5414fc906131ccdf4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efa0952897ca32f55f8d2c13b7737820573b86c465d81fce0cfd7886929c6d03->leave($__internal_efa0952897ca32f55f8d2c13b7737820573b86c465d81fce0cfd7886929c6d03_prof);

        
        $__internal_3d87a0c6a29652656a3ea3e90bbebd71b4dc55538f51f5414fc906131ccdf4e0->leave($__internal_3d87a0c6a29652656a3ea3e90bbebd71b4dc55538f51f5414fc906131ccdf4e0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_215bcad560dea29993592a6f4dbfc9797eb60e02e73a4ad32920f08a7f2b6543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_215bcad560dea29993592a6f4dbfc9797eb60e02e73a4ad32920f08a7f2b6543->enter($__internal_215bcad560dea29993592a6f4dbfc9797eb60e02e73a4ad32920f08a7f2b6543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0db4581585685e79bf635a82f84e094604c81dd522e68c82a1367e6a82635895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db4581585685e79bf635a82f84e094604c81dd522e68c82a1367e6a82635895->enter($__internal_0db4581585685e79bf635a82f84e094604c81dd522e68c82a1367e6a82635895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0db4581585685e79bf635a82f84e094604c81dd522e68c82a1367e6a82635895->leave($__internal_0db4581585685e79bf635a82f84e094604c81dd522e68c82a1367e6a82635895_prof);

        
        $__internal_215bcad560dea29993592a6f4dbfc9797eb60e02e73a4ad32920f08a7f2b6543->leave($__internal_215bcad560dea29993592a6f4dbfc9797eb60e02e73a4ad32920f08a7f2b6543_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_55ca04d7142d139416477aa23a6c16bd8db4903b7c17e1c0c9e3b1c634b5fb94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ca04d7142d139416477aa23a6c16bd8db4903b7c17e1c0c9e3b1c634b5fb94->enter($__internal_55ca04d7142d139416477aa23a6c16bd8db4903b7c17e1c0c9e3b1c634b5fb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd2d5f63474e5b306b1919d5166ec4d580b26573b9a51c48388a968070e73785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2d5f63474e5b306b1919d5166ec4d580b26573b9a51c48388a968070e73785->enter($__internal_fd2d5f63474e5b306b1919d5166ec4d580b26573b9a51c48388a968070e73785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_fd2d5f63474e5b306b1919d5166ec4d580b26573b9a51c48388a968070e73785->leave($__internal_fd2d5f63474e5b306b1919d5166ec4d580b26573b9a51c48388a968070e73785_prof);

        
        $__internal_55ca04d7142d139416477aa23a6c16bd8db4903b7c17e1c0c9e3b1c634b5fb94->leave($__internal_55ca04d7142d139416477aa23a6c16bd8db4903b7c17e1c0c9e3b1c634b5fb94_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
