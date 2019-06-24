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

/* __string_template__489b268bc81060dc6592b930060314e3de723979d3236da65349450a03bd7f25 */
class __TwigTemplate_d86dff83411c19690b8c24f09c5f9dbdc136889bce2ba83860b2092101454b28 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 1];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"col-md-6 col-sm-12 no-pad project ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_project_category"] ?? null)), "html", null, true);
        echo " image-holder\">
\t\t\t\t\t\t\t<div class=\"background-image-holder\">
\t\t\t\t\t\t\t\t";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_project_images"] ?? null)), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"hover-state\">
\t\t\t\t\t\t\t\t<div class=\"align-vertical\">
\t\t\t\t\t\t\t\t\t<h1 class=\"text-white\">";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t\t\t<p class=\"text-white\">";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_project_intro"] ?? null)), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<div class=\"btn btn-primary btn-white text-white\">";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_node"] ?? null)), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!--end of individual project-->";
    }

    public function getTemplateName()
    {
        return "__string_template__489b268bc81060dc6592b930060314e3de723979d3236da65349450a03bd7f25";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 10,  72 => 8,  68 => 7,  61 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__489b268bc81060dc6592b930060314e3de723979d3236da65349450a03bd7f25", "");
    }
}
