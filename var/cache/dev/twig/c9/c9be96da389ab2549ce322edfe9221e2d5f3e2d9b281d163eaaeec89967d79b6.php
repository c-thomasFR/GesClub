<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @AdminLTE/Widgets/box-widget.html.twig */
class __TwigTemplate_a18186e11b945fca6612f9ec2b10dd78de0178f043cb679c485ecb72a1d03dff extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Widgets/box-widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Widgets/box-widget.html.twig"));

        // line 1
        $macros["button"] = $this->macros["button"] = $this->loadTemplate("@AdminLTE/Macros/buttons.html.twig", "@AdminLTE/Widgets/box-widget.html.twig", 1)->unwrap();
        // line 2
        if (        $this->hasBlock("box_before", $context, $blocks)) {
            $this->displayBlock("box_before", $context, $blocks);
        }
        // line 3
        echo "
";
        // line 4
        $context["_collapsed"] = (((isset($context["collapsed"]) || array_key_exists("collapsed", $context))) ? (_twig_default_filter((isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 4, $this->source); })()), false)) : (false));
        // line 5
        $context["_solid"] = (((isset($context["solid"]) || array_key_exists("solid", $context))) ? (_twig_default_filter((isset($context["solid"]) || array_key_exists("solid", $context) ? $context["solid"] : (function () { throw new RuntimeError('Variable "solid" does not exist.', 5, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 5, $this->source); })()), "widget", [], "any", false, false, false, 5), "solid", [], "any", false, false, false, 5))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 5, $this->source); })()), "widget", [], "any", false, false, false, 5), "solid", [], "any", false, false, false, 5)));
        // line 6
        $context["_border"] = (((isset($context["border"]) || array_key_exists("border", $context))) ? (_twig_default_filter((isset($context["border"]) || array_key_exists("border", $context) ? $context["border"] : (function () { throw new RuntimeError('Variable "border" does not exist.', 6, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 6, $this->source); })()), "widget", [], "any", false, false, false, 6), "bordered", [], "any", false, false, false, 6))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 6, $this->source); })()), "widget", [], "any", false, false, false, 6), "bordered", [], "any", false, false, false, 6)));
        // line 7
        $context["_footer"] = ((((isset($context["use_footer"]) || array_key_exists("use_footer", $context))) ? (_twig_default_filter((isset($context["use_footer"]) || array_key_exists("use_footer", $context) ? $context["use_footer"] : (function () { throw new RuntimeError('Variable "use_footer" does not exist.', 7, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 7, $this->source); })()), "widget", [], "any", false, false, false, 7), "use_footer", [], "any", false, false, false, 7))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 7, $this->source); })()), "widget", [], "any", false, false, false, 7), "use_footer", [], "any", false, false, false, 7))) ||         $this->hasBlock("box_footer", $context, $blocks));
        // line 8
        echo "
