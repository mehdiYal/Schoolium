<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_5050281a025901ccf12f747f91bee6db886e2642bbb06bb5fdcc7fc7bd22c63f extends Twig_Template
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
        $__internal_28e55d21a37416d05e18abb5242898d5c9b712ae851c5b92beb2d5e34fbe0048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28e55d21a37416d05e18abb5242898d5c9b712ae851c5b92beb2d5e34fbe0048->enter($__internal_28e55d21a37416d05e18abb5242898d5c9b712ae851c5b92beb2d5e34fbe0048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_05df33169628e354c419b8cba340e073f05410f74faeb7da013de9f84325d528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05df33169628e354c419b8cba340e073f05410f74faeb7da013de9f84325d528->enter($__internal_05df33169628e354c419b8cba340e073f05410f74faeb7da013de9f84325d528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_28e55d21a37416d05e18abb5242898d5c9b712ae851c5b92beb2d5e34fbe0048->leave($__internal_28e55d21a37416d05e18abb5242898d5c9b712ae851c5b92beb2d5e34fbe0048_prof);

        
        $__internal_05df33169628e354c419b8cba340e073f05410f74faeb7da013de9f84325d528->leave($__internal_05df33169628e354c419b8cba340e073f05410f74faeb7da013de9f84325d528_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
