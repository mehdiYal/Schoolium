<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_cab5a67889bd3a426ce6a939f99ae35d294977358932f5d4e077defbbb342f18 extends Twig_Template
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
        $__internal_7fb66ea394af9cce7a5b4e9be8ff1b6f69531b317f5b92fb67b39fb06e533f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb66ea394af9cce7a5b4e9be8ff1b6f69531b317f5b92fb67b39fb06e533f9d->enter($__internal_7fb66ea394af9cce7a5b4e9be8ff1b6f69531b317f5b92fb67b39fb06e533f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_6007977bcb7d39fa848a0d688f41013cd1d6e23c66e2949d0ba9273a9068ddc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6007977bcb7d39fa848a0d688f41013cd1d6e23c66e2949d0ba9273a9068ddc3->enter($__internal_6007977bcb7d39fa848a0d688f41013cd1d6e23c66e2949d0ba9273a9068ddc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_7fb66ea394af9cce7a5b4e9be8ff1b6f69531b317f5b92fb67b39fb06e533f9d->leave($__internal_7fb66ea394af9cce7a5b4e9be8ff1b6f69531b317f5b92fb67b39fb06e533f9d_prof);

        
        $__internal_6007977bcb7d39fa848a0d688f41013cd1d6e23c66e2949d0ba9273a9068ddc3->leave($__internal_6007977bcb7d39fa848a0d688f41013cd1d6e23c66e2949d0ba9273a9068ddc3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
