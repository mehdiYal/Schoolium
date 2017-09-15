<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_bfb4ffdef502dcf1316dc0c9faf545e5683823da860a9a5939d9b46f13d6b39a extends Twig_Template
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
        $__internal_f205a9220ba76cba23a2cea1f872bf2a0ee5bf1207dd436f3bc80d8b7820cc78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f205a9220ba76cba23a2cea1f872bf2a0ee5bf1207dd436f3bc80d8b7820cc78->enter($__internal_f205a9220ba76cba23a2cea1f872bf2a0ee5bf1207dd436f3bc80d8b7820cc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_aa58a04c56fd8b24250d148f5adfdb9052901d2aebf83fbac9e16ad82cac7993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa58a04c56fd8b24250d148f5adfdb9052901d2aebf83fbac9e16ad82cac7993->enter($__internal_aa58a04c56fd8b24250d148f5adfdb9052901d2aebf83fbac9e16ad82cac7993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f205a9220ba76cba23a2cea1f872bf2a0ee5bf1207dd436f3bc80d8b7820cc78->leave($__internal_f205a9220ba76cba23a2cea1f872bf2a0ee5bf1207dd436f3bc80d8b7820cc78_prof);

        
        $__internal_aa58a04c56fd8b24250d148f5adfdb9052901d2aebf83fbac9e16ad82cac7993->leave($__internal_aa58a04c56fd8b24250d148f5adfdb9052901d2aebf83fbac9e16ad82cac7993_prof);

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
", "@Framework/Form/search_widget.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
