<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e981d61c7be43ce78c91e916c3ba6aea0fa384ebc6a602fc718cb2c37ebe93ef extends Twig_Template
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
        $__internal_f5302f4071ab3c9572e46c88a50d7e992e46eef07668511de322607ea258a270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5302f4071ab3c9572e46c88a50d7e992e46eef07668511de322607ea258a270->enter($__internal_f5302f4071ab3c9572e46c88a50d7e992e46eef07668511de322607ea258a270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_7b72351a34254f0673fcf36f806521c4f3f8bb8e8d70d0050896ec8991f98197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b72351a34254f0673fcf36f806521c4f3f8bb8e8d70d0050896ec8991f98197->enter($__internal_7b72351a34254f0673fcf36f806521c4f3f8bb8e8d70d0050896ec8991f98197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f5302f4071ab3c9572e46c88a50d7e992e46eef07668511de322607ea258a270->leave($__internal_f5302f4071ab3c9572e46c88a50d7e992e46eef07668511de322607ea258a270_prof);

        
        $__internal_7b72351a34254f0673fcf36f806521c4f3f8bb8e8d70d0050896ec8991f98197->leave($__internal_7b72351a34254f0673fcf36f806521c4f3f8bb8e8d70d0050896ec8991f98197_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
