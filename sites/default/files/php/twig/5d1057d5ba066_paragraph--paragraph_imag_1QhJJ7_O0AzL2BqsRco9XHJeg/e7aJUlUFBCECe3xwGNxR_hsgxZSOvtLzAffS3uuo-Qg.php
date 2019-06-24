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

/* themes/pivot/templates/paragraph--paragraph_image_bg_block.html.twig */
class __TwigTemplate_dc50db6b9055fb1ed645938486519a6d1949512b50d338d68ec3bfc0977c9b15 extends \Twig\Template
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
        $tags = ["set" => 42, "block" => 52, "if" => 54];
        $filters = ["clean_class" => 46, "trim" => 47, "render" => 47, "escape" => 53, "without" => 61];
        $functions = ["file_url" => 42];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'trim', 'render', 'escape', 'without'],
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
        // line 41
        echo "
";
        // line 42
        $context["bg_img_url"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_paragraph_background_image", []), "#items", [], "array"), "entity", []), "uri", []), "value", []))]);
        // line 44
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 46
($context["paragraph"] ?? null), "bundle", [])))), 2 => twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(        // line 47
($context["paragraph"] ?? null), "field_paragraph_extra_class", []), "value", [])))), 3 => ((        // line 48
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : (""))];
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 53
        echo "  <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 54
        if ((($context["bg_img_url"] ?? null) != "/")) {
            // line 55
            echo "\t<div class=\"background-image-holder ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_paragraph_image_class", []), "value", [])))), "html", null, true);
            echo "\">
       <img alt=\"background\" src=\"";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bg_img_url"] ?? null)), "html", null, true);
            echo "\" />
    </div>
\t";
        }
        // line 59
        echo "    <div class=\"container ";
        if (twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_paragraph_align_vertical", []), "value", [])))) {
            echo " align-vertical ";
        }
        echo " \">
    ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "\t</div>
  </section>
";
    }

    // line 60
    public function block_content($context, array $blocks = [])
    {
        echo "\t
      ";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_paragraph_extra_class", "field_paragraph_background_image", "field_paragraph_align_vertical", "field_paragraph_image_class"), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/pivot/templates/paragraph--paragraph_image_bg_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 61,  109 => 60,  103 => 63,  101 => 60,  94 => 59,  88 => 56,  83 => 55,  81 => 54,  76 => 53,  70 => 52,  67 => 51,  65 => 48,  64 => 47,  63 => 46,  62 => 44,  60 => 42,  57 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pivot/templates/paragraph--paragraph_image_bg_block.html.twig", "C:\\wamp64\\www\\consultorio\\themes\\pivot\\templates\\paragraph--paragraph_image_bg_block.html.twig");
    }
}
