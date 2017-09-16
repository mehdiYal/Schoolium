<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_dbcefa1d206799ff88b4b5226a9d30f3335b8606928c730cf6f3943107d3cf3c extends Twig_Template
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
        $__internal_b9ec2a8a55e1b1ee83b7728467ef142d375cb4238af6cabd3209b164142de193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9ec2a8a55e1b1ee83b7728467ef142d375cb4238af6cabd3209b164142de193->enter($__internal_b9ec2a8a55e1b1ee83b7728467ef142d375cb4238af6cabd3209b164142de193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_47e2401f1d61bf9f030d19b6f2cbfb024fc73aee53958582625b62dc131188f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e2401f1d61bf9f030d19b6f2cbfb024fc73aee53958582625b62dc131188f7->enter($__internal_47e2401f1d61bf9f030d19b6f2cbfb024fc73aee53958582625b62dc131188f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b9ec2a8a55e1b1ee83b7728467ef142d375cb4238af6cabd3209b164142de193->leave($__internal_b9ec2a8a55e1b1ee83b7728467ef142d375cb4238af6cabd3209b164142de193_prof);

        
        $__internal_47e2401f1d61bf9f030d19b6f2cbfb024fc73aee53958582625b62dc131188f7->leave($__internal_47e2401f1d61bf9f030d19b6f2cbfb024fc73aee53958582625b62dc131188f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
