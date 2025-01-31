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

/* C:\Users\Administrator\Documents\Git\ComChayHoTay/themes/comchayhotay/pages/home.htm */
class __TwigTemplate_38b593c31a3a62d6a58274e12bef5e5f65cbde1c5db7453cc71548db06406dc9 extends \Twig\Template
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
        // line 1
        echo "<!-- slider -->
<div class=\"slider\">
    <div class=\"owl-carousel owl-one owl-theme\">
        <div class=\"item\">
            <div class=\"slider-img\"> <img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider_1.jpg");
        echo "\" alt=\"\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-7 col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"slider-captions\">
                            <h1 class=\"slider-title\">Restaurant Responsive Free Template</h1>
                            <p class=\"slider-text hidden-sm hidden-xs\">Morbi rutrum neque diamr turpis lorem ipsum
                                dauisque.
                            </p>
                            <a href=\"#\" class=\"btn btn-default btn-lg hidden-sm hidden-xs\">Reserve Your Table</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"slider-img\"><img src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider_2.jpg");
        echo "\" alt=\"\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-7 col-md-12 col-sm-12  col-xs-12\">
                        <div class=\"slider-captions\">
                            <h1 class=\"slider-title\">Vegan Restaurant Bootstrap Website Template</h1>
                            <p class=\"slider-text hidden-sm hidden-xs\">Integer ac pharetra arcu, nec porttitor uis idleo
                                sagittis cursus. </p>
                            <a href=\"#\" class=\"btn btn-default btn-lg hidden-sm hidden-xs\">Get Free Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"slider-img\"><img src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider_3.jpg");
        echo "\" alt=\"\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-7 col-md-12 col-sm-12  col-xs-12\">
                        <div class=\"slider-captions\">
                            <h1 class=\"slider-title\">Vegiterian Restaurant Free Website
                            </h1>
                            <p class=\"slider-text hidden-sm hidden-xs\">Duisac semper lacus,at fringilla arcuuspendisse
                                arcu ipsum. </p>
                            <a href=\"#\" class=\"btn btn-default btn-lg hidden-sm hidden-xs\">Download Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.slider -->
