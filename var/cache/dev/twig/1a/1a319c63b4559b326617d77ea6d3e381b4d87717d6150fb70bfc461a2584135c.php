<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_bb2b793c714a4c7b7ad196a7f3feac4ea4035e52c86d4616c88890c8fac5d40a extends Twig_Template
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
        $__internal_e70f0970f0975a2220c3639e94ebbc65bc366164134adb70f50faab18cfda47d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70f0970f0975a2220c3639e94ebbc65bc366164134adb70f50faab18cfda47d->enter($__internal_e70f0970f0975a2220c3639e94ebbc65bc366164134adb70f50faab18cfda47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_764f0a3711deb531268f0b52b67cb3a7f296ae313fed852a97dcd1b11b1f7cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764f0a3711deb531268f0b52b67cb3a7f296ae313fed852a97dcd1b11b1f7cdd->enter($__internal_764f0a3711deb531268f0b52b67cb3a7f296ae313fed852a97dcd1b11b1f7cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e70f0970f0975a2220c3639e94ebbc65bc366164134adb70f50faab18cfda47d->leave($__internal_e70f0970f0975a2220c3639e94ebbc65bc366164134adb70f50faab18cfda47d_prof);

        
        $__internal_764f0a3711deb531268f0b52b67cb3a7f296ae313fed852a97dcd1b11b1f7cdd->leave($__internal_764f0a3711deb531268f0b52b67cb3a7f296ae313fed852a97dcd1b11b1f7cdd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
