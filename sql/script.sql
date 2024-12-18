-- Création de la base de données
CREATE DATABASE car_rental;
USE car_rental;

-- Table des utilisateurs
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    permis_conduire VARCHAR(20) NOT NULL,
    role ENUM('utilisateur', 'admin') DEFAULT 'utilisateur',
    statut ENUM('en_attente', 'valide') DEFAULT 'en_attente',
    archived BOOLEAN DEFAULT 0
);

-- Table des véhicules
CREATE TABLE vehicles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(50) NOT NULL,
    marque VARCHAR(50) NOT NULL,
    modele VARCHAR(50) NOT NULL,
    localisation VARCHAR(100) NOT NULL,
    etat ENUM('disponible', 'loué', 'en_réparation') DEFAULT 'disponible',
    prix_par_jour DECIMAL(10,2) NOT NULL,
    archived BOOLEAN DEFAULT 0,
    image_url VARCHAR(255) DEFAULT NULL
);

-- Table des réservations
CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    vehicle_id INT NOT NULL,
    admin_id INT NULL,
    date_debut DATE NOT NULL,
    date_fin DATE NOT NULL,
    statut ENUM('confirmée', 'annulée') DEFAULT 'confirmée',
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (vehicle_id) REFERENCES vehicles(id) ON DELETE CASCADE,
    FOREIGN KEY (admin_id) REFERENCES users(id) ON DELETE SET NULL
);

-- Table des actions administrateur
CREATE TABLE admin_actions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    admin_id INT NOT NULL,
    action_type ENUM('ajout', 'modification', 'archivage') NOT NULL,
    vehicle_id INT NOT NULL,
    date_action TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (admin_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (vehicle_id) REFERENCES vehicles(id) ON DELETE CASCADE
);

-- Nouvelle Table : Paiements
CREATE TABLE payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    reservation_id INT NOT NULL,
    montant DECIMAL(10, 2) NOT NULL,
    mode_paiement ENUM('carte', 'especes', 'virement') NOT NULL,
    statut ENUM('en_attente', 'effectué', 'échoué') DEFAULT 'en_attente',
    date_paiement TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (reservation_id) REFERENCES reservations(id) ON DELETE CASCADE
);

-- Insertion des données dans car_rental.users
INSERT INTO car_rental.users 
(nom, email, mot_de_passe, permis_conduire, role, statut, archived) 
VALUES
('Abdelali Latifi', 'abdelali.latifi@gmail.com', 'password123', 'A123456', 'utilisateur', 'valide', 0),
('Abdelmouhaimine El Jassimi', 'abdelmouhaimine.eljassimi@gmail.com', 'password123', 'A123457', 'utilisateur', 'valide', 0),
('Achraf Sikal', 'achraf.sikal@gmail.com', 'password123', 'A123458', 'utilisateur', 'valide', 0),
('Ahmed Taoudi', 'ahmed.taoudi@gmail.com', 'password123', 'A123459', 'utilisateur', 'valide', 0),
('Akraou Ayoub', 'akraou.ayoub@gmail.com', 'password123', 'A123460', 'utilisateur', 'valide', 0),
('Asmae El Hamzaoui', 'asmae.elhamzaoui@gmail.com', 'password123', 'A123461', 'utilisateur', 'valide', 0),
('Atig Hamza', 'atig.hamza@gmail.com', 'password123', 'A123462', 'utilisateur', 'valide', 0),
('Belal Allala', 'belal.allala@gmail.com', 'password123', 'A123463', 'utilisateur', 'valide', 0),
('Boukniter Khawla', 'boukniter.khawla@gmail.com', 'password123', 'A123464', 'utilisateur', 'valide', 0),
('Chaimaa Elomrani', 'chaimaa.elomrani@gmail.com', 'password123', 'A123465', 'utilisateur', 'valide', 0),
('Echchabli Hamza', 'echchabli.hamza@gmail.com', 'password123', 'A123466', 'utilisateur', 'valide', 0),
('El Barry Anouar', 'elbarry.anouar@gmail.com', 'password123', 'A123467', 'utilisateur', 'valide', 0),
('Hassan Belaqdour', 'hassan.belaqdour@gmail.com', 'password123', 'A123468', 'utilisateur', 'valide', 0),
('Imrane Ait Dahmade', 'imrane.aitdahmade@gmail.com', 'password123', 'A123469', 'utilisateur', 'valide', 0),
('Ismail Baoud', 'ismail.baoud@gmail.com', 'password123', 'A123470', 'utilisateur', 'valide', 0),
('Jihane Elmajdi', 'jihane.elmajdi@gmail.com', 'password123', 'A123471', 'utilisateur', 'valide', 0),
('Laqsoumi Mohammed', 'laqsoumi.mohammed@gmail.com', 'password123', 'A123472', 'admin', 'valide', 0),
('Ndiaye Moustapha', 'ndiaye.moustapha@gmail.com', 'password123', 'A123473', 'utilisateur', 'valide', 0),
('Nidam Ibrahim', 'nidam.ibrahim@gmail.com', 'password123', 'A123474', 'utilisateur', 'valide', 0),
('Oumaima Ait Said', 'oumaima.aitsaid@gmail.com', 'password123', 'A123475', 'utilisateur', 'valide', 0),
('Sabri Amine', 'sabri.amine@gmail.com', 'password123', 'A123476', 'utilisateur', 'valide', 0),
('Taha Jaiti', 'taha.jaiti@gmail.com', 'password123', 'A123477', 'utilisateur', 'valide', 0),
('Tawba Zehaf', 'tawba.zehaf@gmail.com', 'password123', 'A123478', 'utilisateur', 'valide', 0),
('Yassine Snaiki', 'yassine.snaiki@gmail.com', 'password123', 'A123479', 'utilisateur', 'valide', 0),
('Zakariae El Hassad', 'zakariae.elhassad@gmail.com', 'password123', 'A123480', 'utilisateur', 'valide', 0),
('Zirari Nada', 'zirari.nada@gmail.com', 'password123', 'A123481', 'utilisateur', 'valide', 0);