<!-- menu -->
<div class=\"space-medium\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"section-title\">
                    <h2>Vegan Menu</h2>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <!-- starter -->
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                <div class=\"menu-block\">
                    <h3 class=\"menu-title\">Starter</h3>
                    <div class=\"menu-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"dish-img\"><a href=\"#\"><img src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/menu_dish_1.jpg");
        echo "\"
                                            alt=\"\" class=\"img-circle\"></a></div>
                            </div>
                            <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                                <div class=\"dish-content\">
                                    <h5 class=\"dish-title\"><a href=\"#\">Aloo and Dal ki Tikki</a></h5>
                                    <span class=\"dish-meta\">Onion / Tomato</span>
                                    <div class=\"dish-price\">
                                        <p>\$10</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"menu-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"dish-img\"><a href=\"#\"><img src=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/menu_dish_2.jpg");
        echo "\"
                                            alt=\"\" class=\"img-circle\"></a></div>
                            </div>
                            <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                                <div class=\"dish-content\">
                                    <h5 class=\"dish-title\"><a href=\"#\">Cheese Balls</a></h5>
                                    <span class=\"dish-meta\">puffed corn / cheese-flavored
                                        <div class=\"dish-price\">
                                            <p>\$8</p>
                                        </div>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"menu-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"dish-img\"><a href=\"#\"><img src=\"";
        // line 109
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/menu_dish_3.jpg");
        echo "\"
                                            alt=\"\" class=\"img-circle\"></a></div>
                            </div>
                            <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                                <div class=\"dish-content\">
                                    <h5 class=\"dish-title\"><a href=\"#\">Veg Crispy</a> </h5>
                                    <span class=\"dish-meta\">Ginger garlic / Black pepper</span>
                                    <div class=\"dish-price\">
                                        <p>\$12</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.starter -->
            <!-- Soup -->
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                <div class=\"menu-block\">
                    <h3 class=\"menu-title\">Soup</h3>
                    <div class=\"menu-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"dish-img\"><a href=\"#\"><img src=\"";
        // line 134
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/menu_dish_4.jpg");
        echo "\"
                                            alt=\"\" class=\"img-circle\"></a></div>
                            </div>
                            <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                                <div class=\"dish-content\">
                                    <h5 class=\"dish-title\"><a href=\"#\">Minestrone</a></h5>
                                    <span class=\"dish-meta\"> beans / onions celery / carrots</span>
                                    <div class=\"dish-price\">
                                        <p>\$15</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"menu-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"dish-img\"><a href=\"#\"><img src=\"";
        // line 152
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/menu_dish_5.jpg");
        echo "\"
                                            alt=\"\" class=\"img-circle\"></a></div>
                            </div>
                            <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                                <div class=\"dish-content\">
                                    <h5 class=\"dish-title\"><a href=\"#\">Tomato soup</a></h5>
                                    <span class=\"dish-meta\">Cheesiy / Creamy / Sweet</span>
                                    <div class=\"dish-price\">
                                        <p>\$14</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"menu-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"dish-img\"><a href=\"#\"><img src=\"";
        // line 170
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/menu_dish_6.jpg");
        echo "\"
                                            alt=\"\" class=\"img-circle\"></a></div>
                            </div>
                            <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                                <div class=\"dish-content\">
                                    <h5 class=\"dish-title\"><a href=\"#\">Cream of broccoli</a> </h5>
                                    <span class=\"dish-meta\"> broccoli / milk / cream </span>
                                    <div class=\"dish-price\">
                                        <p>\$9</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.soup -->
            <!-- main course -->
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                <div class=\"menu-block\">
                    <h3 class=\"menu-title\">Main Course</h3>
                    <div class=\"menu-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"dish-img\"><a href=\"#\"><img src=\"";
        // line 195
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/menu_dish_7.jpg");
        echo "\"
                                            alt=\"\" class=\"img-circle\"></a></div>
                            </div>
                            <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                                <div class=\"dish-content\">
                                    <h5 class=\"dish-title\"><a href=\"#\">Biryani</a></h5>
                                    <span class=\"dish-meta\"> Onion / Tomato</span>
                                    <div class=\"dish-price\">
                                        <p>\$14</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"menu-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"dish-img\"><a href=\"#\"><img src=\"";
        // line 213
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/menu_dish_8.jpg");
        echo "\"
                                            alt=\"\" class=\"img-circle\"></a></div>
                            </div>
                            <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                                <div class=\"dish-content\">
                                    <h5 class=\"dish-title\"><a href=\"#\">Paneer Butter Masala</a></h5>
                                    <span class=\"dish-meta\">Aloo Masala / Aloo Palak
                                    </span>
                                    <div class=\"dish-price\">
                                        <p>\$11</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"menu-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"dish-img\"><a href=\"#\"><img src=\"";
        // line 232
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/menu_dish_9.jpg");
        echo "\"
                                            alt=\"\" class=\"img-circle\"></a></div>
                            </div>
                            <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                                <div class=\"dish-content\">
                                    <h5 class=\"dish-title\"><a href=\"#\">Chole Bhature</a> </h5>
                                    <span class=\"dish-meta\"> Rice Soft Idli / Ragi idli / Oats Idli </span>
                                    <div class=\"dish-price\">
                                        <p>\$8</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.main Course -->
        </div>
    </div>
