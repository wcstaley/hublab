<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* privileges/global_priv_tbl_item.twig */
class __TwigTemplate_3ca698e79d94bb1d654f7e693c87cc800d8f0fd99aa1303034eb46c17bc27743 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"item\">
    <input type=\"checkbox\" class=\"checkall\" name=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["priv"] ?? null), 0, [], "array"), "html", null, true);
        echo "_priv\" id=\"checkbox_";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["priv"] ?? null), 0, [], "array"), "html", null, true);
        echo "_priv\"
        value=\"Y\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["priv"] ?? null), 2, [], "array"), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
        echo " />
    <label for=\"checkbox_";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["priv"] ?? null), 0, [], "array"), "html", null, true);
        echo "_priv\">
        <code>
            ";
        // line 6
        echo ($context["formatted_priv"] ?? null);
        echo "
        </code>
    </label>
</div>
";
    }

    public function getTemplateName()
    {
        return "privileges/global_priv_tbl_item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  45 => 4,  39 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "privileges/global_priv_tbl_item.twig", "/var/www/html/phpMyAdmin/templates/privileges/global_priv_tbl_item.twig");
    }
}
