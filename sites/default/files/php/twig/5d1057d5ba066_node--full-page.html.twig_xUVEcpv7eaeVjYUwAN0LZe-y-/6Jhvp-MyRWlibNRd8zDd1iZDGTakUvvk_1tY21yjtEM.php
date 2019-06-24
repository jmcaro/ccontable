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

/* themes/pivot/templates/node--full-page.html.twig */
class __TwigTemplate_58c841b09254eb441946de5d93725f6c6de6ebbd1408bd373703952ab81d0be8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 69];
        $filters = ["clean_class" => 71, "escape" => 80, "without" => 80];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'without'],
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
        // line 69
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 71
($context["node"] ?? null), "bundle", [])))), 2 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 72
($context["node"] ?? null), "bundle", []))), 3 => (($this->getAttribute(        // line 73
($context["node"] ?? null), "isPromoted", [], "method")) ? ("is-promoted") : ("")), 4 => (($this->getAttribute(        // line 74
($context["node"] ?? null), "isSticky", [], "method")) ? ("is-sticky") : ("")), 5 => (( !$this->getAttribute(        // line 75
($context["node"] ?? null), "isPublished", [], "method")) ? ("is-unpublished") : ("")), 6 => ((        // line 76
($context["view_mode"] ?? null)) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null)))) : ("")), 7 => "clearfix"];
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_mainmenu_transparent"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/pivot/templates/node--full-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 80,  61 => 76,  60 => 75,  59 => 74,  58 => 73,  57 => 72,  56 => 71,  55 => 69,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pivot/templates/node--full-page.html.twig", "C:\\wamp64\\www\\consultorio\\themes\\pivot\\templates\\node--full-page.html.twig");
    }
}