</div>
<!-- /.menu -->
<!-- menu-thumb -->
<div class=\"thumb-section\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"section-title\">
                    <h2>Vegan Menu</h2>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 nopr nopl\">
                <div class=\"thumb-block\">
                    <div class=\"thumb-img\">
                        <img src=\"";
        // line 268
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dish_thumb_1.jpg");
        echo "\" alt=\"\" class=\"img-responsive \">
                    </div>
                    <div class=\"thumb-content\">
                        <h3 class=\"thumb-title\">Dosa</h3>
                        <p class=\"thumb-text\">Vivamus venenatis l elit imperdies eneande.</p>
                        <p class=\"thumb-price\">\$12</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 nopr nopl\">
                <div class=\"thumb-block\">
                    <div class=\"thumb-img\">
                        <img src=\"";
        // line 280
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dish_thumb_2.jpg");
        echo "\" alt=\"\" class=\"img-responsive \">
                    </div>
                    <div class=\"thumb-content\">
                        <h3 class=\"thumb-title\">Chaat</h3>
                        <p class=\"thumb-text\">Morbi rutrum neque diamr turpis dauisque.</p>
                        <p class=\"thumb-price\">\$10</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 nopr nopl\">
                <div class=\"thumb-block\">
                    <div class=\"thumb-img\">
                        <img src=\"";
        // line 292
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dish_thumb_3.jpg");
        echo "\" alt=\"\" class=\"img-responsive \">
                    </div>
                    <div class=\"thumb-content\">
                        <h3 class=\"thumb-title\">Chahou Kheer</h3>
                        <p class=\"thumb-text\">Donec ornare feliel n condintum clentesque.</p>
                        <p class=\"thumb-price\">\$14</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 nopr nopl\">
                <div class=\"thumb-block\">
                    <div class=\"thumb-img\">
                        <img src=\"";
        // line 304
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dish_thumb_4.jpg");
        echo "\" alt=\"\" class=\"img-responsive \">
                    </div>
                    <div class=\"thumb-content\">
                        <h3 class=\"thumb-title\">Aloo Baingan Masala</h3>
                        <p class=\"thumb-text\">Nulla dictum dio sed lectus tincidunt sollies.</p>
                        <p class=\"thumb-price\">\$15</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.menu-thumb -->

<div class=\"space-medium\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-lg-4 col-sm-5 col-xs-12\">
                <div class=\"widget-schedule\">
                    <div class=\"schedule-content\">
                        <h3 class=\"schedule-title\">Vegan Opening Hours</h3>
                        <div class=\"schedule-icon\">
                            <i class=\"icon-cutlery-set-of-three-pieces\"></i>
                        </div>
                        <div class=\"schedule-time\">
                            <h5 class=\"time-title\">Monday - Friday</h5>
                            <p>11:00 AM to 3:00 PM
                                <br>7:00 PM to 10:00 PM</p>
                        </div>
                        <div class=\"schedule-time\">
                            <h5 class=\"time-title\">Saturday - Sunday</h5>
                            <p>11:00 AM to 3:00 PM
                                <br>7:00 PM to 11:00 PM</p>
                        </div>
                        <div class=\"schedule-line\"></div>
                        <div class=\"schedule-call\">+180-123-4567</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-8 col-lg-8 col-sm-7 col-xs-12\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-12\">
                        <div class=\"contact-block\">
                            <div class=\"contact-info-icon\">
                                <i class=\"icon-placeholder\"></i>
                            </div>
                            <div class=\"contact-info-text\">
                                <h5>Address</h5>
                                <p>167 Science Center Drive, USA</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-12\">
                        <div class=\"contact-block\">
                            <div class=\"contact-info-icon\">
                                <i class=\"icon-telephone\"></i>
                            </div>
                            <div class=\"contact-info-text\">
                                <h5>Phone</h5>
                                <p>+180-123-4567 / 20
                                    <br> +180-123-4567 / 20</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-12\">
                        <div class=\"contact-block\">
                            <div class=\"contact-info-icon\">
                                <i class=\"icon-facebook\"></i>
                            </div>
                            <div class=\"contact-info-text\">
                                <h5>Email</h5>
                                <p>info@vegan.com
                                    <br>info@vegan.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Administrator\\Documents\\Git\\ComChayHoTay/themes/comchayhotay/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 304,  372 => 292,  357 => 280,  342 => 268,  303 => 232,  281 => 213,  260 => 195,  232 => 170,  211 => 152,  190 => 134,  162 => 109,  140 => 90,  119 => 72,  80 => 36,  62 => 21,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- slider -->
