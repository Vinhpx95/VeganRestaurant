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

/* C:\Users\Administrator\Documents\Git\ComChayHoTay/themes/comchayhotay/partials/site/footer.htm */
class __TwigTemplate_2b0844f98d88d669bea5da9daac422383181a4664bcdbbe4309e33ca591691f7 extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <!-- about-us -->
        <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
            <div class=\"footer-widget\">
                <div class=\"ft-logo\"><img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/lotus.png");
        echo "\" alt=\"\"></div>
                <div class=\"restaurant-name\">cơm chay hồ tây</div>
            </div>
        </div>
        <!-- /.about us -->
        <!-- footer-hosting-services-links -->
        <div class=\" col-lg-2 col-md-2 col-sm-6 col-xs-12\">
            <div class=\"footer-widget\">
                <h3 class=\"footer-title\">Quick Links</h3>
                <ul>
                    <li><a href=\"#\">Home </a></li>
                    <li><a href=\"#\">About</a></li>
                    <li><a href=\"#\">Menu</a></li>
                    <li><a href=\"#\">Services</a></li>
                    <li><a href=\"#\">Blog</a></li>
                    <li><a href=\"#\">Contact</a></li>
                </ul>
            </div>
        </div>
        <!-- /.footer-hosting-services-links -->
        <!-- footer-useful links -->
        <div class=\" col-lg-2 col-md-2 col-sm-6 col-xs-12\">
            <div class=\"footer-widget\">
                <h3 class=\"footer-title\">Menu</h3>
                <ul>
                    <li><a href=\"#\">breakfast</a></li>
                    <li><a href=\"#\">Lunch</a></li>
                    <li><a href=\"#\">Dinner</a></li>
                    <li><a href=\"#\">Other</a></li>
                </ul>
            </div>
        </div>
        <!-- /.footer-useful links -->
        <!-- footer-useful links -->
        <div class=\" col-lg-4 col-md-4 col-sm-6 col-xs-12\">
            <div class=\"footer-widget\">
                <h3 class=\"footer-title\">Contact Info </h3>
                <div class=\"contact-info\">
                    <span class=\"contact-icon\"><i class=\"icon-placeholder\"></i></span>
                    <span class=\"contact-text\">167 Science Center Drive, USA</span>
                </div>
                <div class=\"contact-info\">
                    <span class=\"contact-icon\"><i class=\"icon-telephone\"></i></span>
                    <span class=\"contact-text\">+180-123-4567</span>
                </div>
                <div class=\"contact-info\">
                    <span class=\"contact-icon\"><i class=\"icon-letter\"></i></span>
                    <span class=\"contact-text\">info@vegan.com</span>
                </div>
                <div class=\"ft-social\">
                    <span><a href=\"#\" class=\"btn-social btn-facebook\" ><i class=\"fa fa-facebook\"></i></a></span>
                    <span><a href=\"#\" class=\"btn-social btn-twitter\"><i class=\"fa fa-twitter\"></i></a></span>
                    <span><a href=\"#\" class=\"btn-social btn-googleplus\"><i class=\"fa fa-google-plus\"></i></a></span>
                    <span><a href=\"#\" class=\" btn-social btn-linkedin\"><i class=\"fa fa-linkedin\"></i></a></span>
                    <span><a href=\"#\" class=\" btn-social btn-pinterest\"><i class=\"fa fa-pinterest-p\"></i></a></span>
                    <span><a href=\"#\" class=\" btn-social btn-instagram\"><i class=\"fa fa-instagram\"></i></a></span>
                    
                </div>
            </div>
        </div>
        <!-- /.footer-useful links -->
    </div>
