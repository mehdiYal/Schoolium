<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_f1ad46441adaaa876ead5e4032cec652eb0eb235e9271099cffa72e8f8522253 extends Twig_Template
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
        $__internal_06b55a9e22fe6fe09b680e4e3920b92cf260f8dd6e60c4a8c53b89f498eeb30f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b55a9e22fe6fe09b680e4e3920b92cf260f8dd6e60c4a8c53b89f498eeb30f->enter($__internal_06b55a9e22fe6fe09b680e4e3920b92cf260f8dd6e60c4a8c53b89f498eeb30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_eda608ae7e43083f167e39accdbb19782d00ff11bf02739534cbac44a85e072d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda608ae7e43083f167e39accdbb19782d00ff11bf02739534cbac44a85e072d->enter($__internal_eda608ae7e43083f167e39accdbb19782d00ff11bf02739534cbac44a85e072d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_06b55a9e22fe6fe09b680e4e3920b92cf260f8dd6e60c4a8c53b89f498eeb30f->leave($__internal_06b55a9e22fe6fe09b680e4e3920b92cf260f8dd6e60c4a8c53b89f498eeb30f_prof);

        
        $__internal_eda608ae7e43083f167e39accdbb19782d00ff11bf02739534cbac44a85e072d->leave($__internal_eda608ae7e43083f167e39accdbb19782d00ff11bf02739534cbac44a85e072d_prof);

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
", "@Framework/Form/widget_container_attributes.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
