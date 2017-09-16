<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_d94d4d48925093222286b4d01da406df1fe0e463f7f2d711bf9979914e58f507 extends Twig_Template
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
        $__internal_928ad79237db3801b4c3f4a0ea7cd465d323d28312e4781569422df8ea5f1dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_928ad79237db3801b4c3f4a0ea7cd465d323d28312e4781569422df8ea5f1dc3->enter($__internal_928ad79237db3801b4c3f4a0ea7cd465d323d28312e4781569422df8ea5f1dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d0ce48af049561f60c8c260dd00577cfddff73b9eb7da74230eb6c55db2be0bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ce48af049561f60c8c260dd00577cfddff73b9eb7da74230eb6c55db2be0bc->enter($__internal_d0ce48af049561f60c8c260dd00577cfddff73b9eb7da74230eb6c55db2be0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_928ad79237db3801b4c3f4a0ea7cd465d323d28312e4781569422df8ea5f1dc3->leave($__internal_928ad79237db3801b4c3f4a0ea7cd465d323d28312e4781569422df8ea5f1dc3_prof);

        
        $__internal_d0ce48af049561f60c8c260dd00577cfddff73b9eb7da74230eb6c55db2be0bc->leave($__internal_d0ce48af049561f60c8c260dd00577cfddff73b9eb7da74230eb6c55db2be0bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
