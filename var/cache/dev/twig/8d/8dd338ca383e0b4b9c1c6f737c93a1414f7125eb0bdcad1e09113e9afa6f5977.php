<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_40e6854ef7dcd4193fa676e5c642ea304680c9250d91e61f11cc10d57283ccf0 extends Twig_Template
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
        $__internal_1feb31365828676a47c9a303767f7e737b7cde61226d1364a24d157182b4ea3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1feb31365828676a47c9a303767f7e737b7cde61226d1364a24d157182b4ea3f->enter($__internal_1feb31365828676a47c9a303767f7e737b7cde61226d1364a24d157182b4ea3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_7b965c280ea0ddf47c478512b66354834fb40d1ecb8e8c80103295910ec6a3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b965c280ea0ddf47c478512b66354834fb40d1ecb8e8c80103295910ec6a3ee->enter($__internal_7b965c280ea0ddf47c478512b66354834fb40d1ecb8e8c80103295910ec6a3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_1feb31365828676a47c9a303767f7e737b7cde61226d1364a24d157182b4ea3f->leave($__internal_1feb31365828676a47c9a303767f7e737b7cde61226d1364a24d157182b4ea3f_prof);

        
        $__internal_7b965c280ea0ddf47c478512b66354834fb40d1ecb8e8c80103295910ec6a3ee->leave($__internal_7b965c280ea0ddf47c478512b66354834fb40d1ecb8e8c80103295910ec6a3ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
