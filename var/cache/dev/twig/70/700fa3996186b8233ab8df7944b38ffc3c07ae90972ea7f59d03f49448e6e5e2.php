<?php

/* travailrealise/add.html.twig */
class __TwigTemplate_785c53ebcdba6365ea820da4abc22a5df3d34cb49d781467a53b3afe74b8da79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "travailrealise/add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_867168d9f8e87357fb11c7f85a79583887c88037f364b840c667a48ab150e20b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867168d9f8e87357fb11c7f85a79583887c88037f364b840c667a48ab150e20b->enter($__internal_867168d9f8e87357fb11c7f85a79583887c88037f364b840c667a48ab150e20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "travailrealise/add.html.twig"));

        $__internal_611a46e8715268db0e1617c48cfbff4a3ceaac39c3a2842217244d1ce6032ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_611a46e8715268db0e1617c48cfbff4a3ceaac39c3a2842217244d1ce6032ee5->enter($__internal_611a46e8715268db0e1617c48cfbff4a3ceaac39c3a2842217244d1ce6032ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "travailrealise/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_867168d9f8e87357fb11c7f85a79583887c88037f364b840c667a48ab150e20b->leave($__internal_867168d9f8e87357fb11c7f85a79583887c88037f364b840c667a48ab150e20b_prof);

        
        $__internal_611a46e8715268db0e1617c48cfbff4a3ceaac39c3a2842217244d1ce6032ee5->leave($__internal_611a46e8715268db0e1617c48cfbff4a3ceaac39c3a2842217244d1ce6032ee5_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b997ed3dd0ff4cd7426642ed0aad6c85f7856c3db3d17fdebf4d639b642e542d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b997ed3dd0ff4cd7426642ed0aad6c85f7856c3db3d17fdebf4d639b642e542d->enter($__internal_b997ed3dd0ff4cd7426642ed0aad6c85f7856c3db3d17fdebf4d639b642e542d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09f78edb0fe59ae9ede92a90fa65916b24f4f9b654f9bb16f746eb20484a2c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f78edb0fe59ae9ede92a90fa65916b24f4f9b654f9bb16f746eb20484a2c78->enter($__internal_09f78edb0fe59ae9ede92a90fa65916b24f4f9b654f9bb16f746eb20484a2c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">
";
        if ($this->env->isDebug()) {
            // line 6
            \Symfony\Component\VarDumper\VarDumper::dump(($context["data"] ?? $this->getContext($context, "data")));
        }
        // line 7
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t
\t\t<button type=\"submit\">Valider</button>
\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_09f78edb0fe59ae9ede92a90fa65916b24f4f9b654f9bb16f746eb20484a2c78->leave($__internal_09f78edb0fe59ae9ede92a90fa65916b24f4f9b654f9bb16f746eb20484a2c78_prof);

        
        $__internal_b997ed3dd0ff4cd7426642ed0aad6c85f7856c3db3d17fdebf4d639b642e542d->leave($__internal_b997ed3dd0ff4cd7426642ed0aad6c85f7856c3db3d17fdebf4d639b642e542d_prof);

    }

    public function getTemplateName()
    {
        return "travailrealise/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  56 => 7,  53 => 6,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}
<div class=\"container\">
{% dump(data) %}
\t{{ form_start(form) }}
\t\t
\t\t<button type=\"submit\">Valider</button>
\t{{ form_end(form) }}
</div>

{% endblock %}", "travailrealise/add.html.twig", "C:\\wamp64\\www\\Schoolium\\app\\Resources\\views\\travailrealise\\add.html.twig");
    }
}