<div class=\"slider\">
    <div class=\"owl-carousel owl-one owl-theme\">
        <div class=\"item\">
            <div class=\"slider-img\"> <img src=\"{{ 'assets/images/slider_1.jpg'|theme }}\" alt=\"\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-7 col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"slider-captions\">
                            <h1 class=\"slider-title\">Restaurant Responsive Free Template</h1>
                            <p class=\"slider-text hidden-sm hidden-xs\">Morbi rutrum neque diamr turpis lorem ipsum
                                dauisque.
                            </p>
                            <a href=\"#\" class=\"btn btn-default btn-lg hidden-sm hidden-xs\">Reserve Your Table</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"slider-img\"><img src=\"{{ 'assets/images/slider_2.jpg'|theme }}\" alt=\"\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-7 col-md-12 col-sm-12  col-xs-12\">
                        <div class=\"slider-captions\">
                            <h1 class=\"slider-title\">Vegan Restaurant Bootstrap Website Template</h1>
                            <p class=\"slider-text hidden-sm hidden-xs\">Integer ac pharetra arcu, nec porttitor uis idleo
                                sagittis cursus. </p>
                            <a href=\"#\" class=\"btn btn-default btn-lg hidden-sm hidden-xs\">Get Free Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"item\">
            <div class=\"slider-img\"><img src=\"{{ 'assets/images/slider_3.jpg'|theme }}\" alt=\"\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-7 col-md-12 col-sm-12  col-xs-12\">
                        <div class=\"slider-captions\">
                            <h1 class=\"slider-title\">Vegiterian Restaurant Free Website
                            </h1>
                            <p class=\"slider-text hidden-sm hidden-xs\">Duisac semper lacus,at fringilla arcuuspendisse
                                arcu ipsum. </p>
                            <a href=\"#\" class=\"btn btn-default btn-lg hidden-sm hidden-xs\">Download Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.slider -->
