<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9f6224f034cc85d529136e173070785fa907214a81106382bce53c67852f8111 extends Twig_Template
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
        $__internal_5e3cb61720335aab85b8a99bd304b49d794d3547d4c4d40b8ee0194082d49a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e3cb61720335aab85b8a99bd304b49d794d3547d4c4d40b8ee0194082d49a1a->enter($__internal_5e3cb61720335aab85b8a99bd304b49d794d3547d4c4d40b8ee0194082d49a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_fdc50d1800c794648ffcb785be548b3a40dfae3b2935d644d54ca9f58ef703a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc50d1800c794648ffcb785be548b3a40dfae3b2935d644d54ca9f58ef703a8->enter($__internal_fdc50d1800c794648ffcb785be548b3a40dfae3b2935d644d54ca9f58ef703a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5e3cb61720335aab85b8a99bd304b49d794d3547d4c4d40b8ee0194082d49a1a->leave($__internal_5e3cb61720335aab85b8a99bd304b49d794d3547d4c4d40b8ee0194082d49a1a_prof);

        
        $__internal_fdc50d1800c794648ffcb785be548b3a40dfae3b2935d644d54ca9f58ef703a8->leave($__internal_fdc50d1800c794648ffcb785be548b3a40dfae3b2935d644d54ca9f58ef703a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
