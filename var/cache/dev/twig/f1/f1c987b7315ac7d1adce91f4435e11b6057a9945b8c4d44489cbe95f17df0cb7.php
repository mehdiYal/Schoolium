<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a0fe85de2ce7e12397ff4f3653200f0f4e1be013b2e0ae3153b456626ccda2b0 extends Twig_Template
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
        $__internal_155f1f282dfd2269b1c6b366e3c2fb1748545d0c8f59c64755ae38aa06b6d68b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155f1f282dfd2269b1c6b366e3c2fb1748545d0c8f59c64755ae38aa06b6d68b->enter($__internal_155f1f282dfd2269b1c6b366e3c2fb1748545d0c8f59c64755ae38aa06b6d68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_abb62c51907097ad4c2552bbb5ce2c68aa2b99e9b8d0382a97e379013002cb35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb62c51907097ad4c2552bbb5ce2c68aa2b99e9b8d0382a97e379013002cb35->enter($__internal_abb62c51907097ad4c2552bbb5ce2c68aa2b99e9b8d0382a97e379013002cb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_155f1f282dfd2269b1c6b366e3c2fb1748545d0c8f59c64755ae38aa06b6d68b->leave($__internal_155f1f282dfd2269b1c6b366e3c2fb1748545d0c8f59c64755ae38aa06b6d68b_prof);

        
        $__internal_abb62c51907097ad4c2552bbb5ce2c68aa2b99e9b8d0382a97e379013002cb35->leave($__internal_abb62c51907097ad4c2552bbb5ce2c68aa2b99e9b8d0382a97e379013002cb35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
