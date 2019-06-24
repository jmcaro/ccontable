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

/* themes/pivot/templates/page--fullwidth.html.twig */
class __TwigTemplate_2c5dad83c703928a81d048005355a678632e3d34f6a9f6f8767a1c7653004fc3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'title' => [$this, 'block_title'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 59, "if" => 68, "block" => 88];
        $filters = ["escape" => 66];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 60
        echo "
  <a id=\"top\"></a>

\t
";
        // line 65
        echo "<div class=\"nav-container\">
  <nav class=\"top-bar ";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mainmenu_class"] ?? null)), "html", null, true);
        echo "\">
\t<div class=\"container\">
\t  ";
        // line 68
        if (($this->getAttribute(($context["page"] ?? null), "user_left", []) || $this->getAttribute(($context["page"] ?? null), "user_right", []))) {
            // line 69
            echo "\t    <div class=\"row utility-menu\">
\t\t  <div class=\"col-sm-12\">
\t\t    <div class=\"utility-inner clearfix\">
\t\t      ";
            // line 72
            if ($this->getAttribute(($context["page"] ?? null), "user_left", [])) {
                // line 73
                echo "\t\t\t    ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "user_left", [])), "html", null, true);
                echo "
              ";
            }
            // line 75
            echo "\t\t\t  
\t\t\t  ";
            // line 76
            if ($this->getAttribute(($context["page"] ?? null), "user_right", [])) {
                // line 77
                echo "\t            <div class=\"pull-right\">
\t              ";
                // line 78
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "user_right", [])), "html", null, true);
                echo "
\t            </div>
              ";
            }
            // line 81
            echo "\t\t\t</div>
\t\t  </div>
\t\t</div>
      ";
        }
        // line 85
        echo "\t  
\t  
      ";
        // line 87
        if ((($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) || $this->getAttribute(($context["page"] ?? null), "branding", []))) {
            // line 88
            echo "      ";
            $this->displayBlock('navbar', $context, $blocks);
            // line 104
            echo "      ";
        }
        // line 105
        echo "\t  
    </div>
  </nav>
</div>


";
        // line 112
        $this->displayBlock('main', $context, $blocks);
        // line 161
        echo "

";
        // line 163
        if ((((($this->getAttribute(($context["page"] ?? null), "postscript_first", []) || $this->getAttribute(($context["page"] ?? null), "postscript_second", [])) || $this->getAttribute(($context["page"] ?? null), "postscript_third", [])) || $this->getAttribute(($context["page"] ?? null), "postscript_fouth", [])) || $this->getAttribute(($context["page"] ?? null), "footer", []))) {
            // line 164
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 190
        echo "
";
    }

    // line 88
    public function block_navbar($context, array $blocks = [])
    {
        // line 89
        echo "        <div class=\"row nav-menu\">
          <div class=\"col-sm-3 col-md-2 columns\">
\t        ";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
        echo "
          </div>
\t\t  ";
        // line 93
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 94
            echo "          <div class=\"col-sm-9 col-md-10 columns\">
            ";
            // line 95
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
          </div>
\t\t  ";
        }
        // line 98
        echo "\t    </div>
\t\t
\t\t<div class=\"mobile-toggle\">
\t\t\t\t\t\t<i class=\"icon icon_menu\"></i>
\t\t\t\t\t</div>
      ";
    }

    // line 112
    public function block_main($context, array $blocks = [])
    {
        // line 113
        echo "  <div role=\"main\" id=\"main-container\" class=\"main-container js-quickedit-main-content\">
  
  ";
        // line 116
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 117
            echo "<header class=\"title\">
\t  ";
            // line 119
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
                // line 120
                echo "        ";
                $this->displayBlock('header', $context, $blocks);
                // line 123
                echo "      ";
            }
            // line 124
            echo "</header>
";
        }
        // line 127
        echo "
";
        // line 129
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            // line 130
            echo "<div class=\"title-wrapper\">
      ";
            // line 132
            echo "      ";
            $this->displayBlock('title', $context, $blocks);
            // line 134
            echo "\t 
</div>
";
        }
        // line 138
        echo "\t\t
        ";
        // line 140
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 141
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 144
            echo "        ";
        }
        // line 145
        echo "
        ";
        // line 147
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 148
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 151
            echo "        ";
        }
        // line 152
        echo "
        ";
        // line 154
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 158
        echo "
  </div>
";
    }

    // line 120
    public function block_header($context, array $blocks = [])
    {
        // line 121
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
        ";
    }

    // line 132
    public function block_title($context, array $blocks = [])
    {
        // line 133
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "title", [])), "html", null, true);
        echo "
      ";
    }

    // line 141
    public function block_action_links($context, array $blocks = [])
    {
        // line 142
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
        echo "</ul>
          ";
    }

    // line 148
    public function block_help($context, array $blocks = [])
    {
        // line 149
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 154
    public function block_content($context, array $blocks = [])
    {
        // line 155
        echo "          <a id=\"main-content\"></a>
          ";
        // line 156
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 164
    public function block_footer($context, array $blocks = [])
    {
        // line 165
        echo "<div class=\"footer-container\" role=\"contentinfo\">
\t<!-- postscript -->
\t";
        // line 167
        if (((($this->getAttribute(($context["page"] ?? null), "postscript_first", []) || $this->getAttribute(($context["page"] ?? null), "postscript_second", [])) || $this->getAttribute(($context["page"] ?? null), "postscript_third", [])) || $this->getAttribute(($context["page"] ?? null), "postscript_fouth", []))) {
            // line 168
            echo "    <div id=\"postscript\" class=\"postscript row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_first\">
            ";
            // line 170
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "postscript_first", [])), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_second\">
            ";
            // line 173
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "postscript_second", [])), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_third\">
            ";
            // line 176
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "postscript_third", [])), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_fouth\">
            ";
            // line 179
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "postscript_fouth", [])), "html", null, true);
            echo "
          </div>
    </div>
    ";
        }
        // line 183
        echo "\t
    ";
        // line 184
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 185
            echo "\t  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
\t";
        }
        // line 187
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/pivot/templates/page--fullwidth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 187,  354 => 185,  352 => 184,  349 => 183,  342 => 179,  336 => 176,  330 => 173,  324 => 170,  320 => 168,  318 => 167,  314 => 165,  311 => 164,  305 => 156,  302 => 155,  299 => 154,  292 => 149,  289 => 148,  282 => 142,  279 => 141,  272 => 133,  269 => 132,  262 => 121,  259 => 120,  253 => 158,  250 => 154,  247 => 152,  244 => 151,  241 => 148,  238 => 147,  235 => 145,  232 => 144,  229 => 141,  226 => 140,  223 => 138,  218 => 134,  215 => 132,  212 => 130,  210 => 129,  207 => 127,  203 => 124,  200 => 123,  197 => 120,  194 => 119,  191 => 117,  189 => 116,  185 => 113,  182 => 112,  173 => 98,  167 => 95,  164 => 94,  162 => 93,  157 => 91,  153 => 89,  150 => 88,  145 => 190,  142 => 164,  140 => 163,  136 => 161,  134 => 112,  126 => 105,  123 => 104,  120 => 88,  118 => 87,  114 => 85,  108 => 81,  102 => 78,  99 => 77,  97 => 76,  94 => 75,  88 => 73,  86 => 72,  81 => 69,  79 => 68,  74 => 66,  71 => 65,  65 => 60,  63 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pivot/templates/page--fullwidth.html.twig", "C:\\wamp64\\www\\consultorio\\themes\\pivot\\templates\\page--fullwidth.html.twig");
    }
}
