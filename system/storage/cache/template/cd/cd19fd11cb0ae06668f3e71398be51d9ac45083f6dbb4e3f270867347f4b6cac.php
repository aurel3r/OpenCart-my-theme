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

/* multishop/template/common/home.twig */
class __TwigTemplate_a24a5d7053d146b68359219e9acff1e1f5f9919b9b3e58ec463d4503f3d951ef extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">

<head>
  <meta charset=\"utf-8\">
  <title>";
        // line 6
        echo ($context["title"] ?? null);
        echo "</title>
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <base href=\"";
        // line 8
        echo ($context["base"] ?? null);
        echo "\" />

  ";
        // line 10
        if (($context["description"] ?? null)) {
            // line 11
            echo "    <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
  ";
        }
        // line 13
        echo "  ";
        if (($context["keywords"] ?? null)) {
            // line 14
            echo "    <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
  ";
        }
        // line 16
        echo "
  <!-- Google Web Fonts -->
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap\" rel=\"stylesheet\">

  <!-- Font Awesome -->
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">

  <!-- Libraries Stylesheet -->
  <link href=\"catalog/view/theme/multishop/assets/lib/animate/animate.min.css\" rel=\"stylesheet\">
  <link href=\"catalog/view/theme/multishop/assets/lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">

  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 29
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 29);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 29);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 29);
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 32
            echo "    <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
  <!-- Customized Bootstrap Stylesheet -->
  <link href=\"catalog/view/theme/multishop/assets/css/style.css\" rel=\"stylesheet\">

  ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 39
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 39);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 39);
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 42
            echo "    ";
            echo $context["analytic"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "</head>

<body>
<!-- Topbar Start -->
<div class=\"container-fluid\">
  <div class=\"row bg-secondary py-1 px-xl-5\">
    <div class=\"col-lg-6 d-none d-lg-block\">
      <div class=\"d-inline-flex align-items-center h-100\">
        <a class=\"text-body mr-3\" href=\"\">About</a>
        <a class=\"text-body mr-3\" href=\"\">Contact</a>
        <a class=\"text-body mr-3\" href=\"\">Help</a>
        <a class=\"text-body mr-3\" href=\"\">FAQs</a>
      </div>
    </div>
    <div class=\"col-lg-6 text-center text-lg-right\">
      <div class=\"d-inline-flex align-items-center\">
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-sm btn-light dropdown-toggle\" data-toggle=\"dropdown\">My Account</button>
          <div class=\"dropdown-menu dropdown-menu-right\">
            <button class=\"dropdown-item\" type=\"button\">Sign in</button>
            <button class=\"dropdown-item\" type=\"button\">Sign up</button>
          </div>
        </div>
        <div class=\"btn-group mx-2\">
          <button type=\"button\" class=\"btn btn-sm btn-light dropdown-toggle\" data-toggle=\"dropdown\">USD</button>
          <div class=\"dropdown-menu dropdown-menu-right\">
            <button class=\"dropdown-item\" type=\"button\">EUR</button>
            <button class=\"dropdown-item\" type=\"button\">GBP</button>
            <button class=\"dropdown-item\" type=\"button\">CAD</button>
          </div>
        </div>
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-sm btn-light dropdown-toggle\" data-toggle=\"dropdown\">EN</button>
          <div class=\"dropdown-menu dropdown-menu-right\">
            <button class=\"dropdown-item\" type=\"button\">FR</button>
            <button class=\"dropdown-item\" type=\"button\">AR</button>
            <button class=\"dropdown-item\" type=\"button\">RU</button>
          </div>
        </div>
      </div>
      <div class=\"d-inline-flex align-items-center d-block d-lg-none\">
        <a href=\"\" class=\"btn px-0 ml-2\">
          <i class=\"fas fa-heart text-dark\"></i>
          <span class=\"badge text-dark border border-dark rounded-circle\" style=\"padding-bottom: 2px;\">0</span>
        </a>
        <a href=\"\" class=\"btn px-0 ml-2\">
          <i class=\"fas fa-shopping-cart text-dark\"></i>
          <span class=\"badge text-dark border border-dark rounded-circle\" style=\"padding-bottom: 2px;\">0</span>
        </a>
      </div>
    </div>
  </div>
  <div class=\"row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex\">
    <div class=\"col-lg-4\">
      <a href=\"\" class=\"text-decoration-none\">
        <span class=\"h1 text-uppercase text-primary bg-dark px-2\">Multi</span>
        <span class=\"h1 text-uppercase text-dark bg-primary px-2 ml-n1\">Shop</span>
      </a>
    </div>
    <div class=\"col-lg-4 col-6 text-left\">
      <form action=\"\">
        <div class=\"input-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Search for products\">
          <div class=\"input-group-append\">
                            <span class=\"input-group-text bg-transparent text-primary\">
                                <i class=\"fa fa-search\"></i>
                            </span>
          </div>
        </div>
      </form>
    </div>
    <div class=\"col-lg-4 col-6 text-right\">
      <p class=\"m-0\">Customer Service</p>
      <h5 class=\"m-0\">+012 345 6789</h5>
    </div>
  </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class=\"container-fluid bg-dark mb-30\">
  <div class=\"row px-xl-5\">
    <div class=\"col-lg-3 d-none d-lg-block\">
      <a class=\"btn d-flex align-items-center justify-content-between bg-primary w-100\" data-toggle=\"collapse\" href=\"#navbar-vertical\" style=\"height: 65px; padding: 0 30px;\">
        <h6 class=\"text-dark m-0\"><i class=\"fa fa-bars mr-2\"></i>Categories</h6>
        <i class=\"fa fa-angle-down text-dark\"></i>
      </a>
      <nav class=\"collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light\" id=\"navbar-vertical\" style=\"width: calc(100% - 30px); z-index: 999;\">
        <div class=\"navbar-nav w-100\">
          <div class=\"nav-item dropdown dropright\">
            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Dresses <i class=\"fa fa-angle-right float-right mt-1\"></i></a>
            <div class=\"dropdown-menu position-absolute rounded-0 border-0 m-0\">
              <a href=\"\" class=\"dropdown-item\">Men's Dresses</a>
              <a href=\"\" class=\"dropdown-item\">Women's Dresses</a>
              <a href=\"\" class=\"dropdown-item\">Baby's Dresses</a>
            </div>
          </div>
          <a href=\"\" class=\"nav-item nav-link\">Shirts</a>
          <a href=\"\" class=\"nav-item nav-link\">Jeans</a>
          <a href=\"\" class=\"nav-item nav-link\">Swimwear</a>
          <a href=\"\" class=\"nav-item nav-link\">Sleepwear</a>
          <a href=\"\" class=\"nav-item nav-link\">Sportswear</a>
          <a href=\"\" class=\"nav-item nav-link\">Jumpsuits</a>
          <a href=\"\" class=\"nav-item nav-link\">Blazers</a>
          <a href=\"\" class=\"nav-item nav-link\">Jackets</a>
          <a href=\"\" class=\"nav-item nav-link\">Shoes</a>
        </div>
      </nav>
    </div>
    <div class=\"col-lg-9\">
      <nav class=\"navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0\">
        <a href=\"\" class=\"text-decoration-none d-block d-lg-none\">
          <span class=\"h1 text-uppercase text-dark bg-light px-2\">Multi</span>
          <span class=\"h1 text-uppercase text-light bg-primary px-2 ml-n1\">Shop</span>
        </a>
        <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarCollapse\">
          <div class=\"navbar-nav mr-auto py-0\">
            <a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>
            <a href=\"shop.html\" class=\"nav-item nav-link\">Shop</a>
            <a href=\"detail.html\" class=\"nav-item nav-link\">Shop Detail</a>
            <div class=\"nav-item dropdown\">
              <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Pages <i class=\"fa fa-angle-down mt-1\"></i></a>
              <div class=\"dropdown-menu bg-primary rounded-0 border-0 m-0\">
                <a href=\"cart.html\" class=\"dropdown-item\">Shopping Cart</a>
                <a href=\"checkout.html\" class=\"dropdown-item\">Checkout</a>
              </div>
            </div>
            <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
          </div>
          <div class=\"navbar-nav ml-auto py-0 d-none d-lg-block\">
            <a href=\"\" class=\"btn px-0\">
              <i class=\"fas fa-heart text-primary\"></i>
              <span class=\"badge text-secondary border border-secondary rounded-circle\" style=\"padding-bottom: 2px;\">0</span>
            </a>
            <a href=\"\" class=\"btn px-0 ml-3\">
              <i class=\"fas fa-shopping-cart text-primary\"></i>
              <span class=\"badge text-secondary border border-secondary rounded-circle\" style=\"padding-bottom: 2px;\">0</span>
            </a>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
<!-- Navbar End -->


<!-- Carousel Start -->
<div class=\"container-fluid mb-3\">
  <div class=\"row px-xl-5\">
    <div class=\"col-lg-8\">
      <div id=\"header-carousel\" class=\"carousel slide carousel-fade mb-30 mb-lg-0\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-target=\"#header-carousel\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#header-carousel\" data-slide-to=\"1\"></li>
          <li data-target=\"#header-carousel\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
          <div class=\"carousel-item position-relative active\" style=\"height: 430px;\">
            <img class=\"position-absolute w-100 h-100\" src=\"catalog/view/theme/multishop/assets/img/carousel-1.jpg\" style=\"object-fit: cover;\">
            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
              <div class=\"p-3\" style=\"max-width: 700px;\">
                <h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">Men Fashion</h1>
                <p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                <a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"#\">Shop Now</a>
              </div>
            </div>
          </div>
          <div class=\"carousel-item position-relative\" style=\"height: 430px;\">
            <img class=\"position-absolute w-100 h-100\" src=\"catalog/view/theme/multishop/assets/img/carousel-2.jpg\" style=\"object-fit: cover;\">
            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
              <div class=\"p-3\" style=\"max-width: 700px;\">
                <h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">Women Fashion</h1>
                <p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                <a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"#\">Shop Now</a>
              </div>
            </div>
          </div>
          <div class=\"carousel-item position-relative\" style=\"height: 430px;\">
            <img class=\"position-absolute w-100 h-100\" src=\"catalog/view/theme/multishop/assets/img/carousel-3.jpg\" style=\"object-fit: cover;\">
            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
              <div class=\"p-3\" style=\"max-width: 700px;\">
                <h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">Kids Fashion</h1>
                <p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                <a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"#\">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-lg-4\">
      <div class=\"product-offer mb-30\" style=\"height: 200px;\">
        <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/offer-1.jpg\" alt=\"\">
        <div class=\"offer-text\">
          <h6 class=\"text-white text-uppercase\">Save 20%</h6>
          <h3 class=\"text-white mb-3\">Special Offer</h3>
          <a href=\"\" class=\"btn btn-primary\">Shop Now</a>
        </div>
      </div>
      <div class=\"product-offer mb-30\" style=\"height: 200px;\">
        <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/offer-2.jpg\" alt=\"\">
        <div class=\"offer-text\">
          <h6 class=\"text-white text-uppercase\">Save 20%</h6>
          <h3 class=\"text-white mb-3\">Special Offer</h3>
          <a href=\"\" class=\"btn btn-primary\">Shop Now</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Carousel End -->


<!-- Featured Start -->
<div class=\"container-fluid pt-5\">
  <div class=\"row px-xl-5 pb-3\">
    <div class=\"col-lg-3 col-md-6 col-sm-12 pb-1\">
      <div class=\"d-flex align-items-center bg-light mb-4\" style=\"padding: 30px;\">
        <h1 class=\"fa fa-check text-primary m-0 mr-3\"></h1>
        <h5 class=\"font-weight-semi-bold m-0\">Quality Product</h5>
      </div>
    </div>
    <div class=\"col-lg-3 col-md-6 col-sm-12 pb-1\">
      <div class=\"d-flex align-items-center bg-light mb-4\" style=\"padding: 30px;\">
        <h1 class=\"fa fa-shipping-fast text-primary m-0 mr-2\"></h1>
        <h5 class=\"font-weight-semi-bold m-0\">Free Shipping</h5>
      </div>
    </div>
    <div class=\"col-lg-3 col-md-6 col-sm-12 pb-1\">
      <div class=\"d-flex align-items-center bg-light mb-4\" style=\"padding: 30px;\">
        <h1 class=\"fas fa-exchange-alt text-primary m-0 mr-3\"></h1>
        <h5 class=\"font-weight-semi-bold m-0\">14-Day Return</h5>
      </div>
    </div>
    <div class=\"col-lg-3 col-md-6 col-sm-12 pb-1\">
      <div class=\"d-flex align-items-center bg-light mb-4\" style=\"padding: 30px;\">
        <h1 class=\"fa fa-phone-volume text-primary m-0 mr-3\"></h1>
        <h5 class=\"font-weight-semi-bold m-0\">24/7 Support</h5>
      </div>
    </div>
  </div>
</div>
<!-- Featured End -->


<!-- Categories Start -->
<div class=\"container-fluid pt-5\">
  <h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\"><span class=\"bg-secondary pr-3\">Categories</span></h2>
  <div class=\"row px-xl-5 pb-3\">
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <a class=\"text-decoration-none\" href=\"\">
        <div class=\"cat-item d-flex align-items-center mb-4\">
          <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
            <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-1.jpg\" alt=\"\">
          </div>
          <div class=\"flex-fill pl-3\">
            <h6>Category Name</h6>
            <small class=\"text-body\">100 Products</small>
          </div>
        </div>
      </a>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <a class=\"text-decoration-none\" href=\"\">
        <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
          <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
            <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-2.jpg\" alt=\"\">
          </div>
          <div class=\"flex-fill pl-3\">
            <h6>Category Name</h6>
            <small class=\"text-body\">100 Products</small>
          </div>
        </div>
      </a>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <a class=\"text-decoration-none\" href=\"\">
        <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
          <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
            <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-3.jpg\" alt=\"\">
          </div>
          <div class=\"flex-fill pl-3\">
            <h6>Category Name</h6>
            <small class=\"text-body\">100 Products</small>
          </div>
        </div>
      </a>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <a class=\"text-decoration-none\" href=\"\">
        <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
          <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
            <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-4.jpg\" alt=\"\">
          </div>
          <div class=\"flex-fill pl-3\">
            <h6>Category Name</h6>
            <small class=\"text-body\">100 Products</small>
          </div>
        </div>
      </a>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <a class=\"text-decoration-none\" href=\"\">
        <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
          <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
            <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-4.jpg\" alt=\"\">
          </div>
          <div class=\"flex-fill pl-3\">
            <h6>Category Name</h6>
            <small class=\"text-body\">100 Products</small>
          </div>
        </div>
      </a>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <a class=\"text-decoration-none\" href=\"\">
        <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
          <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
            <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-3.jpg\" alt=\"\">
          </div>
          <div class=\"flex-fill pl-3\">
            <h6>Category Name</h6>
            <small class=\"text-body\">100 Products</small>
          </div>
        </div>
      </a>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <a class=\"text-decoration-none\" href=\"\">
        <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
          <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
            <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-2.jpg\" alt=\"\">
          </div>
          <div class=\"flex-fill pl-3\">
            <h6>Category Name</h6>
            <small class=\"text-body\">100 Products</small>
          </div>
        </div>
      </a>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <a class=\"text-decoration-none\" href=\"\">
        <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
          <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
            <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-1.jpg\" alt=\"\">
          </div>
          <div class=\"flex-fill pl-3\">
            <h6>Category Name</h6>
            <small class=\"text-body\">100 Products</small>
          </div>
        </div>
      </a>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <a class=\"text-decoration-none\" href=\"\">
        <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
          <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
            <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-2.jpg\" alt=\"\">
          </div>
          <div class=\"flex-fill pl-3\">
            <h6>Category Name</h6>
            <small class=\"text-body\">100 Products</small>
          </div>
        </div>
      </a>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <a class=\"text-decoration-none\" href=\"\">
        <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
          <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
            <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-1.jpg\" alt=\"\">
          </div>
          <div class=\"flex-fill pl-3\">
            <h6>Category Name</h6>
            <small class=\"text-body\">100 Products</small>
          </div>
        </div>
      </a>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <a class=\"text-decoration-none\" href=\"\">
        <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
          <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
            <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-4.jpg\" alt=\"\">
          </div>
          <div class=\"flex-fill pl-3\">
            <h6>Category Name</h6>
            <small class=\"text-body\">100 Products</small>
          </div>
        </div>
      </a>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <a class=\"text-decoration-none\" href=\"\">
        <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
          <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
            <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-3.jpg\" alt=\"\">
          </div>
          <div class=\"flex-fill pl-3\">
            <h6>Category Name</h6>
            <small class=\"text-body\">100 Products</small>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
<!-- Categories End -->


<!-- Products Start -->
<div class=\"container-fluid pt-5 pb-3\">
  <h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\"><span class=\"bg-secondary pr-3\">Featured Products</span></h2>
  <div class=\"row px-xl-5\">
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <div class=\"product-item bg-light mb-4\">
        <div class=\"product-img position-relative overflow-hidden\">
          <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-1.jpg\" alt=\"\">
          <div class=\"product-action\">
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
          </div>
        </div>
        <div class=\"text-center py-4\">
          <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
          <div class=\"d-flex align-items-center justify-content-center mt-2\">
            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
          </div>
          <div class=\"d-flex align-items-center justify-content-center mb-1\">
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small>(99)</small>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <div class=\"product-item bg-light mb-4\">
        <div class=\"product-img position-relative overflow-hidden\">
          <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-2.jpg\" alt=\"\">
          <div class=\"product-action\">
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
          </div>
        </div>
        <div class=\"text-center py-4\">
          <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
          <div class=\"d-flex align-items-center justify-content-center mt-2\">
            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
          </div>
          <div class=\"d-flex align-items-center justify-content-center mb-1\">
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
            <small>(99)</small>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <div class=\"product-item bg-light mb-4\">
        <div class=\"product-img position-relative overflow-hidden\">
          <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-3.jpg\" alt=\"\">
          <div class=\"product-action\">
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
          </div>
        </div>
        <div class=\"text-center py-4\">
          <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
          <div class=\"d-flex align-items-center justify-content-center mt-2\">
            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
          </div>
          <div class=\"d-flex align-items-center justify-content-center mb-1\">
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
            <small class=\"far fa-star text-primary mr-1\"></small>
            <small>(99)</small>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <div class=\"product-item bg-light mb-4\">
        <div class=\"product-img position-relative overflow-hidden\">
          <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-4.jpg\" alt=\"\">
          <div class=\"product-action\">
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
          </div>
        </div>
        <div class=\"text-center py-4\">
          <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
          <div class=\"d-flex align-items-center justify-content-center mt-2\">
            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
          </div>
          <div class=\"d-flex align-items-center justify-content-center mb-1\">
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"far fa-star text-primary mr-1\"></small>
            <small class=\"far fa-star text-primary mr-1\"></small>
            <small>(99)</small>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <div class=\"product-item bg-light mb-4\">
        <div class=\"product-img position-relative overflow-hidden\">
          <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-5.jpg\" alt=\"\">
          <div class=\"product-action\">
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
          </div>
        </div>
        <div class=\"text-center py-4\">
          <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
          <div class=\"d-flex align-items-center justify-content-center mt-2\">
            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
          </div>
          <div class=\"d-flex align-items-center justify-content-center mb-1\">
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small>(99)</small>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <div class=\"product-item bg-light mb-4\">
        <div class=\"product-img position-relative overflow-hidden\">
          <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-6.jpg\" alt=\"\">
          <div class=\"product-action\">
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
          </div>
        </div>
        <div class=\"text-center py-4\">
          <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
          <div class=\"d-flex align-items-center justify-content-center mt-2\">
            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
          </div>
          <div class=\"d-flex align-items-center justify-content-center mb-1\">
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
            <small>(99)</small>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <div class=\"product-item bg-light mb-4\">
        <div class=\"product-img position-relative overflow-hidden\">
          <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-7.jpg\" alt=\"\">
          <div class=\"product-action\">
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
          </div>
        </div>
        <div class=\"text-center py-4\">
          <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
          <div class=\"d-flex align-items-center justify-content-center mt-2\">
            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
          </div>
          <div class=\"d-flex align-items-center justify-content-center mb-1\">
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
            <small class=\"far fa-star text-primary mr-1\"></small>
            <small>(99)</small>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <div class=\"product-item bg-light mb-4\">
        <div class=\"product-img position-relative overflow-hidden\">
          <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-8.jpg\" alt=\"\">
          <div class=\"product-action\">
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
          </div>
        </div>
        <div class=\"text-center py-4\">
          <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
          <div class=\"d-flex align-items-center justify-content-center mt-2\">
            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
          </div>
          <div class=\"d-flex align-items-center justify-content-center mb-1\">
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"far fa-star text-primary mr-1\"></small>
            <small class=\"far fa-star text-primary mr-1\"></small>
            <small>(99)</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Products End -->


<!-- Offer Start -->
<div class=\"container-fluid pt-5 pb-3\">
  <div class=\"row px-xl-5\">
    <div class=\"col-md-6\">
      <div class=\"product-offer mb-30\" style=\"height: 300px;\">
        <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/offer-1.jpg\" alt=\"\">
        <div class=\"offer-text\">
          <h6 class=\"text-white text-uppercase\">Save 20%</h6>
          <h3 class=\"text-white mb-3\">Special Offer</h3>
          <a href=\"\" class=\"btn btn-primary\">Shop Now</a>
        </div>
      </div>
    </div>
    <div class=\"col-md-6\">
      <div class=\"product-offer mb-30\" style=\"height: 300px;\">
        <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/offer-2.jpg\" alt=\"\">
        <div class=\"offer-text\">
          <h6 class=\"text-white text-uppercase\">Save 20%</h6>
          <h3 class=\"text-white mb-3\">Special Offer</h3>
          <a href=\"\" class=\"btn btn-primary\">Shop Now</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Offer End -->


<!-- Products Start -->
<div class=\"container-fluid pt-5 pb-3\">
  <h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\"><span class=\"bg-secondary pr-3\">Recent Products</span></h2>
  <div class=\"row px-xl-5\">
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <div class=\"product-item bg-light mb-4\">
        <div class=\"product-img position-relative overflow-hidden\">
          <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-1.jpg\" alt=\"\">
          <div class=\"product-action\">
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
          </div>
        </div>
        <div class=\"text-center py-4\">
          <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
          <div class=\"d-flex align-items-center justify-content-center mt-2\">
            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
          </div>
          <div class=\"d-flex align-items-center justify-content-center mb-1\">
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small>(99)</small>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <div class=\"product-item bg-light mb-4\">
        <div class=\"product-img position-relative overflow-hidden\">
          <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-2.jpg\" alt=\"\">
          <div class=\"product-action\">
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
          </div>
        </div>
        <div class=\"text-center py-4\">
          <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
          <div class=\"d-flex align-items-center justify-content-center mt-2\">
            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
          </div>
          <div class=\"d-flex align-items-center justify-content-center mb-1\">
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
            <small>(99)</small>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <div class=\"product-item bg-light mb-4\">
        <div class=\"product-img position-relative overflow-hidden\">
          <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-3.jpg\" alt=\"\">
          <div class=\"product-action\">
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
          </div>
        </div>
        <div class=\"text-center py-4\">
          <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
          <div class=\"d-flex align-items-center justify-content-center mt-2\">
            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
          </div>
          <div class=\"d-flex align-items-center justify-content-center mb-1\">
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
            <small class=\"far fa-star text-primary mr-1\"></small>
            <small>(99)</small>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <div class=\"product-item bg-light mb-4\">
        <div class=\"product-img position-relative overflow-hidden\">
          <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-4.jpg\" alt=\"\">
          <div class=\"product-action\">
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
          </div>
        </div>
        <div class=\"text-center py-4\">
          <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
          <div class=\"d-flex align-items-center justify-content-center mt-2\">
            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
          </div>
          <div class=\"d-flex align-items-center justify-content-center mb-1\">
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"far fa-star text-primary mr-1\"></small>
            <small class=\"far fa-star text-primary mr-1\"></small>
            <small>(99)</small>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <div class=\"product-item bg-light mb-4\">
        <div class=\"product-img position-relative overflow-hidden\">
          <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-5.jpg\" alt=\"\">
          <div class=\"product-action\">
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
          </div>
        </div>
        <div class=\"text-center py-4\">
          <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
          <div class=\"d-flex align-items-center justify-content-center mt-2\">
            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
          </div>
          <div class=\"d-flex align-items-center justify-content-center mb-1\">
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small>(99)</small>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <div class=\"product-item bg-light mb-4\">
        <div class=\"product-img position-relative overflow-hidden\">
          <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-6.jpg\" alt=\"\">
          <div class=\"product-action\">
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
          </div>
        </div>
        <div class=\"text-center py-4\">
          <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
          <div class=\"d-flex align-items-center justify-content-center mt-2\">
            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
          </div>
          <div class=\"d-flex align-items-center justify-content-center mb-1\">
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
            <small>(99)</small>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <div class=\"product-item bg-light mb-4\">
        <div class=\"product-img position-relative overflow-hidden\">
          <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-7.jpg\" alt=\"\">
          <div class=\"product-action\">
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
          </div>
        </div>
        <div class=\"text-center py-4\">
          <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
          <div class=\"d-flex align-items-center justify-content-center mt-2\">
            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
          </div>
          <div class=\"d-flex align-items-center justify-content-center mb-1\">
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
            <small class=\"far fa-star text-primary mr-1\"></small>
            <small>(99)</small>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
      <div class=\"product-item bg-light mb-4\">
        <div class=\"product-img position-relative overflow-hidden\">
          <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-8.jpg\" alt=\"\">
          <div class=\"product-action\">
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
            <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
          </div>
        </div>
        <div class=\"text-center py-4\">
          <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
          <div class=\"d-flex align-items-center justify-content-center mt-2\">
            <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
          </div>
          <div class=\"d-flex align-items-center justify-content-center mb-1\">
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"fa fa-star text-primary mr-1\"></small>
            <small class=\"far fa-star text-primary mr-1\"></small>
            <small class=\"far fa-star text-primary mr-1\"></small>
            <small>(99)</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Products End -->


<!-- Vendor Start -->
<div class=\"container-fluid py-5\">
  <div class=\"row px-xl-5\">
    <div class=\"col\">
      <div class=\"owl-carousel vendor-carousel\">
        <div class=\"bg-light p-4\">
          <img src=\"catalog/view/theme/multishop/assets/img/vendor-1.jpg\" alt=\"\">
        </div>
        <div class=\"bg-light p-4\">
          <img src=\"catalog/view/theme/multishop/assets/img/vendor-2.jpg\" alt=\"\">
        </div>
        <div class=\"bg-light p-4\">
          <img src=\"catalog/view/theme/multishop/assets/img/vendor-3.jpg\" alt=\"\">
        </div>
        <div class=\"bg-light p-4\">
          <img src=\"catalog/view/theme/multishop/assets/img/vendor-4.jpg\" alt=\"\">
        </div>
        <div class=\"bg-light p-4\">
          <img src=\"catalog/view/theme/multishop/assets/img/vendor-5.jpg\" alt=\"\">
        </div>
        <div class=\"bg-light p-4\">
          <img src=\"catalog/view/theme/multishop/assets/img/vendor-6.jpg\" alt=\"\">
        </div>
        <div class=\"bg-light p-4\">
          <img src=\"catalog/view/theme/multishop/assets/img/vendor-7.jpg\" alt=\"\">
        </div>
        <div class=\"bg-light p-4\">
          <img src=\"catalog/view/theme/multishop/assets/img/vendor-8.jpg\" alt=\"\">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Vendor End -->


<!-- Footer Start -->
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
        // line 1059
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 1060
            echo "  <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 1060);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 1060);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 1060);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1062
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 1063
            echo "  <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1065
        echo "
<!-- Template Javascript -->
<script src=\"catalog/view/theme/multishop/assets/js/main.js\"></script>
<script src=\"catalog/view/theme/multishop/assets/js/common.js\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "multishop/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1203 => 1065,  1194 => 1063,  1190 => 1062,  1177 => 1060,  1173 => 1059,  156 => 44,  147 => 42,  142 => 41,  131 => 39,  127 => 38,  121 => 34,  112 => 32,  107 => 31,  94 => 29,  90 => 28,  76 => 16,  70 => 14,  67 => 13,  61 => 11,  59 => 10,  54 => 8,  49 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "multishop/template/common/home.twig", "");
    }
}
