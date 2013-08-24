<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_8992d16d4264ec73bad8c1b25d5ded4ac3b629b98ca893b05d17c356737f7672 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 21
        $context["associationadmin"] = $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin");
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "    var field_dialog_form_list_link_";
        echo $this->getContext($context, "id");
        echo " = function(event) {
        initialize_popup_";
        // line 33
        echo $this->getContext($context, "id");
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 38
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 40
        echo $this->getContext($context, "id");
        echo " .sonata-ba-list-field');

        // the user does click on a row column
        if (element.length == 0) {
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                success: function(html) {
                    Admin.log('[";
        // line 49
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_";
        // line 51
        echo $this->getContext($context, "id");
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 52
        echo $this->getContext($context, "id");
        echo "();
                }
            });

            return;
        }

        jQuery('#";
        // line 59
        echo $this->getContext($context, "id");
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 60
        echo $this->getContext($context, "id");
        echo "').trigger('change');

        field_dialog_";
        // line 62
        echo $this->getContext($context, "id");
        echo ".dialog('close');
    }

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 66
        echo $this->getContext($context, "id");
        echo "  =  function() {

        Admin.log('[";
        // line 68
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        Admin.add_filters(field_dialog_";
        // line 70
        echo $this->getContext($context, "id");
        echo ");

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 74
        echo $this->getContext($context, "id");
        echo ").on('click', field_dialog_form_list_link_";
        echo $this->getContext($context, "id");
        echo ");
        jQuery('form', field_dialog_";
        // line 75
        echo $this->getContext($context, "id");
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 80
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 89
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_";
        // line 91
        echo $this->getContext($context, "id");
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 92
        echo $this->getContext($context, "id");
        echo "();
                }
            });
        });
    }

    // handle the add link
    var field_dialog_form_list_";
        // line 99
        echo $this->getContext($context, "id");
        echo " = function(event) {

        initialize_popup_";
        // line 101
        echo $this->getContext($context, "id");
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 106
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_";
        // line 110
        echo $this->getContext($context, "id");
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 118
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_";
        // line 121
        echo $this->getContext($context, "id");
        echo ".html(html);

                Admin.add_filters(field_dialog_";
        // line 123
        echo $this->getContext($context, "id");
        echo ");

                field_dialog_form_list_handle_action_";
        // line 125
        echo $this->getContext($context, "id");
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 128
        echo $this->getContext($context, "id");
        echo ".dialog({
                    height: 'auto',
                    width: 980,
                    modal: true,
                    resizable: true,
                    title: '";
        // line 133
        echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "associationadmin"), "label"), array(), $this->getAttribute($this->getContext($context, "associationadmin"), "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 135
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list] close callback, removing js event');

                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 138
        echo $this->getContext($context, "id");
        echo ").off('click');
                        jQuery('form', field_dialog_";
        // line 139
        echo $this->getContext($context, "id");
        echo ").off('submit');
                    },
                    zIndex: 9998
                });
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 148
        echo $this->getContext($context, "id");
        echo " = function(event) {
        initialize_popup_";
        // line 149
        echo $this->getContext($context, "id");
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_";
        // line 156
        echo $this->getContext($context, "id");
        echo ".html('');

        Admin.log('[";
        // line 158
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 166
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo $this->getContext($context, "id");
        echo ");

                // populate the popup container
                field_dialog_";
        // line 169
        echo $this->getContext($context, "id");
        echo ".html(html);

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 173
        echo $this->getContext($context, "id");
        echo ").on('click', field_dialog_form_action_";
        echo $this->getContext($context, "id");
        echo ");
                jQuery('form', field_dialog_";
        // line 174
        echo $this->getContext($context, "id");
        echo ").on('submit', field_dialog_form_action_";
        echo $this->getContext($context, "id");
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 177
        echo $this->getContext($context, "id");
        echo ".dialog({
                    height: 'auto',
                    width: 850,
                    modal: true,
                    autoOpen: true,
                    resizable: true,
                    title: '";
        // line 183
        echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "associationadmin"), "label"), array(), $this->getAttribute($this->getContext($context, "associationadmin"), "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 185
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_add] dialog closed - removing  events');
                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 187
        echo $this->getContext($context, "id");
        echo ").off('click');
                        jQuery('form', field_dialog_";
        // line 188
        echo $this->getContext($context, "id");
        echo ").off('submit');
                    },
                    zIndex: 9998
                });
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 197
        echo $this->getContext($context, "id");
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (this.nodeName == 'A' && (element.attr('href').length == 0 || element.attr('href')[0] == '#')) {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 209
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 211
        echo $this->getContext($context, "id");
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 225
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 235
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {

                Admin.log('[";
        // line 244
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] ajax success');

                if (typeof data == 'string') {
                    field_dialog_";
        // line 247
        echo $this->getContext($context, "id");
        echo ".html(data);
                    return;
                };

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (data.result == 'ok') {
                    field_dialog_";
        // line 254
        echo $this->getContext($context, "id");
        echo ".dialog('close');

                    ";
        // line 256
        if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list")) {
            // line 257
            echo "                        ";
            // line 261
            echo "                        jQuery('#";
            echo $this->getContext($context, "id");
            echo "').val(data.objectId);
                        jQuery('#";
            // line 262
            echo $this->getContext($context, "id");
            echo "').change();

                    ";
        } else {
            // line 265
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 267
            echo $this->getContext($context, "id");
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 268
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_retrieve_form_element", array("elementId" => $this->getContext($context, "id"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "uniqid"), "code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "code")));
            // line 273
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 278
            echo $this->getContext($context, "id");
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 279
            echo $this->getContext($context, "id");
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 286
            echo $this->getContext($context, "id");
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 291
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_";
        // line 296
        echo $this->getContext($context, "id");
        echo ".html(html);

                Admin.add_pretty_errors(field_dialog_";
        // line 298
        echo $this->getContext($context, "id");
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 301
        echo $this->getContext($context, "id");
        echo ").submit(field_dialog_form_action_";
        echo $this->getContext($context, "id");
        echo ");
            }
        });

        return false;
    }

    var field_dialog_";
        // line 308
        echo $this->getContext($context, "id");
        echo " = false;

    function initialize_popup_";
        // line 310
        echo $this->getContext($context, "id");
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 312
        echo $this->getContext($context, "id");
        echo ") {
            field_dialog_";
        // line 313
        echo $this->getContext($context, "id");
        echo " = jQuery(\"#field_dialog_";
        echo $this->getContext($context, "id");
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 316
        echo $this->getContext($context, "id");
        echo ");

            Admin.log('[";
        // line 318
        echo $this->getContext($context, "id");
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 325
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 327
        echo $this->getContext($context, "id");
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 332
        echo $this->getContext($context, "id");
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 336
        echo $this->getContext($context, "id");
        echo ")
            .trigger('click')
        ;

        return false;
    }

    Admin.add_pretty_errors(field_dialog_";
        // line 343
        echo $this->getContext($context, "id");
        echo ");


    ";
        // line 346
        if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list")) {
            // line 347
            echo "        ";
            // line 350
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 352
            echo $this->getContext($context, "id");
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 356
            echo $this->getContext($context, "id");
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 360
            echo $this->getContext($context, "id");
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 367
            echo $this->getContext($context, "id");
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 372
            echo $this->getContext($context, "id");
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 379
            echo $this->getContext($context, "id");
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 382
            echo $this->getContext($context, "id");
            echo " option').get(0)) {
                jQuery('#";
            // line 383
            echo $this->getContext($context, "id");
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 386
            echo $this->getContext($context, "id");
            echo "').val('');
            jQuery('#";
            // line 387
            echo $this->getContext($context, "id");
            echo "').trigger('change');

            return false;
        }
        ";
            // line 394
            echo "
        // update the label
        jQuery('#";
            // line 396
            echo $this->getContext($context, "id");
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 398
            echo $this->getContext($context, "id");
            echo "] update the label');

            jQuery('#field_widget_";
            // line 400
            echo $this->getContext($context, "id");
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('translator')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 403
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute($this->getContext($context, "associationadmin"), "uniqid"), "code" => $this->getAttribute($this->getContext($context, "associationadmin"), "code")));
            // line 407
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                success: function(html) {
                    jQuery('#field_widget_";
            // line 409
            echo $this->getContext($context, "id");
            echo "').html(html);
                }
            });
        });

    ";
        }
        // line 415
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  702 => 415,  693 => 409,  687 => 403,  677 => 400,  667 => 396,  663 => 394,  652 => 386,  646 => 383,  626 => 372,  618 => 367,  608 => 360,  594 => 352,  588 => 347,  570 => 336,  563 => 332,  555 => 327,  551 => 325,  527 => 312,  522 => 310,  517 => 308,  442 => 262,  437 => 261,  433 => 256,  412 => 244,  370 => 211,  329 => 185,  256 => 148,  240 => 138,  234 => 135,  229 => 133,  215 => 125,  210 => 123,  205 => 121,  158 => 92,  151 => 63,  672 => 398,  669 => 220,  664 => 215,  657 => 211,  651 => 208,  647 => 206,  642 => 382,  636 => 379,  634 => 201,  631 => 200,  625 => 198,  623 => 197,  620 => 196,  614 => 194,  612 => 193,  609 => 192,  603 => 190,  590 => 350,  586 => 346,  580 => 343,  571 => 140,  566 => 139,  558 => 137,  553 => 136,  550 => 135,  537 => 123,  515 => 117,  508 => 115,  492 => 110,  489 => 109,  483 => 108,  477 => 126,  471 => 109,  465 => 278,  441 => 98,  435 => 257,  431 => 61,  419 => 58,  410 => 55,  405 => 53,  401 => 52,  377 => 43,  374 => 42,  364 => 38,  358 => 35,  345 => 31,  340 => 29,  337 => 28,  334 => 187,  321 => 220,  273 => 168,  270 => 156,  247 => 163,  228 => 156,  197 => 150,  175 => 129,  170 => 104,  137 => 80,  706 => 207,  700 => 204,  697 => 203,  695 => 202,  689 => 407,  679 => 198,  674 => 196,  662 => 194,  659 => 193,  656 => 387,  648 => 187,  645 => 205,  628 => 184,  611 => 183,  606 => 181,  601 => 356,  598 => 188,  595 => 187,  589 => 174,  585 => 172,  583 => 171,  578 => 170,  561 => 138,  540 => 124,  535 => 165,  532 => 164,  529 => 120,  526 => 162,  523 => 119,  521 => 160,  518 => 159,  509 => 154,  505 => 301,  500 => 112,  498 => 149,  495 => 111,  491 => 128,  485 => 126,  460 => 141,  458 => 273,  455 => 101,  449 => 100,  446 => 135,  444 => 99,  439 => 132,  428 => 254,  423 => 122,  403 => 115,  398 => 113,  384 => 111,  380 => 110,  371 => 109,  365 => 209,  352 => 100,  349 => 32,  336 => 95,  314 => 187,  310 => 186,  300 => 84,  294 => 169,  292 => 81,  289 => 80,  275 => 158,  266 => 71,  253 => 165,  250 => 66,  239 => 63,  236 => 158,  231 => 59,  203 => 55,  194 => 149,  178 => 130,  149 => 89,  347 => 97,  341 => 96,  338 => 188,  324 => 183,  315 => 177,  288 => 175,  285 => 79,  267 => 166,  262 => 70,  255 => 68,  223 => 154,  218 => 54,  193 => 50,  187 => 145,  184 => 47,  181 => 106,  164 => 38,  93 => 27,  117 => 50,  567 => 178,  556 => 176,  552 => 175,  544 => 318,  539 => 316,  533 => 168,  531 => 313,  525 => 163,  516 => 160,  512 => 116,  506 => 158,  503 => 113,  499 => 298,  494 => 296,  479 => 286,  476 => 123,  473 => 122,  469 => 279,  462 => 105,  459 => 131,  456 => 268,  452 => 267,  445 => 121,  429 => 102,  425 => 59,  418 => 247,  414 => 121,  409 => 118,  391 => 48,  385 => 94,  379 => 82,  376 => 81,  366 => 130,  356 => 124,  332 => 116,  306 => 114,  301 => 173,  295 => 87,  287 => 107,  284 => 80,  279 => 170,  245 => 68,  225 => 66,  213 => 60,  204 => 58,  200 => 54,  173 => 101,  168 => 99,  156 => 35,  129 => 75,  87 => 72,  113 => 25,  363 => 96,  360 => 126,  355 => 101,  351 => 120,  346 => 117,  343 => 97,  333 => 94,  330 => 93,  323 => 227,  316 => 217,  313 => 81,  305 => 78,  299 => 112,  290 => 176,  286 => 166,  283 => 172,  280 => 78,  274 => 76,  268 => 74,  263 => 71,  252 => 67,  244 => 139,  226 => 155,  219 => 64,  188 => 110,  183 => 100,  177 => 60,  140 => 60,  12 => 34,  163 => 66,  155 => 64,  153 => 45,  127 => 23,  116 => 70,  107 => 74,  132 => 24,  130 => 54,  121 => 28,  100 => 39,  79 => 13,  73 => 29,  68 => 5,  56 => 23,  80 => 52,  37 => 4,  26 => 18,  103 => 40,  84 => 71,  61 => 19,  23 => 11,  493 => 171,  487 => 291,  482 => 167,  474 => 125,  470 => 162,  466 => 143,  457 => 158,  453 => 157,  450 => 156,  448 => 265,  443 => 153,  440 => 104,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 57,  411 => 138,  406 => 94,  400 => 235,  397 => 51,  394 => 112,  392 => 128,  387 => 225,  381 => 45,  378 => 120,  375 => 119,  373 => 80,  368 => 39,  354 => 34,  350 => 197,  335 => 88,  327 => 108,  325 => 107,  322 => 90,  318 => 90,  311 => 100,  307 => 174,  298 => 181,  296 => 180,  291 => 85,  281 => 79,  277 => 77,  271 => 73,  265 => 63,  260 => 149,  254 => 86,  248 => 69,  242 => 160,  237 => 80,  221 => 128,  195 => 23,  191 => 54,  180 => 65,  172 => 58,  143 => 28,  135 => 57,  131 => 79,  110 => 75,  64 => 18,  41 => 32,  276 => 96,  272 => 75,  257 => 68,  246 => 65,  243 => 86,  241 => 64,  238 => 83,  233 => 79,  230 => 60,  227 => 78,  224 => 77,  222 => 65,  220 => 153,  211 => 57,  207 => 59,  182 => 69,  162 => 48,  146 => 29,  138 => 53,  122 => 32,  105 => 41,  74 => 29,  70 => 25,  66 => 22,  62 => 23,  97 => 38,  92 => 42,  88 => 30,  78 => 69,  71 => 49,  59 => 40,  90 => 59,  24 => 11,  29 => 20,  96 => 40,  91 => 33,  81 => 36,  49 => 19,  30 => 16,  47 => 19,  34 => 22,  31 => 13,  199 => 118,  186 => 82,  174 => 61,  169 => 57,  166 => 60,  161 => 96,  159 => 65,  154 => 91,  145 => 59,  141 => 83,  139 => 40,  124 => 29,  120 => 47,  108 => 26,  94 => 60,  65 => 24,  52 => 106,  27 => 3,  28 => 12,  22 => 11,  82 => 31,  75 => 192,  72 => 191,  50 => 75,  43 => 19,  40 => 18,  25 => 11,  249 => 54,  160 => 41,  148 => 56,  142 => 31,  134 => 80,  126 => 50,  123 => 74,  118 => 27,  114 => 45,  111 => 68,  104 => 37,  101 => 36,  99 => 62,  86 => 15,  77 => 34,  69 => 23,  58 => 22,  55 => 20,  53 => 22,  46 => 33,  44 => 18,  38 => 22,  35 => 16,  32 => 21,  212 => 24,  206 => 56,  202 => 152,  196 => 51,  192 => 148,  190 => 49,  185 => 135,  179 => 45,  176 => 70,  171 => 51,  167 => 67,  165 => 49,  157 => 58,  152 => 36,  150 => 44,  147 => 62,  144 => 61,  136 => 51,  133 => 41,  128 => 44,  125 => 43,  119 => 49,  115 => 26,  112 => 44,  109 => 36,  106 => 66,  102 => 30,  98 => 20,  95 => 19,  89 => 33,  85 => 10,  83 => 29,  76 => 51,  67 => 64,  63 => 23,  60 => 27,  57 => 14,  54 => 38,  51 => 20,  48 => 19,  45 => 18,  42 => 12,  39 => 17,  36 => 16,  33 => 11,);
    }
}
