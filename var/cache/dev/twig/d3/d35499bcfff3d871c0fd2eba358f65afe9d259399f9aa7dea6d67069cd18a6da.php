<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_c3b7a7c8c14804fa82af7e9764f82f9533f1f0aab5d777390c7d2e1ea37812e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b23fc4e2244c8c0713d0a4dbbdbc894112da92349363e35f0a86b8cb95aaae69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23fc4e2244c8c0713d0a4dbbdbc894112da92349363e35f0a86b8cb95aaae69->enter($__internal_b23fc4e2244c8c0713d0a4dbbdbc894112da92349363e35f0a86b8cb95aaae69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_bcf4706772617940f75f6f7c021ff7f4cfc900b0ff1ee8a1e017b119fadac2ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf4706772617940f75f6f7c021ff7f4cfc900b0ff1ee8a1e017b119fadac2ce->enter($__internal_bcf4706772617940f75f6f7c021ff7f4cfc900b0ff1ee8a1e017b119fadac2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_b23fc4e2244c8c0713d0a4dbbdbc894112da92349363e35f0a86b8cb95aaae69->leave($__internal_b23fc4e2244c8c0713d0a4dbbdbc894112da92349363e35f0a86b8cb95aaae69_prof);

        
        $__internal_bcf4706772617940f75f6f7c021ff7f4cfc900b0ff1ee8a1e017b119fadac2ce->leave($__internal_bcf4706772617940f75f6f7c021ff7f4cfc900b0ff1ee8a1e017b119fadac2ce_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