</div>
<!-- tiny-footer -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"tiny-footer\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <p>Copyright © All Rights Reserved 2020 Template Design by
                    <a href=\"https://easetemplate.com/\" target=\"_blank\" class=\"copyrightlink\">EaseTemplate</a></p>
            </div>
        </div>
    </div>
    <!-- /. tiny-footer -->
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Administrator\\Documents\\Git\\ComChayHoTay/themes/comchayhotay/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <!-- about-us -->
        <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
            <div class=\"footer-widget\">
                <div class=\"ft-logo\"><img src=\"{{ 'assets/images/lotus.png'|theme }}\" alt=\"\"></div>
                <div class=\"restaurant-name\">cơm chay hồ tây</div>
            </div>
        </div>
        <!-- /.about us -->
        <!-- footer-hosting-services-links -->
        <div class=\" col-lg-2 col-md-2 col-sm-6 col-xs-12\">
            <div class=\"footer-widget\">
                <h3 class=\"footer-title\">Quick Links</h3>
                <ul>
                    <li><a href=\"#\">Home </a></li>
                    <li><a href=\"#\">About</a></li>
                    <li><a href=\"#\">Menu</a></li>
                    <li><a href=\"#\">Services</a></li>
                    <li><a href=\"#\">Blog</a></li>
                    <li><a href=\"#\">Contact</a></li>
                </ul>
            </div>
        </div>
        <!-- /.footer-hosting-services-links -->
        <!-- footer-useful links -->
        <div class=\" col-lg-2 col-md-2 col-sm-6 col-xs-12\">
            <div class=\"footer-widget\">
                <h3 class=\"footer-title\">Menu</h3>
                <ul>
                    <li><a href=\"#\">breakfast</a></li>
                    <li><a href=\"#\">Lunch</a></li>
                    <li><a href=\"#\">Dinner</a></li>
                    <li><a href=\"#\">Other</a></li>
                </ul>
            </div>
        </div>
        <!-- /.footer-useful links -->
        <!-- footer-useful links -->
        <div class=\" col-lg-4 col-md-4 col-sm-6 col-xs-12\">
            <div class=\"footer-widget\">
                <h3 class=\"footer-title\">Contact Info </h3>
                <div class=\"contact-info\">
                    <span class=\"contact-icon\"><i class=\"icon-placeholder\"></i></span>
                    <span class=\"contact-text\">167 Science Center Drive, USA</span>
                </div>
                <div class=\"contact-info\">
                    <span class=\"contact-icon\"><i class=\"icon-telephone\"></i></span>
                    <span class=\"contact-text\">+180-123-4567</span>
                </div>
                <div class=\"contact-info\">
                    <span class=\"contact-icon\"><i class=\"icon-letter\"></i></span>
                    <span class=\"contact-text\">info@vegan.com</span>
                </div>
                <div class=\"ft-social\">
                    <span><a href=\"#\" class=\"btn-social btn-facebook\" ><i class=\"fa fa-facebook\"></i></a></span>
                    <span><a href=\"#\" class=\"btn-social btn-twitter\"><i class=\"fa fa-twitter\"></i></a></span>
                    <span><a href=\"#\" class=\"btn-social btn-googleplus\"><i class=\"fa fa-google-plus\"></i></a></span>
                    <span><a href=\"#\" class=\" btn-social btn-linkedin\"><i class=\"fa fa-linkedin\"></i></a></span>
                    <span><a href=\"#\" class=\" btn-social btn-pinterest\"><i class=\"fa fa-pinterest-p\"></i></a></span>
                    <span><a href=\"#\" class=\" btn-social btn-instagram\"><i class=\"fa fa-instagram\"></i></a></span>
                    
                </div>
            </div>
        </div>
        <!-- /.footer-useful links -->
    </div>
</div>
<!-- tiny-footer -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"tiny-footer\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <p>Copyright © All Rights Reserved 2020 Template Design by
                    <a href=\"https://easetemplate.com/\" target=\"_blank\" class=\"copyrightlink\">EaseTemplate</a></p>
            </div>
        </div>
    </div>
    <!-- /. tiny-footer -->
</div>", "C:\\Users\\Administrator\\Documents\\Git\\ComChayHoTay/themes/comchayhotay/partials/site/footer.htm", "");
    }
}
