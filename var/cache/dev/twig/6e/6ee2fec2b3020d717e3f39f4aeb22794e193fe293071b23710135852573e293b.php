<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_c808ed2685a1322cf1b07c38b6b867ae1d16a489f6934942730b5b0e15162420 extends Twig_Template
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
        $__internal_232e0830787909bd390f43b848c52296e64281fb8e0e69bb2b16b0ff25bb19cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232e0830787909bd390f43b848c52296e64281fb8e0e69bb2b16b0ff25bb19cb->enter($__internal_232e0830787909bd390f43b848c52296e64281fb8e0e69bb2b16b0ff25bb19cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_457c7c6656991ce99906df73627432c2206c69b41ec82c3fe57e9cf84ba41f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457c7c6656991ce99906df73627432c2206c69b41ec82c3fe57e9cf84ba41f6d->enter($__internal_457c7c6656991ce99906df73627432c2206c69b41ec82c3fe57e9cf84ba41f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_232e0830787909bd390f43b848c52296e64281fb8e0e69bb2b16b0ff25bb19cb->leave($__internal_232e0830787909bd390f43b848c52296e64281fb8e0e69bb2b16b0ff25bb19cb_prof);

        
        $__internal_457c7c6656991ce99906df73627432c2206c69b41ec82c3fe57e9cf84ba41f6d->leave($__internal_457c7c6656991ce99906df73627432c2206c69b41ec82c3fe57e9cf84ba41f6d_prof);

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
", "@WebProfiler/Profiler/header.html.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
