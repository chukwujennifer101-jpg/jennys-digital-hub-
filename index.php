<?php
$products = [
    [
        "name" => "Premium Business Laptop",
        "price" => 450000,
        "category" => "Laptops",
        "description" => "Reliable performance for work, study and everyday tasks."
    ],
    [
        "name" => "Laptop SSD 256GB",
        "price" => 25000,
        "category" => "Storage",
        "description" => "Fast storage to improve your laptop's performance."
    ],
    [
        "name" => "Wireless Mouse",
        "price" => 8500,
        "category" => "Accessories",
        "description" => "A comfortable mouse for everyday computer use."
    ],
    [
        "name" => "Laptop Charger",
        "price" => 12000,
        "category" => "Accessories",
        "description" => "A replacement charger for compatible laptops."
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenny's Digital Hub | Tech Marketplace</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #080d18;
            color: #f5f7fb;
            line-height: 1.6;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            padding: 22px 7%;
            border-bottom: 1px solid #202a3d;
            background: #0c1322;
        }

        .logo {
            font-size: 21px;
            font-weight: bold;
        }

        .logo span {
            color: #4c91ff;
        }

        nav a {
            color: #dce5f5;
            text-decoration: none;
            margin-left: 22px;
            font-size: 14px;
        }

        .hero {
            padding: 90px 7% 75px;
            background: radial-gradient(ellipse at top right, #16376b, #080d18 65%);
        }

        .label {
            color: #80b4ff;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        h1 {
            max-width: 720px;
            margin: 20px 0;
            font-size: clamp(38px, 6vw, 66px);
            line-height: 1.1;
        }

        h1 span {
            color: #65a3ff;
        }

        .hero p {
            max-width: 560px;
            color: #aebbd0;
            margin-bottom: 30px;
        }

        .button {
            display: inline-block;
            background: #327df4;
            color: white;
            text-decoration: none;
            padding: 13px 22px;
            border-radius: 5px;
            font-weight: bold;
        }

        .section {
            padding: 55px 7%;
        }

        .section-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 28px;
        }

        .section-heading h2 {
            font-size: 28px;
        }

        .section-heading p {
            color: #9aa9c0;
            font-size: 14px;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .product {
            padding: 24px;
            border: 1px solid #25324a;
            border-radius: 9px;
            background: #101929;
            transition: transform 0.2s, border-color 0.2s;
        }

        .product:hover {
            transform: translateY(-4px);
            border-color: #438cff;
        }

        .product-category {
            color: #7eb0ff;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .product h3 {
            margin: 12px 0;
            font-size: 19px;
        }

        .product p {
            color: #aebbd0;
            font-size: 14px;
            min-height: 65px;
        }

        .price {
            margin: 20px 0;
            font-size: 21px;
            font-weight: bold;
        }

        .product a {
            display: block;
            text-align: center;
            padding: 11px;
            color: white;
            background: #1c3152;
            border: 1px solid #385b8c;
            border-radius: 5px;
            text-decoration: none;
        }

        .contact {
            margin: 0 7% 55px;
            padding: 35px;
            border: 1px solid #253d60;
            border-radius: 9px;
            background: #101c30;
        }

        .contact h2 {
            margin-bottom: 10px;
        }

        .contact p {
            color: #aebbd0;
            margin-bottom: 20px;
        }

        footer {
            padding: 25px 7%;
            border-top: 1px solid #202a3d;
            color: #91a0b7;
            text-align: center;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }

            nav a {
                margin-left: 0;
                margin-right: 15px;
            }

            .hero {
                padding-top: 65px;
            }

            .section-heading {
                align-items: flex-start;
                flex-direction: column;
            }

            .contact {
                padding: 25px;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="logo">Jenny's <span>Digital Hub</span></div>
    <nav>
        <a href="#home">Home</a>
        <a href="#products">Products</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<section class="hero" id="home">
    <div class="label">Technology, made accessible</div>
    <h1>Find the right tech for <span>your world.</span></h1>
    <p>
        Explore laptops and computer accessories selected to support
        your studies, work, business and everyday needs.
    </p>
    <a class="button" href="#products">Explore Products</a>
</section>

<section class="section" id="products">
    <div class="section-heading">
        <div>
            <h2>Featured Products</h2>
            <p>Find technology that fits your needs and budget.</p>
        </div>
    </div>

    <div class="products">
        <?php foreach ($products as $product): ?>
            <article class="product">
                <div class="product-category">
                    <?= htmlspecialchars($product["category"]) ?>
                </div>

                <h3>
                    <?= htmlspecialchars($product["name"]) ?>
                </h3>

                <p>
                    <?= htmlspecialchars($product["description"]) ?>
                </p>

                <div class="price">
                    ₦<?= number_format($product["price"]) ?>
                </div>

                <a
                    href="https://wa.me/2349017402219?text=<?= rawurlencode('Hello Jenny, I am interested in ' . $product['name']) ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Enquire on WhatsApp
                </a>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="contact" id="contact">
    <h2>Need help choosing a laptop?</h2>
    <p>
        Tell us your budget and what you need the system for.
        We will help you explore suitable options.
    </p>
    <a
        class="button"
        href="https://wa.me/2349017402219"
        target="_blank"
        rel="noopener noreferrer"
    >
        Contact Jenny
    </a>
</section>

<footer>
    &copy; <?= date("Y") ?> Jenny's Digital Hub. All rights reserved.
</footer>

</body>
</html>
