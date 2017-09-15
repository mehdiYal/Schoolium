<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_69a85e0faeb202fdc80d16685991e6004823954fd1e5ed4efc384fb53cb8c638 extends Twig_Template
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
        $__internal_9747cded46360886b5a2f07dc019b1b8b48bafccce8afc1d39fae8d183b7f4ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9747cded46360886b5a2f07dc019b1b8b48bafccce8afc1d39fae8d183b7f4ec->enter($__internal_9747cded46360886b5a2f07dc019b1b8b48bafccce8afc1d39fae8d183b7f4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_2f5f47e45af163ed20d2fe50e59f0dccd732ad080875fcda0044b2dd8b75b3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5f47e45af163ed20d2fe50e59f0dccd732ad080875fcda0044b2dd8b75b3ef->enter($__internal_2f5f47e45af163ed20d2fe50e59f0dccd732ad080875fcda0044b2dd8b75b3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_9747cded46360886b5a2f07dc019b1b8b48bafccce8afc1d39fae8d183b7f4ec->leave($__internal_9747cded46360886b5a2f07dc019b1b8b48bafccce8afc1d39fae8d183b7f4ec_prof);

        
        $__internal_2f5f47e45af163ed20d2fe50e59f0dccd732ad080875fcda0044b2dd8b75b3ef->leave($__internal_2f5f47e45af163ed20d2fe50e59f0dccd732ad080875fcda0044b2dd8b75b3ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
