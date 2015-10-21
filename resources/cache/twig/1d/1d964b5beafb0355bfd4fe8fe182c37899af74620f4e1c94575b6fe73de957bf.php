<?php

/* layout.html.twig */
class __TwigTemplate_75be13444ccbe049fc3411e42bc1929a5ea2a42edbe8e6bb8b24ca9fbecec0a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9\" lang=\"en\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

    <title>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Homepage"), "html", null, true);
        echo "</title>

    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <meta name=\"viewport\" content=\"width=device-width\">

    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/css/styles.css\">

    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/js/libs/modernizr-2.5.3-respond-1.1.0.min.js\"></script>
</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href=\"http://browsehappy.com/\">Upgrade to a different browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

    ";
        // line 24
        $context["active"] = ((array_key_exists("active", $context)) ? (_twig_default_filter((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")), null)) : (null));
        // line 25
        echo "    <div class=\"navbar navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <a class=\"brand\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Silex Kitchen Sink Edition"), "html", null, true);
        echo "</a>
                <div class=\"nav-collapse\">
                    <ul class=\"nav\">
                        <li ";
        // line 31
        if (("homepage" == (isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Homepage"), "html", null, true);
        echo "</a></li>
                        <li ";
        // line 32
        if (("page_with_cache" == (isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("page_with_cache");
        echo "\">Cache sample</a></li>
                        <li ";
        // line 33
        if (("form" == (isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("form");
        echo "\">Form sample</a></li>
                        <li ";
        // line 34
        if (("doctrine" == (isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("doctrine");
        echo "\">Doctrine</a></li>
                        <li class=\"dropdown";
        // line 35
        if (("account" == (isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")))) {
            echo " active";
        }
        echo "\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                Account <b class=\"caret\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 40
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 41
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Logout"), "html", null, true);
            echo "</a></li>
                                ";
        } else {
            // line 43
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login"), "html", null, true);
            echo "</a></li>
                                    <li><a href=\"#\">";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Register"), "html", null, true);
            echo "</a></li>
                                ";
        }
        // line 46
        echo "                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div id=\"main\" role=\"main\" class=\"container\">
            ";
        // line 56
        $context["alertTypeAvaillable"] = array(0 => "info", 1 => "success", 2 => "warning", 3 => "error");
        // line 57
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alertTypeAvaillable"]) ? $context["alertTypeAvaillable"] : $this->getContext($context, "alertTypeAvaillable")));
        foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
            // line 58
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "getFlashBag", array()), "get", array(0 => $context["alert"]), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 59
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["alert"], "html", null, true);
                echo "\" >
                        <button class=\"close\" data-dismiss=\"alert\">×</button>
                        ";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"]), "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "        </div>
    </div>

    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/js/libs/jquery-1.7.2.min.js\"><\\/script>')</script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/scripts.js\"></script>
</body>
</html>
";
    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        // line 66
        echo "            ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 66,  201 => 65,  193 => 72,  189 => 71,  183 => 67,  180 => 65,  174 => 64,  165 => 61,  159 => 59,  154 => 58,  149 => 57,  147 => 56,  135 => 46,  130 => 44,  123 => 43,  115 => 41,  113 => 40,  103 => 35,  95 => 34,  87 => 33,  79 => 32,  69 => 31,  61 => 28,  56 => 25,  54 => 24,  46 => 19,  41 => 17,  31 => 10,  20 => 1,);
    }
}
/* <!doctype html>*/
/* <!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->*/
/* <!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->*/
/* <!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->*/
/* <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/* */
/*     <title>{{ 'Homepage'|trans }}</title>*/
/* */
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <meta name="viewport" content="width=device-width">*/
/* */
/*     <link rel="stylesheet" href="{{ app.request.basepath }}/assets/css/styles.css">*/
/* */
/*     <script src="{{ app.request.basepath }}/js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>*/
/* </head>*/
/* <body>*/
/* <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->*/
/* */
/*     {% set active = active|default(null) %}*/
/*     <div class="navbar navbar-fixed-top">*/
/*         <div class="navbar-inner">*/
/*             <div class="container">*/
/*                 <a class="brand" href="{{ path('homepage') }}">{{ 'Silex Kitchen Sink Edition'|trans }}</a>*/
/*                 <div class="nav-collapse">*/
/*                     <ul class="nav">*/
/*                         <li {% if 'homepage' == active %}class="active"{% endif %}><a href="{{ path('homepage') }}">{{ 'Homepage'|trans }}</a></li>*/
/*                         <li {% if 'page_with_cache' == active %}class="active"{% endif %}><a href="{{ path('page_with_cache') }}">Cache sample</a></li>*/
/*                         <li {% if 'form' == active %}class="active"{% endif %}><a href="{{ path('form') }}">Form sample</a></li>*/
/*                         <li {% if 'doctrine' == active %}class="active"{% endif %}><a href="{{ path('doctrine') }}">Doctrine</a></li>*/
/*                         <li class="dropdown{% if 'account' == active %} active{% endif %}">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                 Account <b class="caret"></b>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 {% if is_granted('ROLE_USER') %}*/
/*                                     <li><a href="{{ path('logout') }}">{{ 'Logout'|trans }}</a></li>*/
/*                                 {% else %}*/
/*                                     <li><a href="{{ path('login') }}">{{ 'Login'|trans }}</a></li>*/
/*                                     <li><a href="#">{{ 'Register'|trans }}</a></li>*/
/*                                 {% endif %}*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div><!--/.nav-collapse -->*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="container">*/
/*         <div id="main" role="main" class="container">*/
/*             {% set alertTypeAvaillable = [ 'info', 'success', 'warning', 'error'] %}*/
/*             {% for alert in alertTypeAvaillable %}*/
/*                 {% for message in app.session.getFlashBag.get(alert) %}*/
/*                     <div class="alert alert-{{ alert }}" >*/
/*                         <button class="close" data-dismiss="alert">×</button>*/
/*                         {{ message|trans }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*             {% block content %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>*/
/*     <script>window.jQuery || document.write('<script src="{{ app.request.basepath }}/js/libs/jquery-1.7.2.min.js"><\/script>')</script>*/
/*     <script src="{{ app.request.basepath }}/assets/js/scripts.js"></script>*/
/* </body>*/
/* </html>*/
/* */
