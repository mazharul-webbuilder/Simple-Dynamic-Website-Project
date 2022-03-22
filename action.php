<?php
    require_once "vendor/autoload.php";
    use App\classes\Calculator;
    use App\classes\Series;
    use App\classes\Product;
    use App\classes\Blog;

    if (isset($_GET['page']))
    {
        if ($_GET['page'] == 'home')
        {
            $title      = 'Home';
            $customCss  = 'home.css';
            include        "pages/home.php";
        }
        elseif ($_GET['page'] == 'calculator')
        {
            $title     = 'Calculator';
            $customCss = 'calculator.css';
            $result    = '';
            include     "pages/calculator.php";
        }
        elseif ($_GET['page'] == 'series')
        {
            $title     = "Series";
            $customCss = 'series.css';
            $mySeries  = [];
            include     "pages/series.php";
        }
        elseif ($_GET['page'] == 'product')
        {
            $title       = 'Product';
            $customCss   = 'product.css';
            $product     = new Product();
            $allProducts = $product->getAllProduct();
            include "pages/product.php";
        }
        elseif ($_GET['page'] == 'detail')
        {
            $title         = 'Detail';
            $customCss     = 'detail.css';
            $id            = $_GET['id'];
            $product       = new Product();
            $singleProduct = $product->getSingleProduct($id);
            include "pages/detail.php";
        }
        elseif ($_GET['page'] == 'blog')
        {
            $title = 'Blog';
            $customCss = 'blog.css';
            $blog = new Blog();
            $blogs = $blog->getAllBlogs();
            include "pages/blog.php";
        }
        elseif ($_GET['page'] == 'blogDetail')
        {
            $title = 'Full Blog';
            $customCss = 'fullBlog.css';
            $id = $_GET['id'];
            $blog = new Blog();
            $singleBlogs = $blog->getSingleBlogs($id);
            include "pages/fullBlog.php";
        }
    }
    elseif (isset($_POST['calBtn']))
    {
        $calculator     =  new Calculator($_POST);
        $firstNumber    =  $calculator->firstNumber;
        $lastNumber     =  $calculator->lastNumber;
        $action         =  $calculator->action;
        $result         = $calculator->myCalculator();
        $title          = 'Calculator';
        $customCss      = 'calculator.css';
        include           "pages/calculator.php";
    }

    elseif (isset($_POST['seriesBtn']))
    {
        $title          = 'Series';
        $customCss      = 'series.css';
        $series         = new Series($_POST);
        $startingNumber = $series->startingNumber;
        $endingNumber   = $series->endingNumber;
        $mySeries       =  $series->mySeries();
        include            "pages/series.php";
    }
?>