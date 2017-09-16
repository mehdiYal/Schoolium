<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_34b47bd1df203ea7f4138ad291afe334d91f6f4d6dcdef4eeb6e49f78f4838ea extends Twig_Template
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
        $__internal_5cc3e889acbfe2edaf87b4b7b376c07a4096487852ca96ff744555ae208936f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc3e889acbfe2edaf87b4b7b376c07a4096487852ca96ff744555ae208936f3->enter($__internal_5cc3e889acbfe2edaf87b4b7b376c07a4096487852ca96ff744555ae208936f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_e552e682d47c6ff84549c5818fcd72e84a8ca19a69d8df0b5e833babf2093fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e552e682d47c6ff84549c5818fcd72e84a8ca19a69d8df0b5e833babf2093fd8->enter($__internal_e552e682d47c6ff84549c5818fcd72e84a8ca19a69d8df0b5e833babf2093fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5cc3e889acbfe2edaf87b4b7b376c07a4096487852ca96ff744555ae208936f3->leave($__internal_5cc3e889acbfe2edaf87b4b7b376c07a4096487852ca96ff744555ae208936f3_prof);

        
        $__internal_e552e682d47c6ff84549c5818fcd72e84a8ca19a69d8df0b5e833babf2093fd8->leave($__internal_e552e682d47c6ff84549c5818fcd72e84a8ca19a69d8df0b5e833babf2093fd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
