<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d8a5605ebc50be684b3335547cbe613318b199fc8302d0fa558a2efce7c45f6a extends Twig_Template
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
        $__internal_580be757466573785c56eed69bdd7aa326c8f0297a11c26f8834cd04c8c456bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_580be757466573785c56eed69bdd7aa326c8f0297a11c26f8834cd04c8c456bc->enter($__internal_580be757466573785c56eed69bdd7aa326c8f0297a11c26f8834cd04c8c456bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_15aa77775b5f7790e359d0551e26f1f32b2527f127ea532885c2bfc32facfabc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15aa77775b5f7790e359d0551e26f1f32b2527f127ea532885c2bfc32facfabc->enter($__internal_15aa77775b5f7790e359d0551e26f1f32b2527f127ea532885c2bfc32facfabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_580be757466573785c56eed69bdd7aa326c8f0297a11c26f8834cd04c8c456bc->leave($__internal_580be757466573785c56eed69bdd7aa326c8f0297a11c26f8834cd04c8c456bc_prof);

        
        $__internal_15aa77775b5f7790e359d0551e26f1f32b2527f127ea532885c2bfc32facfabc->leave($__internal_15aa77775b5f7790e359d0551e26f1f32b2527f127ea532885c2bfc32facfabc_prof);

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
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
