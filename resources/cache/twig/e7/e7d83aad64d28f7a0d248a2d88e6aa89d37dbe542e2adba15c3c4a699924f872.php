<?php

/* index.html.twig */
class __TwigTemplate_6c56c1289a2c8b655c07f6c7b2d65d430be4d76d3b312b5492c3f42017a0a980 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["active"] = "homepage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <h1>Hello</h1>
    ";
        // line 7
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 8
            echo "        Hello \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "username", array()), "html", null, true);
            echo "\".<br />
        <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Logout"), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 11
            echo "        You're not logged. Please <a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("connect"), "html", null, true);
            echo "</a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  45 => 9,  40 => 8,  38 => 7,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% set active = 'homepage' %}*/
/* */
/* {% block content %}*/
/* */
/*     <h1>Hello</h1>*/
/*     {% if is_granted('ROLE_USER') %}*/
/*         Hello "{{ app.security.token.username }}".<br />*/
/*         <a href="{{ path('logout') }}">{{ 'Logout'|trans }}</a>*/
/*     {% else %}*/
/*         You're not logged. Please <a href="{{ path('login') }}">{{ 'connect'|trans }}</a>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