<!-- menu -->
<div class=\"space-medium\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"section-title\">
                    <h2>Vegan Menu</h2>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <!-- starter -->
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                <div class=\"menu-block\">
                    <h3 class=\"menu-title\">Starter</h3>
                    <div class=\"menu-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"dish-img\"><a href=\"#\"><img src=\"{{ 'assets/images/menu_dish_1.jpg'|theme }}\"
                                            alt=\"\" class=\"img-circle\"></a></div>
                            </div>
                            <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                                <div class=\"dish-content\">
                                    <h5 class=\"dish-title\"><a href=\"#\">Aloo and Dal ki Tikki</a></h5>
                                    <span class=\"dish-meta\">Onion / Tomato</span>
                                    <div class=\"dish-price\">
                                        <p>\$10</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"menu-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"dish-img\"><a href=\"#\"><img src=\"{{ 'assets/images/menu_dish_2.jpg'|theme }}\"
                                            alt=\"\" class=\"img-circle\"></a></div>
                            </div>
                            <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                                <div class=\"dish-content\">
                                    <h5 class=\"dish-title\"><a href=\"#\">Cheese Balls</a></h5>
                                    <span class=\"dish-meta\">puffed corn / cheese-flavored
                                        <div class=\"dish-price\">
                                            <p>\$8</p>
                                        </div>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"menu-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"dish-img\"><a href=\"#\"><img src=\"{{ 'assets/images/menu_dish_3.jpg'|theme }}\"
                                            alt=\"\" class=\"img-circle\"></a></div>
                            </div>
                            <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                                <div class=\"dish-content\">
                                    <h5 class=\"dish-title\"><a href=\"#\">Veg Crispy</a> </h5>
                                    <span class=\"dish-meta\">Ginger garlic / Black pepper</span>
                                    <div class=\"dish-price\">
                                        <p>\$12</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.starter -->
            <!-- Soup -->
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                <div class=\"menu-block\">
                    <h3 class=\"menu-title\">Soup</h3>
                    <div class=\"menu-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"dish-img\"><a href=\"#\"><img src=\"{{ 'assets/images/menu_dish_4.jpg'|theme }}\"
                                            alt=\"\" class=\"img-circle\"></a></div>
                            </div>
                            <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                                <div class=\"dish-content\">
                                    <h5 class=\"dish-title\"><a href=\"#\">Minestrone</a></h5>
                                    <span class=\"dish-meta\"> beans / onions celery / carrots</span>
                                    <div class=\"dish-price\">
                                        <p>\$15</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"menu-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"dish-img\"><a href=\"#\"><img src=\"{{ 'assets/images/menu_dish_5.jpg'|theme }}\"
                                            alt=\"\" class=\"img-circle\"></a></div>
                            </div>
                            <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                                <div class=\"dish-content\">
                                    <h5 class=\"dish-title\"><a href=\"#\">Tomato soup</a></h5>
                                    <span class=\"dish-meta\">Cheesiy / Creamy / Sweet</span>
                                    <div class=\"dish-price\">
                                        <p>\$14</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"menu-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"dish-img\"><a href=\"#\"><img src=\"{{ 'assets/images/menu_dish_6.jpg'|theme }}\"
                                            alt=\"\" class=\"img-circle\"></a></div>
                            </div>
                            <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                                <div class=\"dish-content\">
                                    <h5 class=\"dish-title\"><a href=\"#\">Cream of broccoli</a> </h5>
                                    <span class=\"dish-meta\"> broccoli / milk / cream </span>
                                    <div class=\"dish-price\">
                                        <p>\$9</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.soup -->
            <!-- main course -->
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                <div class=\"menu-block\">
                    <h3 class=\"menu-title\">Main Course</h3>
                    <div class=\"menu-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"dish-img\"><a href=\"#\"><img src=\"{{ 'assets/images/menu_dish_7.jpg'|theme }}\"
                                            alt=\"\" class=\"img-circle\"></a></div>
                            </div>
                            <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                                <div class=\"dish-content\">
                                    <h5 class=\"dish-title\"><a href=\"#\">Biryani</a></h5>
                                    <span class=\"dish-meta\"> Onion / Tomato</span>
                                    <div class=\"dish-price\">
                                        <p>\$14</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"menu-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"dish-img\"><a href=\"#\"><img src=\"{{ 'assets/images/menu_dish_8.jpg'|theme }}\"
                                            alt=\"\" class=\"img-circle\"></a></div>
                            </div>
                            <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                                <div class=\"dish-content\">
                                    <h5 class=\"dish-title\"><a href=\"#\">Paneer Butter Masala</a></h5>
                                    <span class=\"dish-meta\">Aloo Masala / Aloo Palak
                                    </span>
                                    <div class=\"dish-price\">
                                        <p>\$11</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"menu-content\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"dish-img\"><a href=\"#\"><img src=\"{{ 'assets/images/menu_dish_9.jpg'|theme }}\"
                                            alt=\"\" class=\"img-circle\"></a></div>
                            </div>
                            <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                                <div class=\"dish-content\">
                                    <h5 class=\"dish-title\"><a href=\"#\">Chole Bhature</a> </h5>
                                    <span class=\"dish-meta\"> Rice Soft Idli / Ragi idli / Oats Idli </span>
                                    <div class=\"dish-price\">
                                        <p>\$8</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.main Course -->
        </div>
    </div>
