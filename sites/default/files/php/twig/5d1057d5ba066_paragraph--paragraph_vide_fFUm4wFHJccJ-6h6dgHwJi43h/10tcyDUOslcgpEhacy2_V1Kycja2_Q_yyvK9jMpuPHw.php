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

/* themes/pivot/templates/paragraph--paragraph_video_bg_block.html.twig */
class __TwigTemplate_b0d7034a24e15a44db380868c28509f42f5398ba60577a2daf1af4c890625cfb extends \Twig\Template
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
        $tags = ["set" => 42, "if" => 43, "block" => 62];
        $filters = ["clean_class" => 56, "striptags" => 57, "escape" => 63, "trim" => 63, "render" => 63, "without" => 82];
        $functions = ["file_url" => 42];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'striptags', 'escape', 'trim', 'render', 'without'],
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
        // line 43
        if ((($context["bg_img_url"] ?? null) != "/")) {
            // line 44
            echo "  ";
            $context["image_class"] = "imagebg";
        } else {
            // line 46
            echo "  ";
            $context["image_class"] = "";
        }
        // line 48
        echo "
";
        // line 49
        $context["video_webm"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_paragraph_video_webm", []), "#items", [], "array"), "entity", []), "uri", []), "value", []))]);
        // line 50
        $context["video_ogg"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_paragraph_video_ogg", []), "#items", [], "array"), "entity", []), "uri", []), "value", []))]);
        // line 51
        $context["video_mp4"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_paragraph_video_mp4", []), "#items", [], "array"), "entity", []), "uri", []), "value", []))]);
        // line 52
        echo "
";
        // line 54
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 56
($context["paragraph"] ?? null), "bundle", [])))), 2 => strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(        // line 57
($context["paragraph"] ?? null), "field_paragraph_extra_class", []), "value", []))), 3 => ((        // line 58
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : (""))];
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 63
        echo "  <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo " ";
        if (twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_paragraph_id", []), "value", [])))) {
            echo " id=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_paragraph_id", []), "value", []))), "html", null, true);
            echo "\"  ";
        }
        echo " ";
        if (twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_paragraph_data_overlay", []), "value", [])))) {
            echo " data-overlay=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_paragraph_data_overlay", []), "value", []))), "html", null, true);
            echo "\" ";
        }
        echo ">

    ";
        // line 65
        if ((($context["bg_img_url"] ?? null) != "/")) {
            // line 66
            echo "\t<div class=\"background-image-holder\">
       <img alt=\"background\" src=\"";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bg_img_url"] ?? null)), "html", null, true);
            echo "\" />
    </div>
    ";
        }
        // line 70
        echo "    ";
        if ((((($context["video_webm"] ?? null) != "/") || (($context["video_ogg"] ?? null) != "/")) || (($context["video_mp4"] ?? null) != "/"))) {
            // line 71
            echo "\t  <div class=\"video-wrapper\">
\t    <video autoplay=\"\" muted=\"\" loop=\"\">
\t\t";
            // line 73
            if ((($context["video_webm"] ?? null) != "/")) {
                echo " <source src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["video_webm"] ?? null)), "html", null, true);
                echo "\" type=\"video/webm\"> ";
            }
            // line 74
            echo "\t\t";
            if ((($context["video_ogg"] ?? null) != "/")) {
                echo " <source src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["video_ogg"] ?? null)), "html", null, true);
                echo "\" type=\"video/webm\"> ";
            }
            // line 75
            echo "\t\t";
            if ((($context["video_mp4"] ?? null) != "/")) {
                echo " <source src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["video_mp4"] ?? null)), "html", null, true);
                echo "\" type=\"video/webm\"> ";
            }
            // line 76
            echo "\t    </video>
\t  </div>
\t";
        }
        // line 79
        echo "    
    <div class=\"container ";
        // line 80
        if (twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_paragraph_align_vertical", []), "value", [])))) {
            echo " align-vertical ";
        }
        echo "\">
    ";
        // line 81
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "\t</div>
  </section>
";
    }

    // line 81
    public function block_content($context, array $blocks = [])
    {
        echo "\t
      ";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_paragraph_extra_class", "field_paragraph_background_image", "field_paragraph_video_mp4", "field_paragraph_video_ogg", "field_paragraph_video_webm", "field_paragraph_align_vertical"), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/pivot/templates/paragraph--paragraph_video_bg_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 82,  176 => 81,  170 => 84,  168 => 81,  162 => 80,  159 => 79,  154 => 76,  147 => 75,  140 => 74,  134 => 73,  130 => 71,  127 => 70,  121 => 67,  118 => 66,  116 => 65,  98 => 63,  92 => 62,  89 => 61,  87 => 58,  86 => 57,  85 => 56,  84 => 54,  81 => 52,  79 => 51,  77 => 50,  75 => 49,  72 => 48,  68 => 46,  64 => 44,  62 => 43,  60 => 42,  57 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pivot/templates/paragraph--paragraph_video_bg_block.html.twig", "C:\\wamp64\\www\\consultorio\\themes\\pivot\\templates\\paragraph--paragraph_video_bg_block.html.twig");
    }
}
