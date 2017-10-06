<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_ea1018697a51d1ccf3cbed677966ff45c0cc8452ecae2eaac543aef93fe6dcf0 extends Twig_Template
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
        $__internal_c273a6c2a18d9151864b6c36053a0ff819adbcb2f1edb80ddae6b236d0f03517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c273a6c2a18d9151864b6c36053a0ff819adbcb2f1edb80ddae6b236d0f03517->enter($__internal_c273a6c2a18d9151864b6c36053a0ff819adbcb2f1edb80ddae6b236d0f03517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_b2f59f80fd52a69fe5320c5f6d22b9f5734f18308f591d2ae56559bf01143888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f59f80fd52a69fe5320c5f6d22b9f5734f18308f591d2ae56559bf01143888->enter($__internal_b2f59f80fd52a69fe5320c5f6d22b9f5734f18308f591d2ae56559bf01143888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_c273a6c2a18d9151864b6c36053a0ff819adbcb2f1edb80ddae6b236d0f03517->leave($__internal_c273a6c2a18d9151864b6c36053a0ff819adbcb2f1edb80ddae6b236d0f03517_prof);

        
        $__internal_b2f59f80fd52a69fe5320c5f6d22b9f5734f18308f591d2ae56559bf01143888->leave($__internal_b2f59f80fd52a69fe5320c5f6d22b9f5734f18308f591d2ae56559bf01143888_prof);

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
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\Schoolium\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
