<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_1298f331132aac13e444deb978c9b2241304cfae56fd58649ec7ea41cd441424 extends Twig_Template
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
        $__internal_9479bb65e8cbeef43b7c7ae113e3fd90d80f9d76fbabdd922ebb79ce24da0d97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9479bb65e8cbeef43b7c7ae113e3fd90d80f9d76fbabdd922ebb79ce24da0d97->enter($__internal_9479bb65e8cbeef43b7c7ae113e3fd90d80f9d76fbabdd922ebb79ce24da0d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_a00d27afbf8aecc53c183d3985f499f97931b58a42a31ccccc91eb35e56dc864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00d27afbf8aecc53c183d3985f499f97931b58a42a31ccccc91eb35e56dc864->enter($__internal_a00d27afbf8aecc53c183d3985f499f97931b58a42a31ccccc91eb35e56dc864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_9479bb65e8cbeef43b7c7ae113e3fd90d80f9d76fbabdd922ebb79ce24da0d97->leave($__internal_9479bb65e8cbeef43b7c7ae113e3fd90d80f9d76fbabdd922ebb79ce24da0d97_prof);

        
        $__internal_a00d27afbf8aecc53c183d3985f499f97931b58a42a31ccccc91eb35e56dc864->leave($__internal_a00d27afbf8aecc53c183d3985f499f97931b58a42a31ccccc91eb35e56dc864_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
