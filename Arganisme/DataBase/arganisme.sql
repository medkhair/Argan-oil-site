-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 20 sep. 2024 à 23:55
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `arganisme`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Cream'),
(2, 'Milk'),
(3, 'Ghassoul'),
(4, 'Shampoo'),
(5, 'Soap'),
(6, 'Oil');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `firstname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`firstname`, `name`, `email`, `phone`, `subject`, `message`) VALUES
('fggh', 'Mohammed-khair Souiba', 'pmedkhair@gmail.com', '0603002539', 'ffffffffff', 'zeafdsfsf'),
('', '', '', '', '', ''),
('fggh', 'Gottfried Wilhelm Leibniz', 'test@beispiel.de', '030303986300', 'ffffffffff', 'dqsdq');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `firstname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `shippingAdress` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`firstname`, `name`, `email`, `phone`, `country`, `city`, `shippingAdress`, `product`, `message`) VALUES
('med', 'khair', 'pmedkhair@gmail.com', '0603002539', 'Morocco', 'Marrakesh', 'gdfgdfg', 'oil', 'contact me'),
('fggh', 'Mohammed-khair Souiba', 'kmedkhair@gmail.com', '0603002539', 'Morocco', 'Marrakesh', 'sgdgsg', 'qsdsqf', 'sqfqsf'),
('fgdg', 'João Souza Silva', 'teste@exemplo.us', '3121286800', 'Brazil', 'Belo Horizonte', 'gdfgdfg', 'Argan Oil Milk for Atopic and Sensitive Skin', 'dsddq');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `description`, `category`) VALUES
(1, 'Anti aging Argan Cream', 'anti-aging-argan-cream.png', 'An Anti-Aging Argan Cream is a luxurious skincare product infused with pure argan oil, renowned for its rich antioxidants and essential fatty acids. This cream helps to hydrate and nourish the skin, reducing the appearance of fine lines and wrinkles. It also enhances skin elasticity and promotes a youthful glow. Suitable for all skin types, the cream is designed to rejuvenate the skin, leaving it soft, smooth, and radiant.', 1),
(2, 'Anti-wrinkle argan cream', 'antiwrinkle-argan-cream.png', 'An Anti-Wrinkle Argan Cream is a potent skincare solution formulated with pure argan oil, known for its anti-aging properties. Rich in vitamin E and essential fatty acids, this cream deeply moisturizes the skin, helping to diminish the appearance of wrinkles and fine lines. It supports skin regeneration, improves elasticity, and promotes a firmer, smoother complexion. Ideal for daily use, the cream is suitable for all skin types, offering a natural way to achieve youthful, wrinkle-free skin.', 1),
(3, 'Night Argan cream', 'argan-night-cream.png', 'Argan Night Cream is a nourishing and restorative skincare product designed to work while you sleep. Infused with pure argan oil, it is rich in antioxidants, vitamins, and essential fatty acids that deeply hydrate and rejuvenate the skin overnight. This cream helps to repair and renew skin cells, reducing signs of aging and improving skin texture. Upon waking, skin feels soft, smooth, and refreshed, with a noticeable reduction in fine lines and dryness. Ideal for all skin types, this night cream', 1),
(4, 'Lip cream', 'Baume-à-lèvre-ARGANisme.jpg', 'A Lip Cream is a moisturizing and protective treatment designed to hydrate and soothe dry, chapped lips. Formulated with nourishing ingredients like shea butter, beeswax, and essential oils, it provides deep hydration and helps restore the natural softness and smoothness of the lips. This cream creates a protective barrier that locks in moisture while shielding lips from environmental stressors. Ideal for daily use, it leaves lips feeling soft, supple, and healthy, with a subtle sheen.', 1),
(5, 'Almond Cream', 'creme-damande-douce.jpg', 'Almond Cream is a rich and soothing skincare product made with sweet almond oil, known for its moisturizing and nourishing properties. This cream deeply hydrates the skin, helping to improve its texture and tone while providing essential nutrients. It’s particularly beneficial for dry or sensitive skin, offering relief from irritation and leaving the skin soft, smooth, and radiant. Almond Cream is ideal for daily use, offering a natural way to maintain healthy, glowing skin, with the gentle, nut', 1),
(6, 'Anti psoriasis argan oil cream', 'Crème-dargan-anti-psoriasis.jpg', 'Anti-Psoriasis Argan Oil Cream is a specialized skincare treatment designed to soothe and manage the symptoms of psoriasis. Enriched with pure argan oil, known for its anti-inflammatory and healing properties, this cream helps to reduce redness, itching, and scaling associated with psoriasis. It deeply hydrates and nourishes the skin, promoting repair and alleviating discomfort. Suitable for sensitive skin, this cream provides a calming effect, helping to restore skin natural barrier and improve', 1),
(7, 'Argan oil milk', 'arganisme-milk.png', 'Argan Oil Milk is a lightweight, hydrating emulsion that combines the nourishing benefits of pure argan oil with the soothing properties of milk. This unique formula penetrates deeply into the skin, providing intense moisture and leaving the skin soft, smooth, and radiant. The milk component helps to calm and balance the skin, making it ideal for all skin types, including sensitive skin. Argan Oil Milk can be used as a daily moisturizer, offering a natural glow and enhanced skin elasticity while', 2),
(8, 'Argan oil body milk', 'lait-hydratant-125ml.jpg', 'Argan Oil Body Milk is a luxurious and nourishing body lotion that combines the moisturizing power of pure argan oil with the lightness of milk. This silky-smooth formula absorbs quickly into the skin, delivering deep hydration and essential nutrients to help maintain softness and elasticity. Rich in antioxidants and essential fatty acids, the body milk helps to protect the skin from environmental damage while promoting a radiant, healthy glow. Ideal for daily use, it leaves the skin feeling vel', 2),
(9, 'Argan Oil Milk for Atopic and Sensitive Skin', 'milk-80ml.png', 'Argan Oil Milk for Atopic and Sensitive Skin is a gentle, soothing emulsion specifically formulated to care for delicate and reactive skin types. Infused with pure argan oil, renowned for its calming and moisturizing properties, this lightweight milk deeply hydrates and nourishes the skin without causing irritation. It helps to alleviate dryness, redness, and discomfort often associated with atopic dermatitis and sensitive skin conditions. The mild, non-greasy formula absorbs quickly, leaving th', 2),
(10, 'Ghassoul paste with honey', 'ghassoul-honey.jpg', 'Ghassoul Paste with Honey is a luxurious, natural skincare treatment that combines the purifying benefits of ghassoul clay with the nourishing properties of honey. Ghassoul clay, rich in minerals, helps to detoxify the skin by drawing out impurities and excess oil, while gently exfoliating to leave the skin smooth and refreshed. The addition of honey provides deep hydration, soothing the skin and adding a natural glow. This paste is ideal for use as a face mask or body treatment, offering a revi', 3),
(11, 'Ghassoul paste with orange blossom', 'ghassoul-orange-blossom-.jpg', 'Ghassoul Paste with Orange Blossom is a rejuvenating skincare treatment that blends the mineral-rich properties of ghassoul clay with the soothing and aromatic essence of orange blossom. Ghassoul clay deeply cleanses the skin, removing impurities and excess oil while providing gentle exfoliation. The orange blossom adds a calming, fragrant touch, helping to refresh and revitalize the skin. This paste can be used as a face mask or body treatment, leaving the skin feeling purified, soft, and delic', 3),
(12, 'Ghassoul paste with rose', 'ghassoul-rose.jpg', 'Ghassoul Paste with Rose is a luxurious and rejuvenating skincare treatment that combines the deep-cleansing benefits of ghassoul clay with the soothing and fragrant essence of rose. Rich in minerals, ghassoul clay helps to detoxify the skin by drawing out impurities and excess oil, while gently exfoliating to reveal a smoother, more radiant complexion. The rose infusion adds a touch of hydration, calming the skin and leaving it delicately scented with a subtle floral aroma. This versatile paste', 3),
(13, 'Ghassoul paste face mask with rose', 'ghassoul-rose-100g.jpg', 'Ghassoul Paste Face Mask with Rose is a luxurious facial treatment that blends the purifying power of ghassoul clay with the calming and hydrating properties of rose. This mask deeply cleanses the skin, drawing out impurities and excess oil while providing gentle exfoliation to reveal a fresh, smooth complexion. The addition of rose helps to soothe and hydrate the skin, leaving it soft, balanced, and delicately scented. Perfect for all skin types, this face mask offers a rejuvenating experience,', 3),
(14, 'Argan Shampoo for All Hair Types', 'arganisme-shampoo-300-300.jpg', 'Argan Shampoo for All Hair Types is a versatile and nourishing haircare solution enriched with pure argan oil, known for its hydrating and strengthening properties. This shampoo gently cleanses while delivering essential nutrients to the hair, helping to restore moisture, improve elasticity, and enhance shine. Suitable for all hair types, it works to reduce frizz, prevent breakage, and promote a healthy scalp. The lightweight formula ensures that hair is left feeling soft, smooth, and manageable', 4),
(15, 'Argan Shampoo Nature', 'shampoing-dargan.jpg', 'Argan Shampoo Nature is a natural and eco-friendly haircare product formulated with pure argan oil, known for its nourishing and restorative properties. Free from harsh chemicals, sulfates, and parabens, this shampoo gently cleanses the hair while providing essential moisture and nutrients. The natural ingredients help to strengthen and protect the hair, enhancing its natural shine and softness. Ideal for all hair types, Argan Shampoo Nature leaves hair feeling clean, refreshed, and revitalized,', 4),
(16, 'Argan oil shower gel', 'shower-gel.jpg', 'Argan Oil Shower Gel is a luxurious and moisturizing body wash infused with pure argan oil, known for its rich blend of antioxidants, vitamins, and essential fatty acids. This shower gel gently cleanses the skin, removing impurities while providing deep hydration and nourishment. The creamy formula helps to leave the skin feeling soft, smooth, and refreshed, with a natural, healthy glow. Suitable for all skin types, Argan Oil Shower Gel creates a rich, foamy lather that indulges the senses with ', 4),
(17, 'Moroccan Black soap', 'black-soap.jpg', 'Moroccan Black Soap, also known as \"Beldi\" soap, is a traditional skincare product used in Moroccan hammam rituals. Made from a base of olive paste, this soap is rich in vitamins and antioxidants, providing a deep-cleansing and exfoliating experience. The thick, creamy texture of Moroccan Black Soap helps to remove dead skin cells, detoxify the skin, and unclog pores, leaving the skin feeling soft, smooth, and rejuvenated. Often infused with essential oils like eucalyptus or argan oil, it also o', 5),
(18, 'Argan Oil with Amber Flavor', 'argan-oil-with-amber.jpg', 'Argan Oil with Amber Flavor is a luxurious skincare product that combines the nourishing benefits of pure argan oil with the warm, rich scent of amber. This blend offers deep hydration and essential nutrients, helping to moisturize and rejuvenate the skin while providing a subtle, captivating fragrance. The argan oil antioxidants and fatty acids work to improve skin elasticity, reduce signs of aging, and promote a healthy, glowing complexion. Ideal for daily use, this product leaves the skin fee', 6),
(19, 'Argan Oil with Lavender Flavor', 'argan-oil-with-lavender.jpg', 'Argan Oil with Lavender Flavor is a soothing and aromatic skincare product that combines the moisturizing benefits of pure argan oil with the calming essence of lavender. This blend deeply hydrates and nourishes the skin, providing essential fatty acids and antioxidants to improve skin texture and elasticity. The lavender infusion adds a relaxing, floral fragrance that promotes a sense of tranquility and helps to relieve stress. Ideal for daily use, this argan oil leaves the skin feeling soft, s', 6),
(20, 'Argan Oil with Mukhalat', 'argan-oil-with-mukhalat.jpg', 'Argan Oil with Mukhalat is a luxurious skincare product that blends the nourishing properties of pure argan oil with mukhalat, a traditional blend of fragrant spices and exotic scents. Mukhalat, often used in Middle Eastern perfumes, adds a rich, complex aroma to the argan oil, enhancing its indulgent experience. This combination provides deep hydration, improves skin texture, and delivers essential nutrients while leaving the skin delicately scented with the warm, captivating notes of mukhalat.', 6),
(21, 'Argan Oil with Musk', 'argan-oil-with-musk.jpg', 'Argan Oil with Musk combines the nourishing benefits of pure argan oil with the warm, sensual fragrance of musk. The argan oil deeply hydrates and revitalizes the skin, delivering essential fatty acids and antioxidants to improve texture and elasticity. The musk infusion adds a subtle, earthy scent that enhances the overall sensory experience, providing a touch of elegance and sophistication. Ideal for daily use, this blend leaves the skin feeling soft, smooth, and well-moisturized, with the add', 6),
(22, 'Argan Oil with Orange Blossom', 'argan-oil-with-orange-blossom.jpg', 'Argan Oil with Orange Blossom combines the rejuvenating properties of pure argan oil with the fresh, uplifting scent of orange blossom. This luxurious blend deeply hydrates and nourishes the skin, providing essential fatty acids and antioxidants to improve texture and elasticity. The orange blossom infusion adds a delicate, floral fragrance that enhances the sensory experience, offering a calming and refreshing touch. Ideal for daily use, this blend leaves the skin feeling soft, smooth, and revi', 6),
(23, 'Argan Oil with Orange Blossom', 'argan-oil-with-orange-blossom.jpg', 'Argan Oil with Orange Blossom combines the rejuvenating properties of pure argan oil with the fresh, uplifting scent of orange blossom. This luxurious blend deeply hydrates and nourishes the skin, providing essential fatty acids and antioxidants to improve texture and elasticity. The orange blossom infusion adds a delicate, floral fragrance that enhances the sensory experience, offering a calming and refreshing touch. Ideal for daily use, this blend leaves the skin feeling soft, smooth, and revi', 6),
(24, 'Argan Oil with Rose', 'argan-oil-with-rose.jpg', 'Argan Oil with Rose blends the enriching properties of pure argan oil with the delicate, soothing fragrance of rose. This luxurious combination deeply moisturizes and nourishes the skin, providing essential fatty acids and antioxidants to enhance skin texture and elasticity. The rose infusion adds a subtle, floral scent that calms and refreshes, making the skincare experience both indulgent and aromatic. Ideal for daily use, this blend leaves the skin feeling soft, smooth, and hydrated, with the', 6),
(25, 'Argan Oil with Rosemary', 'argan-oil-with-rosemary.jpg', 'Argan Oil with Rosemary combines the deep moisturizing benefits of pure argan oil with the invigorating and aromatic properties of rosemary. This blend provides essential fatty acids and antioxidants that hydrate and nourish the skin, improving texture and elasticity. Rosemary’s natural scent adds a fresh, herbaceous aroma while also offering potential benefits for circulation and skin rejuvenation. Ideal for daily use, this combination leaves the skin feeling revitalized and soft, with a refres', 6),
(26, 'Argan Oil with Sandalwood', 'argan-oil-with-sandalwood.jpg', 'Argan Oil with Sandalwood merges the deeply moisturizing properties of pure argan oil with the warm, earthy aroma of sandalwood. This luxurious blend hydrates and nourishes the skin, providing essential fatty acids and antioxidants to enhance texture and elasticity. Sandalwood’s rich, soothing fragrance adds a touch of relaxation and elegance, creating a calming and indulgent skincare experience. Ideal for daily use, this combination leaves the skin feeling soft, smooth, and well-moisturized, wi', 6),
(27, 'Organic Argan Oil', 'organic-argan-oil.jpg', 'Organic Argan Oil is a pure, natural oil extracted from the nuts of the argan tree, grown organically without synthetic chemicals or pesticides. Renowned for its rich content of essential fatty acids, antioxidants, and vitamin E, this oil deeply nourishes and hydrates the skin, helping to improve elasticity and reduce signs of aging. It also offers restorative benefits for hair, enhancing shine and strength while reducing frizz. Ideal for daily use, Organic Argan Oil is suitable for all skin and', 6),
(28, 'Cosmetic pure Argan Oil', 'Argan-oil-for-cosmetic-use-40ml.jpg', 'Cosmetic Pure Argan Oil is a high-quality, unrefined oil extracted from the argan nuts, specifically formulated for skincare and beauty applications. Rich in essential fatty acids, antioxidants, and vitamin E, this pure oil deeply moisturizes and nourishes the skin, helping to improve texture, elasticity, and radiance. It also provides restorative benefits for hair, enhancing shine, softness, and manageability. Free from additives and preservatives, Cosmetic Pure Argan Oil is ideal for all skin ', 6),
(29, 'Prickly Pear Seed Oil', 'prickly-pear.jpg', 'Prickly Pear Seed Oil, also known as Barbary fig oil, is a highly prized, luxurious oil extracted from the seeds of the prickly pear cactus. Renowned for its exceptional antioxidant properties, this oil is rich in essential fatty acids, vitamin E, and amino acids. It provides deep hydration, promotes skin elasticity, and helps to reduce the appearance of fine lines and wrinkles. Prickly Pear Seed Oil is also known for its soothing and anti-inflammatory benefits, making it ideal for sensitive and', 6),
(30, 'Argan Oil with Arnica Montana Flavor', 'Lotion-dargan-parfumée-pour-massage-ARGANisme.jpg', 'Argan Oil Lotion with Arnica Montana Flavor is a soothing and revitalizing skincare product that combines the nourishing benefits of pure argan oil with the calming and therapeutic properties of Arnica Montana. Argan oil deeply moisturizes and enriches the skin with essential fatty acids and antioxidants, while Arnica Montana, known for its anti-inflammatory and healing effects, helps to alleviate soreness and reduce swelling. This lotion provides a luxurious, hydrating experience with a subtle,', 6);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
