<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c1c6d9174d573178796b3159335813abc7dff9cbd033779c19d1ee5b9c5fa108 extends Twig_Template
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
        $__internal_86a89febb9d8a983005da40326d2adba55c1b92627447426a9991096f045c874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86a89febb9d8a983005da40326d2adba55c1b92627447426a9991096f045c874->enter($__internal_86a89febb9d8a983005da40326d2adba55c1b92627447426a9991096f045c874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_8f5c3ffcc3ad70a7da89f5a35e7349743667772878460cd55bfa5e20f943c3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f5c3ffcc3ad70a7da89f5a35e7349743667772878460cd55bfa5e20f943c3b6->enter($__internal_8f5c3ffcc3ad70a7da89f5a35e7349743667772878460cd55bfa5e20f943c3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_86a89febb9d8a983005da40326d2adba55c1b92627447426a9991096f045c874->leave($__internal_86a89febb9d8a983005da40326d2adba55c1b92627447426a9991096f045c874_prof);

        
        $__internal_8f5c3ffcc3ad70a7da89f5a35e7349743667772878460cd55bfa5e20f943c3b6->leave($__internal_8f5c3ffcc3ad70a7da89f5a35e7349743667772878460cd55bfa5e20f943c3b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
