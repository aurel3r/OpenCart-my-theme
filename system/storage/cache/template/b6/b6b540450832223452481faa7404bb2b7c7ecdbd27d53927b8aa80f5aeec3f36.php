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

/* multishop/template/common/footer.twig */
class __TwigTemplate_7a213e988c4dc409d44ba635bfbc817eee6385747be6f6536758ff95c595bb3d extends \Twig\Template
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
        echo "<!-- Footer Start -->
<div class=\"container-fluid bg-dark text-secondary mt-5 pt-5\">
    <div class=\"row px-xl-5 pt-5\">
        <div class=\"col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5\">
            <h5 class=\"text-secondary text-uppercase mb-4\">Get In Touch</h5>
            <p class=\"mb-4\">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum tempor no vero est magna amet no</p>
            <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt text-primary mr-3\"></i>123 Street, New York, USA</p>
            <p class=\"mb-2\"><i class=\"fa fa-envelope text-primary mr-3\"></i>info@example.com</p>
            <p class=\"mb-0\"><i class=\"fa fa-phone-alt text-primary mr-3\"></i>+012 345 67890</p>
        </div>
        <div class=\"col-lg-8 col-md-12\">
            <div class=\"row\">
                <div class=\"col-md-4 mb-5\">
                    <h5 class=\"text-secondary text-uppercase mb-4\">Quick Shop</h5>
                    <div class=\"d-flex flex-column justify-content-start\">
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Home</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Our Shop</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Shop Detail</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Shopping Cart</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Checkout</a>
                        <a class=\"text-secondary\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Contact Us</a>
                    </div>
                </div>
                <div class=\"col-md-4 mb-5\">
                    <h5 class=\"text-secondary text-uppercase mb-4\">My Account</h5>
                    <div class=\"d-flex flex-column justify-content-start\">
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Home</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Our Shop</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Shop Detail</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Shopping Cart</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Checkout</a>
                        <a class=\"text-secondary\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Contact Us</a>
                    </div>
                </div>
                <div class=\"col-md-4 mb-5\">
                    <h5 class=\"text-secondary text-uppercase mb-4\">Newsletter</h5>
                    <p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
                    <form action=\"\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Your Email Address\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary\">Sign Up</button>
                            </div>
                        </div>
                    </form>
                    <h6 class=\"text-secondary text-uppercase mt-4 mb-3\">Follow Us</h6>
                    <div class=\"d-flex\">
                        <a class=\"btn btn-primary btn-square mr-2\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-primary btn-square mr-2\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-primary btn-square mr-2\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        <a class=\"btn btn-primary btn-square\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row border-top mx-xl-5 py-4\" style=\"border-color: rgba(256, 256, 256, .1) !important;\">
        <div class=\"col-md-6 px-xl-0\">
            <p class=\"mb-md-0 text-center text-md-left text-secondary\">
                &copy; <a class=\"text-primary\" href=\"#\">Domain</a>. All Rights Reserved. Designed
                by
                <a class=\"text-primary\" href=\"https://htmlcodex.com\">HTML Codex</a>
            </p>
        </div>
        <div class=\"col-md-6 px-xl-0 text-center text-md-right\">
            <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/payments.png\" alt=\"\">
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-primary back-to-top\"><i class=\"fa fa-angle-double-up\"></i></a>


<!-- JavaScript Libraries -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\"></script>
<script src=\"catalog/view/theme/multishop/assets/lib/easing/easing.min.js\"></script>
<script src=\"catalog/view/theme/multishop/assets/lib/owlcarousel/owl.carousel.min.js\"></script>

<!-- Contact Javascript File -->
<script src=\"catalog/view/theme/multishop/assets/mail/jqBootstrapValidation.min.js\"></script>
<script src=\"catalog/view/theme/multishop/assets/mail/contact.js\"></script>

";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 88
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 88);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 88);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 88);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 91
            echo "    <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "
