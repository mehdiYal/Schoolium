<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_020e0e5cef61a352d913c4249b53d766f5e1d00d8745c6c59df142c6398112c7 extends Twig_Template
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
        $__internal_9b20a7bf9effe40932fcadb2504c94aff4844f5650fe8ae7945c2dc730f70446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b20a7bf9effe40932fcadb2504c94aff4844f5650fe8ae7945c2dc730f70446->enter($__internal_9b20a7bf9effe40932fcadb2504c94aff4844f5650fe8ae7945c2dc730f70446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_976e6f3d275d6144a26d2a74404fdfc7617d1a9be5384bb070e40c26794d8752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976e6f3d275d6144a26d2a74404fdfc7617d1a9be5384bb070e40c26794d8752->enter($__internal_976e6f3d275d6144a26d2a74404fdfc7617d1a9be5384bb070e40c26794d8752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9b20a7bf9effe40932fcadb2504c94aff4844f5650fe8ae7945c2dc730f70446->leave($__internal_9b20a7bf9effe40932fcadb2504c94aff4844f5650fe8ae7945c2dc730f70446_prof);

        
        $__internal_976e6f3d275d6144a26d2a74404fdfc7617d1a9be5384bb070e40c26794d8752->leave($__internal_976e6f3d275d6144a26d2a74404fdfc7617d1a9be5384bb070e40c26794d8752_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
