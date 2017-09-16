<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_0acd4d31854cc5772f2e91cc62633c0851c73cd33a4efe121e8e1a491a9929cf extends Twig_Template
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
        $__internal_6d22432917e9d283271c6a679754900be15a4823065912ce49b6587d9b291649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d22432917e9d283271c6a679754900be15a4823065912ce49b6587d9b291649->enter($__internal_6d22432917e9d283271c6a679754900be15a4823065912ce49b6587d9b291649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_9878fa8390cf42d3e3e131227c0521931db66c020d8d35ea36eee422f2878080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9878fa8390cf42d3e3e131227c0521931db66c020d8d35ea36eee422f2878080->enter($__internal_9878fa8390cf42d3e3e131227c0521931db66c020d8d35ea36eee422f2878080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_6d22432917e9d283271c6a679754900be15a4823065912ce49b6587d9b291649->leave($__internal_6d22432917e9d283271c6a679754900be15a4823065912ce49b6587d9b291649_prof);

        
        $__internal_9878fa8390cf42d3e3e131227c0521931db66c020d8d35ea36eee422f2878080->leave($__internal_9878fa8390cf42d3e3e131227c0521931db66c020d8d35ea36eee422f2878080_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
