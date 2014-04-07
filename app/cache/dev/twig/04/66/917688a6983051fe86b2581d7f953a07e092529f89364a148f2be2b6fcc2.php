<?php

/* elinoixshopBundle:Form:bootstrap-form.html.twig */
class __TwigTemplate_0466917688a6983051fe86b2581d7f953a07e092529f89364a148f2be2b6fcc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_start' => array($this, 'block_form_start'),
            'form_row' => array($this, 'block_form_row'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_widget' => array($this, 'block_button_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_start', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_row', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 50
        echo "        
        
";
        // line 52
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        echo "        
";
        // line 61
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 68
        echo "        
";
        // line 69
        $this->displayBlock('form_label', $context, $blocks);
        // line 86
        echo "        
";
        // line 87
        $this->displayBlock('button_widget', $context, $blocks);
        // line 97
        echo "    
";
    }

    // line 1
    public function block_form_start($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 4
        echo "    ";
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 5
            echo "        ";
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
            // line 6
            echo "    ";
        } else {
            // line 7
            echo "        ";
            $context["form_method"] = "POST";
            // line 8
            echo "    ";
        }
        // line 9
        echo "    <form method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" class=\"form-horizontal\" 
         action=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">
    ";
        // line 11
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 12
            echo "        <input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_form_row($context, array $blocks = array())
    {
        // line 18
        ob_start();
        // line 19
        echo "    <div class=\"form-group\">
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 27
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 28
        ob_start();
        // line 29
        echo "    ";
        if ((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) && (!(isset($context["empty_value_in_choices"]) ? $context["empty_value_in_choices"] : $this->getContext($context, "empty_value_in_choices"))))) {
            // line 30
            echo "        ";
            $context["required"] = false;
            // line 31
            echo "    ";
        }
        // line 32
        echo "    <div class=\"col-md-9\">
    <select ";
        // line 33
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo " class=\"form-control\">
        ";
        // line 34
        if ((!(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value"))))) {
            // line 35
            echo "            <option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</option>
        ";
        }
        // line 37
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 38
            echo "            ";
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 39
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
            ";
            // line 40
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) && (!(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")))))) {
                // line 41
                echo "                <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>
            ";
            }
            // line 43
            echo "        ";
        }
        // line 44
        echo "        ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 45
        echo "        ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
    </select>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 52
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 53
        ob_start();
        // line 54
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 55
        echo "    <div class=\"col-md-9\">
        <input type=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo " class=\"form-control\"/>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 61
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 62
        ob_start();
        // line 63
        echo "    <div class=\"col-md-9\">
        <textarea ";
        // line 64
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " class=\"form-control\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 69
    public function block_form_label($context, array $blocks = array())
    {
        // line 70
        ob_start();
        // line 71
        echo "    ";
        if ((!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false))) {
            // line 72
            echo "        ";
            if ((!(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")))) {
                // line 73
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 74
                echo "        ";
            }
            // line 75
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 76
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " required"))));
                // line 77
                echo "        ";
            }
            // line 78
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 79
                echo "            ";
                $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
                // line 80
                echo "        ";
            }
            // line 81
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " col-md-3 control-label"))));
            // line 82
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 87
    public function block_button_widget($context, array $blocks = array())
    {
        // line 88
        ob_start();
        // line 89
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 90
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
            // line 91
            echo "    ";
        }
        // line 92
        echo "    <div class=\"col-md-9 col-md-offset-3\">
        <button type=\"";
        // line 93
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo " class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "elinoixshopBundle:Form:bootstrap-form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  340 => 93,  337 => 92,  334 => 91,  331 => 90,  328 => 89,  326 => 88,  323 => 87,  301 => 82,  298 => 81,  295 => 80,  292 => 79,  289 => 78,  286 => 77,  283 => 76,  280 => 75,  277 => 74,  274 => 73,  271 => 72,  268 => 71,  266 => 70,  263 => 69,  253 => 64,  250 => 63,  248 => 62,  245 => 61,  229 => 56,  226 => 55,  223 => 54,  221 => 53,  218 => 52,  208 => 45,  205 => 44,  202 => 43,  196 => 41,  194 => 40,  189 => 39,  186 => 38,  183 => 37,  173 => 35,  171 => 34,  164 => 33,  161 => 32,  158 => 31,  155 => 30,  152 => 29,  150 => 28,  147 => 27,  139 => 22,  135 => 21,  131 => 20,  128 => 19,  126 => 18,  123 => 17,  114 => 12,  112 => 11,  92 => 10,  87 => 9,  84 => 8,  81 => 7,  78 => 6,  75 => 5,  69 => 3,  67 => 2,  64 => 1,  57 => 87,  54 => 86,  49 => 68,  44 => 60,  38 => 50,  36 => 27,  33 => 26,  28 => 16,  26 => 1,  72 => 4,  61 => 18,  59 => 97,  55 => 15,  52 => 69,  47 => 61,  42 => 52,  39 => 7,  34 => 4,  31 => 17,);
    }
}
