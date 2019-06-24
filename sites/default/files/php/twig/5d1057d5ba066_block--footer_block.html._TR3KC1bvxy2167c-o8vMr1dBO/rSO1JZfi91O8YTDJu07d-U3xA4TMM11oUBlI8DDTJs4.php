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

/* themes/pivot/templates/block--footer_block.html.twig */
class __TwigTemplate_a21f0f6d2885b7e1facce275f0d518ea1cc19f0cd801b4e3c813a91a3949ed4c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 49, "if" => 50, "block" => 72];
        $filters = ["clean_class" => 58, "lower" => 60, "replace" => 60, "striptags" => 60, "render" => 60, "escape" => 65, "without" => 73];
        $functions = ["file_url" => 49];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'lower', 'replace', 'striptags', 'render', 'escape', 'without'],
                ['file_url']
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
        // line 48
        echo "
";
        // line 49
        $context["bg_img_url"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_block_background_image", []), "#items", [], "array"), "entity", []), "uri", []), "value", []))]);
        // line 50
        if ((($context["bg_img_url"] ?? null) != "/")) {
            // line 51
            echo "  ";
            $context["image_class"] = "imagebg";
        } else {
            // line 53
            echo "  ";
            $context["image_class"] = "";
        }
        // line 56
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 58
($context["configuration"] ?? null), "provider", [])))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 59
($context["plugin_id"] ?? null)))), 3 => twig_lower_filter($this->env, twig_replace_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 60
($context["content"] ?? null), "field_block_extra_class", [])))), ["
" => ""])), 4 => "clearfix", 5 =>         // line 62
($context["image_class"] ?? null)];
        // line 65
        echo "<footer";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo "  id=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_block_id", [])))), ["
" => "", " " => ""]), "html", null, true);
        echo "\">

  <div class=\"block-inner\">
    ";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
    ";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  </div>
  
    ";
        // line 72
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "\t
</footer>






";
    }

    // line 72
    public function block_content($context, array $blocks = [])
    {
        // line 73
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_block_extra_class", "field_block_id", "field_block_container"), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/pivot/templates/block--footer_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 73,  112 => 72,  100 => 75,  98 => 72,  92 => 69,  88 => 68,  78 => 65,  76 => 62,  74 => 60,  73 => 59,  72 => 58,  71 => 56,  67 => 53,  63 => 51,  61 => 50,  59 => 49,  56 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pivot/templates/block--footer_block.html.twig", "C:\\wamp64\\www\\consultorio\\themes\\pivot\\templates\\block--footer_block.html.twig");
    }
}
