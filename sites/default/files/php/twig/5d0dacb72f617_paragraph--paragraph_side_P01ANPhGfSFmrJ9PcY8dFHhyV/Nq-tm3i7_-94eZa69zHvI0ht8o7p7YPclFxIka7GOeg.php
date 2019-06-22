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

/* themes/pivot/templates/paragraph--paragraph_side_image_block.html.twig */
class __TwigTemplate_fb16daca1c6281a813407395f31cde8e35f9f06b7ebcb19d63a61c334d6febda extends \Twig\Template
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
        $tags = ["if" => 41, "set" => 42, "block" => 57];
        $filters = ["lower" => 41, "replace" => 41, "striptags" => 41, "clean_class" => 50, "trim" => 51, "render" => 51, "escape" => 58, "without" => 86];
        $functions = ["file_url" => 56];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block'],
                ['lower', 'replace', 'striptags', 'clean_class', 'trim', 'render', 'escape', 'without'],
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
        if ((twig_lower_filter($this->env, twig_replace_filter(strip_tags($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_paragraph_image_position", []), "value", [])), ["
" => "", " " => ""])) == "right")) {
            echo " 
";
            // line 42
            $context["image_position"] = "right";
        } else {
            // line 44
            $context["image_position"] = "left";
        }
        // line 46
        echo "
";
        // line 48
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 50
($context["paragraph"] ?? null), "bundle", [])))), 2 => twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(        // line 51
($context["paragraph"] ?? null), "field_paragraph_extra_class", []), "value", [])))), 3 => "side-image", 4 => ((        // line 53
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : (""))];
        // line 56
        $context["img_url"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_paragraph_image", []), "#items", [], "array"), "entity", []), "uri", []), "value", []))]);
        // line 57
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 58
        echo "  <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo " >
\t";
        // line 59
        if ((($context["image_position"] ?? null) == "left")) {
            // line 60
            echo "\t<div class=\"image-container col-md-5 col-sm-4 pull-left\">
\t  <div class=\"background-image-holder\">
\t\t<img alt=\"background\" src=\"";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["img_url"] ?? null)), "html", null, true);
            echo "\" />
\t  </div>
\t</div>
    <div class=\"container\">
\t  <div clas=\"row\">
\t    <div class=\"col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 content clearfix\">
          ";
            // line 68
            $this->displayBlock('content', $context, $blocks);
            // line 71
            echo "\t    </div>
\t  </div>
\t</div>
\t";
        }
        // line 75
        echo "\t
\t
\t";
        // line 77
        if ((($context["image_position"] ?? null) == "right")) {
            // line 78
            echo "\t<div class=\"image-container col-md-5 col-sm-3 pull-right\">
\t  <div class=\"background-image-holder\">
\t\t<img class=\"background-image\" alt=\"Background Image\" src=\"";
            // line 80
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["img_url"] ?? null)), "html", null, true);
            echo "\">
\t  </div>
\t</div>
    <div class=\"container\">
\t  <div clas=\"row\">
\t    <div class=\"col-md-6 content col-sm-8 clearfix\">
            ";
            // line 86
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_paragraph_extra_class", "field_paragraph_image", "field_paragraph_image_position"), "html", null, true);
            echo "
\t    </div>
\t  </div>
\t</div>
\t";
        }
        // line 91
        echo "  </section>
";
    }

    // line 68
    public function block_content($context, array $blocks = [])
    {
        echo "\t
            ";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_paragraph_extra_class", "field_paragraph_image", "field_paragraph_image_position"), "html", null, true);
        echo "
          ";
    }

    public function getTemplateName()
    {
        return "themes/pivot/templates/paragraph--paragraph_side_image_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 69,  144 => 68,  139 => 91,  131 => 86,  122 => 80,  118 => 78,  116 => 77,  112 => 75,  106 => 71,  104 => 68,  95 => 62,  91 => 60,  89 => 59,  84 => 58,  78 => 57,  76 => 56,  74 => 53,  73 => 51,  72 => 50,  71 => 48,  68 => 46,  65 => 44,  62 => 42,  57 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pivot/templates/paragraph--paragraph_side_image_block.html.twig", "C:\\wamp64\\www\\pivot\\themes\\pivot\\templates\\paragraph--paragraph_side_image_block.html.twig");
    }
}