<!-- Template Javascript -->
<script src=\"catalog/view/theme/multishop/assets/js/main.js\"></script>
<script src=\"catalog/view/theme/multishop/assets/js/common.js\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "multishop/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 93,  146 => 91,  142 => 90,  129 => 88,  125 => 87,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer Start -->
<div class=\"container-fluid bg-dark text-secondary mt-5 pt-5\">
    <div class=\"row px-xl-5 pt-5\">
        <div class=\"col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5\">
            <h5 class=\"text-secondary text-uppercase mb-4\">Get In Touch</h5>
            <p class=\"mb-4\">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum tempor no vero est magna amet no</p>
            <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt text-primary mr-3\"></i>123 Street, New York, USA</p>
            <p class=\"mb-2\"><i class=\"fa fa-envelope text-primary mr-3\"></i>info@example.com</p>
            <p class=\"mb-0\"><i class=\"fa fa-phone-alt text-primary mr-3\"></i>+012 345 67890</p>
        </div>
        <div class=\"col-lg-8 col-md-12\">
            <div class=\"row\">
                <div class=\"col-md-4 mb-5\">
                    <h5 class=\"text-secondary text-uppercase mb-4\">Quick Shop</h5>
                    <div class=\"d-flex flex-column justify-content-start\">
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Home</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Our Shop</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Shop Detail</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Shopping Cart</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Checkout</a>
                        <a class=\"text-secondary\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Contact Us</a>
                    </div>
                </div>
                <div class=\"col-md-4 mb-5\">
                    <h5 class=\"text-secondary text-uppercase mb-4\">My Account</h5>
                    <div class=\"d-flex flex-column justify-content-start\">
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Home</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Our Shop</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Shop Detail</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Shopping Cart</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Checkout</a>
                        <a class=\"text-secondary\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Contact Us</a>
                    </div>
                </div>
                <div class=\"col-md-4 mb-5\">
                    <h5 class=\"text-secondary text-uppercase mb-4\">Newsletter</h5>
                    <p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
                    <form action=\"\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Your Email Address\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary\">Sign Up</button>
                            </div>
                        </div>
                    </form>
                    <h6 class=\"text-secondary text-uppercase mt-4 mb-3\">Follow Us</h6>
                    <div class=\"d-flex\">
                        <a class=\"btn btn-primary btn-square mr-2\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-primary btn-square mr-2\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-primary btn-square mr-2\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        <a class=\"btn btn-primary btn-square\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row border-top mx-xl-5 py-4\" style=\"border-color: rgba(256, 256, 256, .1) !important;\">
        <div class=\"col-md-6 px-xl-0\">
            <p class=\"mb-md-0 text-center text-md-left text-secondary\">
                &copy; <a class=\"text-primary\" href=\"#\">Domain</a>. All Rights Reserved. Designed
                by
                <a class=\"text-primary\" href=\"https://htmlcodex.com\">HTML Codex</a>
            </p>
        </div>
        <div class=\"col-md-6 px-xl-0 text-center text-md-right\">
            <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/payments.png\" alt=\"\">
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-primary back-to-top\"><i class=\"fa fa-angle-double-up\"></i></a>


<!-- JavaScript Libraries -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\"></script>
<script src=\"catalog/view/theme/multishop/assets/lib/easing/easing.min.js\"></script>
<script src=\"catalog/view/theme/multishop/assets/lib/owlcarousel/owl.carousel.min.js\"></script>

<!-- Contact Javascript File -->
<script src=\"catalog/view/theme/multishop/assets/mail/jqBootstrapValidation.min.js\"></script>
<script src=\"catalog/view/theme/multishop/assets/mail/contact.js\"></script>

{% for style in styles %}
    <link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\" />
{% endfor %}
{% for script in scripts %}
    <script src=\"{{ script }}\" type=\"text/javascript\"></script>
{% endfor %}

<!-- Template Javascript -->
<script src=\"catalog/view/theme/multishop/assets/js/main.js\"></script>
<script src=\"catalog/view/theme/multishop/assets/js/common.js\"></script>

</body>

</html>", "multishop/template/common/footer.twig", "");
    }
}