</div>
<!-- /.menu -->
<!-- menu-thumb -->
<div class=\"thumb-section\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"section-title\">
                    <h2>Vegan Menu</h2>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 nopr nopl\">
                <div class=\"thumb-block\">
                    <div class=\"thumb-img\">
                        <img src=\"{{ 'assets/images/dish_thumb_1.jpg'|theme }}\" alt=\"\" class=\"img-responsive \">
                    </div>
                    <div class=\"thumb-content\">
                        <h3 class=\"thumb-title\">Dosa</h3>
                        <p class=\"thumb-text\">Vivamus venenatis l elit imperdies eneande.</p>
                        <p class=\"thumb-price\">\$12</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 nopr nopl\">
                <div class=\"thumb-block\">
                    <div class=\"thumb-img\">
                        <img src=\"{{ 'assets/images/dish_thumb_2.jpg'|theme }}\" alt=\"\" class=\"img-responsive \">
                    </div>
                    <div class=\"thumb-content\">
                        <h3 class=\"thumb-title\">Chaat</h3>
                        <p class=\"thumb-text\">Morbi rutrum neque diamr turpis dauisque.</p>
                        <p class=\"thumb-price\">\$10</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 nopr nopl\">
                <div class=\"thumb-block\">
                    <div class=\"thumb-img\">
                        <img src=\"{{ 'assets/images/dish_thumb_3.jpg'|theme }}\" alt=\"\" class=\"img-responsive \">
                    </div>
                    <div class=\"thumb-content\">
                        <h3 class=\"thumb-title\">Chahou Kheer</h3>
                        <p class=\"thumb-text\">Donec ornare feliel n condintum clentesque.</p>
                        <p class=\"thumb-price\">\$14</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 nopr nopl\">
                <div class=\"thumb-block\">
                    <div class=\"thumb-img\">
                        <img src=\"{{ 'assets/images/dish_thumb_4.jpg'|theme }}\" alt=\"\" class=\"img-responsive \">
                    </div>
                    <div class=\"thumb-content\">
                        <h3 class=\"thumb-title\">Aloo Baingan Masala</h3>
                        <p class=\"thumb-text\">Nulla dictum dio sed lectus tincidunt sollies.</p>
                        <p class=\"thumb-price\">\$15</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.menu-thumb -->

<div class=\"space-medium\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-lg-4 col-sm-5 col-xs-12\">
                <div class=\"widget-schedule\">
                    <div class=\"schedule-content\">
                        <h3 class=\"schedule-title\">Vegan Opening Hours</h3>
                        <div class=\"schedule-icon\">
                            <i class=\"icon-cutlery-set-of-three-pieces\"></i>
                        </div>
                        <div class=\"schedule-time\">
                            <h5 class=\"time-title\">Monday - Friday</h5>
                            <p>11:00 AM to 3:00 PM
                                <br>7:00 PM to 10:00 PM</p>
                        </div>
                        <div class=\"schedule-time\">
                            <h5 class=\"time-title\">Saturday - Sunday</h5>
                            <p>11:00 AM to 3:00 PM
                                <br>7:00 PM to 11:00 PM</p>
                        </div>
                        <div class=\"schedule-line\"></div>
                        <div class=\"schedule-call\">+180-123-4567</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-8 col-lg-8 col-sm-7 col-xs-12\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-12\">
                        <div class=\"contact-block\">
                            <div class=\"contact-info-icon\">
                                <i class=\"icon-placeholder\"></i>
                            </div>
                            <div class=\"contact-info-text\">
                                <h5>Address</h5>
                                <p>167 Science Center Drive, USA</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-12\">
                        <div class=\"contact-block\">
                            <div class=\"contact-info-icon\">
                                <i class=\"icon-telephone\"></i>
                            </div>
                            <div class=\"contact-info-text\">
                                <h5>Phone</h5>
                                <p>+180-123-4567 / 20
                                    <br> +180-123-4567 / 20</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-12\">
                        <div class=\"contact-block\">
                            <div class=\"contact-info-icon\">
                                <i class=\"icon-facebook\"></i>
                            </div>
                            <div class=\"contact-info-text\">
                                <h5>Email</h5>
                                <p>info@vegan.com
                                    <br>info@vegan.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>", "C:\\Users\\Administrator\\Documents\\Git\\ComChayHoTay/themes/comchayhotay/pages/home.htm", "");
    }
}
