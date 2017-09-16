<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2739c8f4042ad26812381406662874d9be1fa82c762311eddc736483cdbddc64 extends Twig_Template
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
        $__internal_d16ce41ed61ce0f47b47850d91cda63a38fa58a9def1b173c306a181a7d6f48a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16ce41ed61ce0f47b47850d91cda63a38fa58a9def1b173c306a181a7d6f48a->enter($__internal_d16ce41ed61ce0f47b47850d91cda63a38fa58a9def1b173c306a181a7d6f48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_156b7d10c61e5d061d4db071f0dccee8fa9ed4dd79da371b2498625ec782b7c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156b7d10c61e5d061d4db071f0dccee8fa9ed4dd79da371b2498625ec782b7c5->enter($__internal_156b7d10c61e5d061d4db071f0dccee8fa9ed4dd79da371b2498625ec782b7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d16ce41ed61ce0f47b47850d91cda63a38fa58a9def1b173c306a181a7d6f48a->leave($__internal_d16ce41ed61ce0f47b47850d91cda63a38fa58a9def1b173c306a181a7d6f48a_prof);

        
        $__internal_156b7d10c61e5d061d4db071f0dccee8fa9ed4dd79da371b2498625ec782b7c5->leave($__internal_156b7d10c61e5d061d4db071f0dccee8fa9ed4dd79da371b2498625ec782b7c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
