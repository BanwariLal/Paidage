<?php

/* login.html.twig */
class __TwigTemplate_d327a8ad75e9a4e856654588603798fec34911209a51a916144455f39e6dc9ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "login.html.twig", 1);
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
        $context["active"] = "account";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login"), "html", null, true);
        echo "</h1>

    ";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "        <div class=\"alert alert-error\">
            ";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
        </div>
        <div class=\"alert alert-info\">
            <strong>Hint:</strong> Try <code>username</code>/<code>password</code>
        </div>

    ";
        }
        // line 17
        echo "
    <form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" novalidate ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-vertical\">
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Send"), "html", null, true);
        echo "</button>
        </div>
    </form>

";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  66 => 19,  60 => 18,  57 => 17,  47 => 10,  44 => 9,  42 => 8,  37 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% set active = 'account' %}*/
/* */
/* {% block content %}*/
/* */
/*     <h1>{{ 'Login'|trans }}</h1>*/
/* */
/*     {% if error %}*/
/*         <div class="alert alert-error">*/
/*             {{ error }}*/
/*         </div>*/
/*         <div class="alert alert-info">*/
/*             <strong>Hint:</strong> Try <code>username</code>/<code>password</code>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     <form action="{{ path('login_check') }}" method="post" novalidate {{ form_enctype(form) }} class="form-vertical">*/
/*         {{ form_widget(form) }}*/
/*         <div class="form-actions">*/
/*             <button type="submit" class="btn btn-primary">{{ 'Send'|trans }}</button>*/
/*         </div>*/
/*     </form>*/
/* */
/* {% endblock %}*/
/* */
