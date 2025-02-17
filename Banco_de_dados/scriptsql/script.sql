/* 1 Para Muitos */
CREATE TABLE Categoria (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE Produto (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    categoria_id INT,
    FOREIGN KEY (categoria_id) REFERENCES Categoria(id) ON DELETE SET NULL
);

/* Insert Categoria */
INSERT INTO Categoria (nome) VALUES
('Eletrônicos'),
('Vestuário'),
('Alimentos');

/* Insert Produto */
INSERT INTO Produto (nome, preco) VALUES
('Smartphone', 1500.00),
('Notebook', 3500.00),
('Camiseta', 50.00),
('Calça Jeans', 120.00),
('Chocolate', 10.00);

/* Muitos para Muitos */
CREATE TABLE Aluno (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE Curso (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE Matricula (
    aluno_id INT AUTO_INCREMENT,
    curso_id INT AUTO_INCREMENT,
    data_matricula DATE NOT NULL DEFAULT CURRENT_DATE,
    PRIMARY KEY (aluno_id, curso_id),
    FOREIGN KEY (aluno_id) REFERENCES Aluno(id) ON DELETE CASCADE,
    FOREIGN KEY (curso_id) REFERENCES Curso(id) ON DELETE CASCADE
);

/* Insert Aluno */
INSERT INTO Aluno (nome) VALUES
('Carlos Henrique'),
('Wagner'),
('Memphis');

/* Insert Curso */
INSERT INTO Curso (nome) VALUES
('Matemática'),
('História'),
('Física');

/* Insert Matricula */
INSERT INTO Matricula (data_matricula) VALUES
('2025-02-01'),
('2025-02-05'),
('2025-02-10'),
('2025-02-15');