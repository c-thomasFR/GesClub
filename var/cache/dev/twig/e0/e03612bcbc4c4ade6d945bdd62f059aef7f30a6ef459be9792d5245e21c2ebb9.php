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

/* @AdminLTE/Navbar/user.html.twig */
class __TwigTemplate_1de8d37daa5e5e2a6669cdf3ef2c191d0399e99603568bdd99e9769ee57a8ffd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'member_since' => [$this, 'block_member_since'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Navbar/user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@AdminLTE/Navbar/user.html.twig"));

        // line 4
        $macros["macro"] = $this->macros["macro"] = $this->loadTemplate("@AdminLTE/Macros/default.html.twig", "@AdminLTE/Navbar/user.html.twig", 4)->unwrap();
        // line 5
        echo "<li class=\"dropdown user user-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        ";
        // line 7
        echo twig_call_macro($macros["macro"], "macro_avatar", [twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "avatar", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "username", [], "any", false, false, false, 7), "user-image"], 7, $context, $this->getSourceContext());
        echo "
        <span class=\"hidden-xs\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <!-- User image -->
        <li class=\"user-header\">
            ";
        // line 13
        echo twig_call_macro($macros["macro"], "macro_avatar", [twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "avatar", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "username", [], "any", false, false, false, 13)], 13, $context, $this->getSourceContext());
        echo "
            <p>
                ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "
                ";
        // line 16
        $this->displayBlock('member_since', $context, $blocks);
        // line 19
        echo "            </p>
        </li>
        ";
        // line 21
        if ((isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "            <!-- Menu Body -->
            <li class=\"user-body\">
                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 25
                echo "                    <div class=\"col-xs-4 text-center\">
                        <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias(twig_get_attribute($this->env, $this->source, $context["link"], "path", [], "any", false, false, false, 26)), twig_get_attribute($this->env, $this->source, $context["link"], "parameters", [], "any", false, false, false, 26)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 26), "html", null, true);
                echo "</a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            </li>
        ";
        }
        // line 31
        echo "        ";
        if (((isset($context["showLogoutLink"]) || array_key_exists("showLogoutLink", $context) ? $context["showLogoutLink"] : (function () { throw new RuntimeError('Variable "showLogoutLink" does not exist.', 31, $this->source); })()) || (isset($context["showProfileLink"]) || array_key_exists("showProfileLink", $context) ? $context["showProfileLink"] : (function () { throw new RuntimeError('Variable "showProfileLink" does not exist.', 31, $this->source); })()))) {
            // line 32
            echo "            <!-- Menu Footer-->
            <li class=\"user-footer\">
                ";
            // line 34
            if ((isset($context["showProfileLink"]) || array_key_exists("showProfileLink", $context) ? $context["showProfileLink"] : (function () { throw new RuntimeError('Variable "showProfileLink" does not exist.', 34, $this->source); })())) {
                // line 35
                echo "                    <div class=\"pull-left\">
                        <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_profile"), ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "identifier", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\"
                           class=\"btn btn-default btn-flat\">";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profile", [], "AdminLTEBundle"), "html", null, true);
                echo "</a>
                    </div>
                ";
            }
            // line 40
            echo "                ";
            if ((isset($context["showLogoutLink"]) || array_key_exists("showLogoutLink", $context) ? $context["showLogoutLink"] : (function () { throw new RuntimeError('Variable "showLogoutLink" does not exist.', 40, $this->source); })())) {
                // line 41
                echo "                    <div class=\"pull-right\">
                        <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath(), "html", null, true);
                echo "\"
                           class=\"btn btn-default btn-flat\">";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign out", [], "AdminLTEBundle"), "html", null, true);
                echo "</a>
                    </div>
                ";
            }
            // line 46
            echo "            </li>
        ";
        }
        // line 48
        echo "    </ul>
</li>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_member_since($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "member_since"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "member_since"));

        // line 17
        echo "                <small>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Member since %date%", ["%date%" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "memberSince", [], "any", false, false, false, 17), "m.Y")], "AdminLTEBundle"), "html", null, true);
        echo "</small>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@AdminLTE/Navbar/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 17,  161 => 16,  149 => 48,  145 => 46,  139 => 43,  135 => 42,  132 => 41,  129 => 40,  123 => 37,  119 => 36,  116 => 35,  114 => 34,  110 => 32,  107 => 31,  103 => 29,  92 => 26,  89 => 25,  85 => 24,  81 => 22,  79 => 21,  75 => 19,  73 => 16,  67 => 15,  62 => 13,  54 => 8,  50 => 7,  46 => 5,  44 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var links \\KevinPapst\\AdminLTEBundle\\Model\\NavBarUserLink[] #}
{# @var showProfileLink bool #}
{# @var showLogoutLink bool #}
{% import \"@AdminLTE/Macros/default.html.twig\" as macro %}
<li class=\"dropdown user user-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        {{ macro.avatar(user.avatar, user.username, 'user-image') }}
        <span class=\"hidden-xs\">{{ user.name }}</span>
    </a>
    <ul class=\"dropdown-menu\">
        <!-- User image -->
        <li class=\"user-header\">
            {{ macro.avatar(user.avatar, user.username) }}
            <p>
                {{ user.name }} - {{ user.title }}
                {% block member_since %}
                <small>{{ 'Member since %date%'|trans({'%date%': user.memberSince|date('m.Y') }, 'AdminLTEBundle') }}</small>
                {% endblock %}
            </p>
        </li>
        {% if links %}
            <!-- Menu Body -->
            <li class=\"user-body\">
                {% for link in links %}
                    <div class=\"col-xs-4 text-center\">
                        <a href=\"{{ path(link.path|route_alias, link.parameters) }}\">{{ link.title }}</a>
                    </div>
                {% endfor %}
            </li>
        {% endif %}
        {% if showLogoutLink or showProfileLink %}
            <!-- Menu Footer-->
            <li class=\"user-footer\">
                {% if showProfileLink %}
                    <div class=\"pull-left\">
                        <a href=\"{{ path('adminlte_profile'|route_alias, {'id' : user.identifier}) }}\"
                           class=\"btn btn-default btn-flat\">{{ 'Profile'|trans({}, 'AdminLTEBundle') }}</a>
                    </div>
                {% endif %}
                {% if showLogoutLink %}
                    <div class=\"pull-right\">
                        <a href=\"{{ logout_path() }}\"
                           class=\"btn btn-default btn-flat\">{{ 'Sign out'|trans({}, 'AdminLTEBundle') }}</a>
                    </div>
                {% endif %}
            </li>
        {% endif %}
    </ul>
</li>
", "@AdminLTE/Navbar/user.html.twig", "/var/www/GestionClub/vendor/kevinpapst/adminlte-bundle/Resources/views/Navbar/user.html.twig");
    }
}
