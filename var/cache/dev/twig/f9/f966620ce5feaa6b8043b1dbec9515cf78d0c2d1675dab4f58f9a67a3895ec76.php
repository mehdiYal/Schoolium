<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_018a74265dafed84df1e4c8cbdb2309779e71d80b055a85859bf080568e3c50c extends Twig_Template
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
        $__internal_620f0cb199eb7c2ab345120665e661a970f789eec6752a3afabe82396cf71fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_620f0cb199eb7c2ab345120665e661a970f789eec6752a3afabe82396cf71fc6->enter($__internal_620f0cb199eb7c2ab345120665e661a970f789eec6752a3afabe82396cf71fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_d00fb6bca6ffb2ccd971a94bf36a7bf4133b6307ce8226bfdd951954eb0e874a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00fb6bca6ffb2ccd971a94bf36a7bf4133b6307ce8226bfdd951954eb0e874a->enter($__internal_d00fb6bca6ffb2ccd971a94bf36a7bf4133b6307ce8226bfdd951954eb0e874a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_620f0cb199eb7c2ab345120665e661a970f789eec6752a3afabe82396cf71fc6->leave($__internal_620f0cb199eb7c2ab345120665e661a970f789eec6752a3afabe82396cf71fc6_prof);

        
        $__internal_d00fb6bca6ffb2ccd971a94bf36a7bf4133b6307ce8226bfdd951954eb0e874a->leave($__internal_d00fb6bca6ffb2ccd971a94bf36a7bf4133b6307ce8226bfdd951954eb0e874a_prof);

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
", "@Framework/Form/container_attributes.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
