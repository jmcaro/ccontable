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

/* themes/pivot/templates/paragraph--paragraph_block.html.twig */
class __TwigTemplate_ac8541e640244149f9ce2c31cae9063a27c8900f39c355bf863ae4f458aae696 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 42, "block" => 49, "if" => 51];
        $filters = ["clean_class" => 44, "trim" => 45, "render" => 45, "escape" => 50, "without" => 53];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'trim', 'render', 'escape', 'without'],
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
        // line 42
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 44
($context["paragraph"] ?? null), "bundle", [])))), 2 => twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(        // line 45
($context["paragraph"] ?? null), "field_paragraph_extra_class", []), "value", [])))), 3 => ((        // line 46
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : (""))];
        // line 49
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 50
        echo "  <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo " >
    ";
        // line 51
        if (twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_paragraph_container", []), "value", [])))) {
            echo "<div class=\"container  ";
            if (twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_paragraph_align_vertical", []), "value", [])))) {
                echo " align-vertical ";
            }
            echo "\">";
        }
        echo " 
    ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "\t
    ";
        // line 56
        if (twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_paragraph_container", []), "value", [])))) {
            echo "</div>";
        }
        echo " 
  </section>
";
    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        echo "\t
      ";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_paragraph_extra_class", "field_paragraph_container", "field_paragraph_align_vertical"), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/pivot/templates/paragraph--paragraph_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 53,  97 => 52,  88 => 56,  85 => 55,  83 => 52,  73 => 51,  68 => 50,  62 => 49,  60 => 46,  59 => 45,  58 => 44,  57 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pivot/templates/paragraph--paragraph_block.html.twig", "C:\\wamp64\\www\\consultorio\\themes\\pivot\\templates\\paragraph--paragraph_block.html.twig");
    }
}