";
        // line 9
        if ( !(isset($context["removable"]) || array_key_exists("removable", $context))) {
            // line 10
            echo "    ";
            $context["removable"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 10, $this->source); })()), "widget", [], "any", false, false, false, 10), "removable", [], "any", false, false, false, 10);
        }
        // line 12
        if ( !(isset($context["collapsible"]) || array_key_exists("collapsible", $context))) {
            // line 13
            echo "    ";
            $context["collapsible"] = ((isset($context["_collapsed"]) || array_key_exists("_collapsed", $context) ? $context["_collapsed"] : (function () { throw new RuntimeError('Variable "_collapsed" does not exist.', 13, $this->source); })()) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 13, $this->source); })()), "widget", [], "any", false, false, false, 13), "collapsible", [], "any", false, false, false, 13));
        }
        // line 15
        echo "<div class=\"box box-";
        echo twig_escape_filter($this->env, (((isset($context["boxtype"]) || array_key_exists("boxtype", $context))) ? (_twig_default_filter((isset($context["boxtype"]) || array_key_exists("boxtype", $context) ? $context["boxtype"] : (function () { throw new RuntimeError('Variable "boxtype" does not exist.', 15, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 15, $this->source); })()), "widget", [], "any", false, false, false, 15), "type", [], "any", false, false, false, 15))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 15, $this->source); })()), "widget", [], "any", false, false, false, 15), "type", [], "any", false, false, false, 15))), "html", null, true);
        echo (((isset($context["_solid"]) || array_key_exists("_solid", $context) ? $context["_solid"] : (function () { throw new RuntimeError('Variable "_solid" does not exist.', 15, $this->source); })())) ? (" box-solid") : (""));
        echo (((isset($context["_collapsed"]) || array_key_exists("_collapsed", $context) ? $context["_collapsed"] : (function () { throw new RuntimeError('Variable "_collapsed" does not exist.', 15, $this->source); })())) ? (" collapsed-box") : (""));
        echo "\">
    ";
        // line 16
        if (((        $this->hasBlock("box_title", $context, $blocks) || (isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 16, $this->source); })())) || (isset($context["removable"]) || array_key_exists("removable", $context) ? $context["removable"] : (function () { throw new RuntimeError('Variable "removable" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo "    <div class=\"box-header";
            echo (((isset($context["_border"]) || array_key_exists("_border", $context) ? $context["_border"] : (function () { throw new RuntimeError('Variable "_border" does not exist.', 17, $this->source); })())) ? (" with-border") : (""));
            echo "\">
        ";
            // line 18
            if (            $this->hasBlock("box_title", $context, $blocks)) {
                echo "<h3 class=\"box-title\">";
                $this->displayBlock("box_title", $context, $blocks);
                echo "</h3>";
            }
            // line 19
            echo "        <div class=\"box-tools pull-right\">
            ";
            // line 21
            echo "            ";
            if (            $this->hasBlock("box_tools", $context, $blocks)) {
                $this->displayBlock("box_tools", $context, $blocks);
            }
            // line 22
            echo "            ";
            if ((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 22, $this->source); })())) {
                // line 23
                echo "                ";
                echo twig_call_macro($macros["button"], "macro_action_toolbutton", [((                // line 24
(isset($context["_collapsed"]) || array_key_exists("_collapsed", $context) ? $context["_collapsed"] : (function () { throw new RuntimeError('Variable "_collapsed" does not exist.', 24, $this->source); })())) ? ("fas fa-plus") : ("fas fa-minus")), "collapse", ((                // line 26
(isset($context["collapsible_title"]) || array_key_exists("collapsible_title", $context))) ? (_twig_default_filter((isset($context["collapsible_title"]) || array_key_exists("collapsible_title", $context) ? $context["collapsible_title"] : (function () { throw new RuntimeError('Variable "collapsible_title" does not exist.', 26, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 26), "collapsible_title", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 26), "collapsible_title", [], "any", false, false, false, 26))) : ("")), [], "AdminLTEBundle"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 26), "collapsible_title", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 26), "collapsible_title", [], "any", false, false, false, 26))) : ("")), [], "AdminLTEBundle")))], 23, $context, $this->getSourceContext());
                // line 27
                echo "
            ";
            }
            // line 29
            echo "
            ";
            // line 30
            if ((isset($context["removable"]) || array_key_exists("removable", $context) ? $context["removable"] : (function () { throw new RuntimeError('Variable "removable" does not exist.', 30, $this->source); })())) {
                // line 31
                echo "                ";
                echo twig_call_macro($macros["button"], "macro_action_toolbutton", ["fas fa-times", "remove", ((                // line 34
(isset($context["removable_title"]) || array_key_exists("removable_title", $context))) ? (_twig_default_filter((isset($context["removable_title"]) || array_key_exists("removable_title", $context) ? $context["removable_title"] : (function () { throw new RuntimeError('Variable "removable_title" does not exist.', 34, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 34), "removable_title", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 34), "removable_title", [], "any", false, false, false, 34))) : ("")), [], "AdminLTEBundle"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 34), "removable_title", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true, false, 34), "removable_title", [], "any", false, false, false, 34))) : ("")), [], "AdminLTEBundle")))], 31, $context, $this->getSourceContext());
                // line 35
                echo "
            ";
            }
            // line 37
            echo "        </div>
    </div>
    ";
        }
        // line 40
        echo "    <div class=\"box-body";
        if (        $this->hasBlock("box_body_class", $context, $blocks)) {
            echo " ";
            $this->displayBlock("box_body_class", $context, $blocks);
        }
        echo "\">";
        $this->displayBlock("box_body", $context, $blocks);
        echo "</div>
    ";
        // line 41
        if ((isset($context["_footer"]) || array_key_exists("_footer", $context) ? $context["_footer"] : (function () { throw new RuntimeError('Variable "_footer" does not exist.', 41, $this->source); })())) {
            // line 42
            echo "        <div class=\"box-footer\">";
            if (            $this->hasBlock("box_footer", $context, $blocks)) {
                $this->displayBlock("box_footer", $context, $blocks);
            }
            echo "</div>
    ";
        }
        // line 44
        echo "</div>
