CREATE TABLE paintings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    production_year INT NOT NULL,
    artist_name VARCHAR(255),
    width DECIMAL(5,2),
    height DECIMAL(5,2)
);
