<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_c66d3d2de05223c1447c29028d61234a710b16a828a36e2c87f2476e39d31d57 extends Twig_Template
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
        $__internal_381a9b02805182ee3c5f2a6f4d8d04cb59f351c2ed28ac8ee1ed8fa4425df239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_381a9b02805182ee3c5f2a6f4d8d04cb59f351c2ed28ac8ee1ed8fa4425df239->enter($__internal_381a9b02805182ee3c5f2a6f4d8d04cb59f351c2ed28ac8ee1ed8fa4425df239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_20b03d2e241301cc29d174cd351324b11de361a983ec05c036fe660a611fea9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b03d2e241301cc29d174cd351324b11de361a983ec05c036fe660a611fea9a->enter($__internal_20b03d2e241301cc29d174cd351324b11de361a983ec05c036fe660a611fea9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_381a9b02805182ee3c5f2a6f4d8d04cb59f351c2ed28ac8ee1ed8fa4425df239->leave($__internal_381a9b02805182ee3c5f2a6f4d8d04cb59f351c2ed28ac8ee1ed8fa4425df239_prof);

        
        $__internal_20b03d2e241301cc29d174cd351324b11de361a983ec05c036fe660a611fea9a->leave($__internal_20b03d2e241301cc29d174cd351324b11de361a983ec05c036fe660a611fea9a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Group/list_content.html.twig");
    }
}
