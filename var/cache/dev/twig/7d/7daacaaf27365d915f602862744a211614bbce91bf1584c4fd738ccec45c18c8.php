<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_cd39220119c2a26f370acbb990753943e3f85ea7c75b14eb6ff9565eb8c9726d extends Twig_Template
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
        $__internal_fe9d910b46ec9e0feeb39d024416e68da481075f4107ebf5bd2b4e7cff042343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9d910b46ec9e0feeb39d024416e68da481075f4107ebf5bd2b4e7cff042343->enter($__internal_fe9d910b46ec9e0feeb39d024416e68da481075f4107ebf5bd2b4e7cff042343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_7b33c585a972bd9eefb163b545a4e4734bf7328e76ce0b314899e8c06a2724e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b33c585a972bd9eefb163b545a4e4734bf7328e76ce0b314899e8c06a2724e4->enter($__internal_7b33c585a972bd9eefb163b545a4e4734bf7328e76ce0b314899e8c06a2724e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_fe9d910b46ec9e0feeb39d024416e68da481075f4107ebf5bd2b4e7cff042343->leave($__internal_fe9d910b46ec9e0feeb39d024416e68da481075f4107ebf5bd2b4e7cff042343_prof);

        
        $__internal_7b33c585a972bd9eefb163b545a4e4734bf7328e76ce0b314899e8c06a2724e4->leave($__internal_7b33c585a972bd9eefb163b545a4e4734bf7328e76ce0b314899e8c06a2724e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
