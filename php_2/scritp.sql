-- Création de la table poèsie avec des colonnes enrichies
CREATE TABLE poèsie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Auteur VARCHAR(100) NOT NULL,
    poèmes TEXT NOT NULL,
    annee_publication YEAR,
    mouvement_litteraire VARCHAR(100),
    genre VARCHAR(50),
    theme VARCHAR(100),
    recueil VARCHAR(200),
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insertion de 13 auteurs avec leurs poèmes et informations détaillées
INSERT INTO poèsie (
    Auteur, 
    poèmes, 
    annee_publication, 
    mouvement_litteraire, 
    genre, 
    theme, 
    recueil
) VALUES 
(
    'Victor Hugo', 
    'Demain, dès l`aube, à l`heure où blanchit la campagne,
Je partirai. Vois-tu, je sais que tu m`attends.', 
    1856, 
    'Romantisme', 
    'Poème lyrique', 
    'Amour et deuil', 
    'Les Contemplations'
),
(
    'Victor Hugo', 
    'Ô souvenirs ! printemps ! aurore !
Fraîcheur des bois, calme des nuits !', 
    1856, 
    'Romantisme', 
    'Poème descriptif', 
    'Nature et mélancolie', 
    'Les Contemplations'
),
(
    'Charles Baudelaire', 
    'Rappelez-vous l`objet que nous vîmes, mon âme,
Ce beau matin de juin qui donnait à penser :
Au détour d`un sentier une charogne infâme,
Sur un lit semé de cailloux, se décomposait.', 
    1857, 
    'Symbolisme', 
    'Sonnet', 
    'Mort et beauté', 
    'Les Fleurs du Mal'
),
(
    'Charles Baudelaire', 
    'La Nature est un temple où de vivants piliers
Laissent parfois sortir de confuses paroles ;', 
    1857, 
    'Symbolisme', 
    'Sonnet', 
    'Synesthésie', 
    'Les Fleurs du Mal'
),
(
    'Arthur Rimbaud', 
    'C`est un trou de verdure où chante une rivière,
Accrochant follement aux herbes des haillons
D`argent ; où le soleil, de la montagne fière,
Luit : c`est un petit val qui mousse de rayons.', 
    1870, 
    'Symbolisme', 
    'Poème descriptif', 
    'Nature', 
    'Poésies'
),
(
    'Arthur Rimbaud', 
    'Je n`ai embrassé que des ombres, et des ombres,
Et j`ai cru parfois réchauffer des amours.', 
    1870, 
    'Symbolisme', 
    'Poème lyrique', 
    'Amour et illusion', 
    'Poésies'
),
(
    'Paul Verlaine', 
    'Il pleure dans mon cœur
Comme il pleut sur la ville,
Quelle est cette langueur
Qui pénètre mon cœur ?', 
    1874, 
    'Symbolisme', 
    'Poème court', 
    'Mélancolie', 
    'Romances sans paroles'
),
(
    'Paul Verlaine', 
    'Les sanglots longs
Des violons
De l`automne', 
    1866, 
    'Symbolisme', 
    'Poème court', 
    'Mélancolie', 
    'Poèmes saturniens'
),
(
    'Stéphane Mallarmé', 
    'Rien, cette écume, vierge vers
À ne désigner que la coupe', 
    1876, 
    'Symbolisme', 
    'Poème expérimental', 
    'Métaphysique', 
    'L`Après-midi d`un faune'
),
(
    'Stéphane Mallarmé', 
    'Un coup de dés jamais n`abolira le hasard', 
    1897, 
    'Symbolisme', 
    'Poème expérimental', 
    'Métaphysique', 
    'Un coup de dés jamais n`abolira le hasard'
),
(
    'Guillaume Apollinaire', 
    'Sous le pont Mirabeau coule la Seine
Et nos amours', 
    1913, 
    'Modernisme', 
    'Poème libre', 
    'Amour', 
    'Alcools'
),
(
    'Guillaume Apollinaire', 
    'Tu n`es pas morte encore et tant de violence
Subsiste en ta beauté', 
    1913, 
    'Modernisme', 
    'Poème libre', 
    'Beauté et violence', 
    'Alcools'
),
(
    'André Breton', 
    'Ma femme aux hanches de guerre civile
Aux seins de nuit et de jour buveuse de mondes', 
    1924, 
    'Surréalisme', 
    'Poème surréaliste', 
    'Amour et métaphore', 
    'L`Union libre'
);