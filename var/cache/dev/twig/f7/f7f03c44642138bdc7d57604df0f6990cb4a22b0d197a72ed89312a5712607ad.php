<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2c2d447461bc0c9ce1817b7b237f48738c78ad63435d698f4d1d2a11fe122b39 extends Twig_Template
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
        $__internal_5c889d3c6d36e1f8b31bcedfdedbb9ed955edad844f148b67dc204f3f9b52b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c889d3c6d36e1f8b31bcedfdedbb9ed955edad844f148b67dc204f3f9b52b3a->enter($__internal_5c889d3c6d36e1f8b31bcedfdedbb9ed955edad844f148b67dc204f3f9b52b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_7bb7a446d7267c63106282479f980a262555bff26cc1044eae07a7a9c9e3d36e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb7a446d7267c63106282479f980a262555bff26cc1044eae07a7a9c9e3d36e->enter($__internal_7bb7a446d7267c63106282479f980a262555bff26cc1044eae07a7a9c9e3d36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5c889d3c6d36e1f8b31bcedfdedbb9ed955edad844f148b67dc204f3f9b52b3a->leave($__internal_5c889d3c6d36e1f8b31bcedfdedbb9ed955edad844f148b67dc204f3f9b52b3a_prof);

        
        $__internal_7bb7a446d7267c63106282479f980a262555bff26cc1044eae07a7a9c9e3d36e->leave($__internal_7bb7a446d7267c63106282479f980a262555bff26cc1044eae07a7a9c9e3d36e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
