<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0fe20de790e04fd2b620675530ee2f85f512ba7de5aef281748e72aaaa8a7575 extends Twig_Template
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
        $__internal_541326aeaa330ebf7be394f89f44019e7bfe29dcd9475fa2b54ffd85c875ca4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_541326aeaa330ebf7be394f89f44019e7bfe29dcd9475fa2b54ffd85c875ca4a->enter($__internal_541326aeaa330ebf7be394f89f44019e7bfe29dcd9475fa2b54ffd85c875ca4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_cfa84969986f43f6547975266a8b5c9655988a862d0e14e5e70ce86cfeba4846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa84969986f43f6547975266a8b5c9655988a862d0e14e5e70ce86cfeba4846->enter($__internal_cfa84969986f43f6547975266a8b5c9655988a862d0e14e5e70ce86cfeba4846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_541326aeaa330ebf7be394f89f44019e7bfe29dcd9475fa2b54ffd85c875ca4a->leave($__internal_541326aeaa330ebf7be394f89f44019e7bfe29dcd9475fa2b54ffd85c875ca4a_prof);

        
        $__internal_cfa84969986f43f6547975266a8b5c9655988a862d0e14e5e70ce86cfeba4846->leave($__internal_cfa84969986f43f6547975266a8b5c9655988a862d0e14e5e70ce86cfeba4846_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
