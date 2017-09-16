<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_440ee9e8bf2be7817f0a73493bb0c3cd3099ea967464e134adf37043daa9b380 extends Twig_Template
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
        $__internal_699fe08865993fc27bb8f06fffe1a16c2ad40b4d0f9827f5d7de04d770506bd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699fe08865993fc27bb8f06fffe1a16c2ad40b4d0f9827f5d7de04d770506bd3->enter($__internal_699fe08865993fc27bb8f06fffe1a16c2ad40b4d0f9827f5d7de04d770506bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_319751b311a89e8570665f352ef3afa8d2c3c85ae249dd28fd9667e7594d1482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319751b311a89e8570665f352ef3afa8d2c3c85ae249dd28fd9667e7594d1482->enter($__internal_319751b311a89e8570665f352ef3afa8d2c3c85ae249dd28fd9667e7594d1482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_699fe08865993fc27bb8f06fffe1a16c2ad40b4d0f9827f5d7de04d770506bd3->leave($__internal_699fe08865993fc27bb8f06fffe1a16c2ad40b4d0f9827f5d7de04d770506bd3_prof);

        
        $__internal_319751b311a89e8570665f352ef3afa8d2c3c85ae249dd28fd9667e7594d1482->leave($__internal_319751b311a89e8570665f352ef3afa8d2c3c85ae249dd28fd9667e7594d1482_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
