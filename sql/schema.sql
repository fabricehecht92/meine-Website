CREATE TABLE table_name (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    hyperlink VARCHAR(255) NOT NULL
);

INSERT INTO table_name (title, hyperlink) VALUES
('Lebenslauf', '/lebenslauf.php'),
('Projekte', '/projekte.html'),
('Kontakt', '/kontakt.php');