";
        // line 45
        if (        $this->hasBlock("box_after", $context, $blocks)) {
            $this->displayBlock("box_after", $context, $blocks);
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@AdminLTE/Widgets/box-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 45,  153 => 44,  145 => 42,  143 => 41,  133 => 40,  128 => 37,  124 => 35,  122 => 34,  120 => 31,  118 => 30,  115 => 29,  111 => 27,  109 => 26,  108 => 24,  106 => 23,  103 => 22,  98 => 21,  95 => 19,  89 => 18,  84 => 17,  82 => 16,  75 => 15,  71 => 13,  69 => 12,  65 => 10,  63 => 9,  60 => 8,  58 => 7,  56 => 6,  54 => 5,  52 => 4,  49 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@AdminLTE/Macros/buttons.html.twig' as button %}
{% if block('box_before') is defined %}{{ block('box_before') }}{% endif %}

{% set _collapsed = collapsed|default(false) %}
{% set _solid     = solid|default(admin_lte_context.widget.solid)  %}
{% set _border    = border|default(admin_lte_context.widget.bordered)  %}
{% set _footer    = use_footer|default(admin_lte_context.widget.use_footer) or block('box_footer') is defined %}

{% if removable is not defined %}
    {% set removable = admin_lte_context.widget.removable %}
{% endif %}
{% if collapsible is not defined %}
    {% set collapsible =  (_collapsed or admin_lte_context.widget.collapsible) %}
{% endif %}
<div class=\"box box-{{ boxtype|default(admin_lte_context.widget.type) }}{{ _solid ? ' box-solid' : '' }}{{ _collapsed ? ' collapsed-box' : '' }}\">
    {% if block('box_title') is defined or collapsible or removable %}
    <div class=\"box-header{{ _border ? ' with-border' : '' }}\">
        {% if block('box_title') is defined %}<h3 class=\"box-title\">{{ block('box_title') }}</h3>{% endif %}
        <div class=\"box-tools pull-right\">
            {# Buttons, labels, and many other things can be placed here! #}
            {% if block('box_tools') is defined %}{{ block('box_tools') }}{% endif %}
            {% if collapsible %}
                {{ button.action_toolbutton(
                    _collapsed ? 'fas fa-plus'  : 'fas fa-minus' ,
                    'collapse',
                    collapsible_title|default(admin_lte_context.widget.collapsible_title|default()|trans({}, 'AdminLTEBundle'))
                ) }}
            {% endif %}

            {% if removable %}
                {{ button.action_toolbutton(
                'fas fa-times',
                'remove',
                removable_title|default(admin_lte_context.widget.removable_title|default()|trans({}, 'AdminLTEBundle'))
                ) }}
            {% endif %}
        </div>
    </div>
    {% endif %}
    <div class=\"box-body{% if block('box_body_class') is defined %} {{ block('box_body_class') }}{% endif %}\">{{ block('box_body') }}</div>
    {% if _footer %}
        <div class=\"box-footer\">{% if block('box_footer') is defined %}{{ block('box_footer') }}{% endif %}</div>
    {% endif %}
</div>
{% if block('box_after') is defined %}{{ block('box_after') }}{% endif %}
", "@AdminLTE/Widgets/box-widget.html.twig", "/var/www/GestionClub/vendor/kevinpapst/adminlte-bundle/Resources/views/Widgets/box-widget.html.twig");
    }
}
