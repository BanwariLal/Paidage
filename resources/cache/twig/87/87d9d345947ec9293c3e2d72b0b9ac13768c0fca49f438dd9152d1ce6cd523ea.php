<?php

/* page-with-cache.html.twig */
class __TwigTemplate_2c27abb4778a8e8d7b345bbca240f4adbea0891f5fb1f3d05ee6f3a74bac2bb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "page-with-cache.html.twig", 1);
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
        $context["active"] = "page_with_cache";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    ";
        // line 6
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "debug", array())) {
            // line 7
            echo "        <div class=\"alert alert-error\" >
            <button class=\"close\" data-dismiss=\"alert\">×</button>
            <p>
                <h4>
                    Wrong front controller.
                </h4>
                Your are running the <pre>index_dev.php</pre> front
                controller, please run <pre>index.php</pre> front
                controller.
            </p>
        </div>
        <div class=\"alert-message block-message error\">
        </div>
    ";
        }
        // line 21
        echo "
    <p>
        This page is cached for 10 seconds<br />
        Hit @ : ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
        echo ".<br />
        Try to refresh the page.<br />
    </p>

";
    }

    public function getTemplateName()
    {
        return "page-with-cache.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 24,  55 => 21,  39 => 7,  37 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% set active = 'page_with_cache' %}*/
/* */
/* {% block content %}*/
/* */
/*     {% if app.debug %}*/
/*         <div class="alert alert-error" >*/
/*             <button class="close" data-dismiss="alert">×</button>*/
/*             <p>*/
/*                 <h4>*/
/*                     Wrong front controller.*/
/*                 </h4>*/
/*                 Your are running the <pre>index_dev.php</pre> front*/
/*                 controller, please run <pre>index.php</pre> front*/
/*                 controller.*/
/*             </p>*/
/*         </div>*/
/*         <div class="alert-message block-message error">*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <p>*/
/*         This page is cached for 10 seconds<br />*/
/*         Hit @ : {{ date }}.<br />*/
/*         Try to refresh the page.<br />*/
/*     </p>*/
/* */
/* {% endblock %}*/
/* */
