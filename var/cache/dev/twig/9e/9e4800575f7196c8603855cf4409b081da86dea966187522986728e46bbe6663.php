<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_6d6c06b96e364367f395c82483451daac5fae51592a7cdd84884e1d19a39a9a5 extends Twig_Template
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
        $__internal_677fa4432d4a7f9e44953dca16d04e392c5eefeaee0e9800fcc854f7b18aa05c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_677fa4432d4a7f9e44953dca16d04e392c5eefeaee0e9800fcc854f7b18aa05c->enter($__internal_677fa4432d4a7f9e44953dca16d04e392c5eefeaee0e9800fcc854f7b18aa05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_e3e38870a37f58fc393bd064170edf8b8e88c3a3a9ba9d69abae8f6ccc77467d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e38870a37f58fc393bd064170edf8b8e88c3a3a9ba9d69abae8f6ccc77467d->enter($__internal_e3e38870a37f58fc393bd064170edf8b8e88c3a3a9ba9d69abae8f6ccc77467d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_677fa4432d4a7f9e44953dca16d04e392c5eefeaee0e9800fcc854f7b18aa05c->leave($__internal_677fa4432d4a7f9e44953dca16d04e392c5eefeaee0e9800fcc854f7b18aa05c_prof);

        
        $__internal_e3e38870a37f58fc393bd064170edf8b8e88c3a3a9ba9d69abae8f6ccc77467d->leave($__internal_e3e38870a37f58fc393bd064170edf8b8e88c3a3a9ba9d69abae8f6ccc77467d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
