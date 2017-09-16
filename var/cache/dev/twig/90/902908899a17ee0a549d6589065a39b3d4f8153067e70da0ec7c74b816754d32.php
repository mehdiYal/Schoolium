<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_83fef3cd56db5b599e94f625f7ddc50ef446a53c0d4794ee6a9fd768e709a66a extends Twig_Template
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
        $__internal_6a4873fbc208c141693ab0bec7d6104a47208b518fb2a407f14be9338ee818c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a4873fbc208c141693ab0bec7d6104a47208b518fb2a407f14be9338ee818c0->enter($__internal_6a4873fbc208c141693ab0bec7d6104a47208b518fb2a407f14be9338ee818c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_3e7128de6acf69af4549b907cef83f345775d7bcf1a2abd920870e643207cf55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7128de6acf69af4549b907cef83f345775d7bcf1a2abd920870e643207cf55->enter($__internal_3e7128de6acf69af4549b907cef83f345775d7bcf1a2abd920870e643207cf55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_6a4873fbc208c141693ab0bec7d6104a47208b518fb2a407f14be9338ee818c0->leave($__internal_6a4873fbc208c141693ab0bec7d6104a47208b518fb2a407f14be9338ee818c0_prof);

        
        $__internal_3e7128de6acf69af4549b907cef83f345775d7bcf1a2abd920870e643207cf55->leave($__internal_3e7128de6acf69af4549b907cef83f345775d7bcf1a2abd920870e643207cf55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
